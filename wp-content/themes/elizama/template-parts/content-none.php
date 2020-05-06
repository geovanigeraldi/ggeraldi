<header class="page-header">
	<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'elizama' ); ?></h1>
</header>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p>
		<?php
		/* translators: %s: Post editor URL. */
		printf( esc_html__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'elizama' ), esc_url( admin_url( 'post-new.php' ) ) );
		?>
	</p>

	<?php elseif ( is_search() ) : ?>

	<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'elizama' ); ?></p>
		<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'elizama' ); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
