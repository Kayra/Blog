
<?php $comment_form_args = array(

	'comment_notes_before' => '',
	'fields' => apply_filters('comment_form_default_fields', array(
		'author' => '<input id="author" name="author" type="text" placeholder ="Name" value="' . 
					esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />',
		'email' => '<input id="email" name="email" type="text" placeholder="Email (won\'t appear)" value="' . 
					esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />',
		'url' => '',
		)),
	'comment_field' => '<textarea id="comment" name="comment" placeholder="Comment" cols="45" rows="8" 
						aria-required="true"></textarea>',
	'label_submit' => 'Publish comment',
	'comment_notes_after' => '',

) ?>

<div class="comments">
	<?php 
		wp_list_comments();
		comment_form($comment_form_args); 
	?>
</div>