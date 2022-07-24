
	<div class="comment-author vcard">
		<?php echo bitunit_lite_comment_author_avatar(); ?>
	</div>

<div class="comment-content">
	<footer class="comment-meta">
		<div class="comment-metadata">
			<?php echo bitunit_lite_get_comment_date( array( 'format' => 'M d, Y' ) ); ?>
			<?php printf( '<span class="posted-by">' . esc_html__( 'Posted by', 'bitunit_lite' ) . '</span> %s', bitunit_lite_get_comment_author_link() ); ?>
		</div>
	</footer>
	<?php echo bitunit_lite_get_comment_text(); ?>
</div>
<div class="reply">
	<?php echo bitunit_lite_get_comment_reply_link( array( 'reply_text' => '<i class="material-icons">reply</i>' ) ); ?>
</div>
