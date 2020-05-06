<?php /*
	
@package elizama

*/

if( post_password_required() ){
	return;
}

?>

<div id="comments" class="comments-area">

	<div class="container">


		
	<?php 
		if( have_comments() ):
		//We have comments
	?>
	
		<h2 class="comment-title">
			  <?php
        $comments_number = get_comments_number();
        if (1 === $comments_number) {
            /* translators: %s: post title */
            printf(esc_html__('One thought on &ldquo;%s&rdquo;', 'elizama'), esc_html(get_the_title()));
        } else {
            printf(
                esc_html(
                    /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'elizama'
                    )
                ),
                esc_html(number_format_i18n($comments_number)),
                esc_html(get_the_title())
            );
        }
        ?>
		</h2>
		
		<?php echo wp_kses_post(elizama_get_post_navigation()); ?>
		
		<ol class="comment-list">
			
			<?php 
				
				$args = array(
					'walker'			=> null,
					'max_depth' 		=> '',
					'style'				=> 'ol',
					'callback'			=> null,
					'end-callback'		=> null,
					'type'				=> 'all',
					'reply_text'		=> __('Reply', 'elizama'),
					'page'				=> '',
					'per_page'			=> '',
					'avatar_size'		=> 64,
					'reverse_top_level' => null,
					'reverse_children'	=> '',
					'format'			=> 'html5',
					'short_ping'		=> false,
					'echo'				=> true
				);
				
				wp_list_comments( $args );
			?>
			
		</ol>
		
		<?php echo wp_kses_post(elizama_get_post_navigation()); ?>
		
		<?php 
			if( !comments_open() && get_comments_number() ):
		?>
			 
			 <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'elizama' ); ?></p>
			 
		<?php
			endif;
		?>
		
	<?php	
		endif;
	?>
	
	<?php 
		
		$fields = array(
			
			'author' =>
				'<div class="form-group"><label for="author">' . __( 'Name', 'elizama' ) . '</label> <span class="required">*</span> <input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div>',
				
			'email' =>
				'<div class="form-group"><label for="email">' . __( 'Email', 'elizama' ) . '</label> <span class="required">*</span><input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" /></div>',
				
			'url' =>
				'<div class="form-group last-field"><label for="url">' . __( 'Website', 'elizama' ) . '</label><input id="url" name="url" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>'
				
		);
		
		$args = array(
			
			'class_submit' => 'btn btn-block btn-lg btn-primary btn-elizama',
			'labelizama_submit' => __( 'Submit Comment', 'elizama' ),
			'comment_field' =>
				'<p class="form-group"><label for="comment">' . _x( 'Comment', 'noun', 'elizama' ) . '</label> <span class="required">*</span><textarea id="comment" class="form-control" name="comment" rows="4" required="required"></textarea></p>',
			'fields' => apply_filters( 'elizama_comment_form_default_fields', $fields )
			
		);
		
		comment_form( $args ); 
		
	?>
	</div>
	
</div><!-- .comments-area -->
