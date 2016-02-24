<?php

    /* Scripts
    –––––––––––––––––––––––––––––––––––––––––––––––––– */

	function google_fonts() {

		wp_register_style('googlefont-OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300', array(), false, 'all');

        wp_enqueue_style('googlefont-OpenSans');

	}

	add_action('wp_enqueue_scripts', 'google_fonts');

	function apacheblack_scripts() {

		wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
		wp_enqueue_style('bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('style', get_stylesheet_uri());

		if ( is_single() || (is_page() && !is_page_template())) {
        wp_register_script('post-script', get_template_directory_uri() . '/js/post.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('post-script');
		wp_register_script('classie', get_template_directory_uri() . '/js/lib/classie.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('classie');
    	}

        wp_register_script('project', get_template_directory_uri() . '/js/project.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('project');

	}

    add_action('wp_enqueue_scripts', 'apacheblack_scripts');



    /* Shortcodes
    –––––––––––––––––––––––––––––––––––––––––––––––––– */

    function media_format_shortcode($attributes, $content = null) {
        $new_content = '</div></div>';
        $new_content .= '<div class="col-md-12">' . $content . '</div>';
        $new_content .= '<div class="col-md-6 col-md-offset-3"><div class="content-text">';
        return $new_content;
    }

    add_shortcode('media', 'media_format_shortcode');


    /* Functions
    –––––––––––––––––––––––––––––––––––––––––––––––––– */

    function apacheblack_comments_callback($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);

        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
    ?>
        <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
        <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <?php endif; ?>
        <div class="comment-author-date">
            <div class="comment-author vcard">
            <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            <?php printf( __( '<p><cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
            </div>

            <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                <?php
                    /* translators: 1: date, 2: time */
                    printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
                ?>
            </div>
        </div>

        <div class="comment-text">
            <?php comment_text(); ?>
            <?php if ( $comment->comment_approved == '0' ) : ?>
                <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
                <br />
            <?php endif; ?>

            <!-- <div class="reply">
            <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div> -->
            <?php if ( 'div' != $args['style'] ) : ?>
            </div>
            <?php endif; ?>
        </div>
        <?php
    }
