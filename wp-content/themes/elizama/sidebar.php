<?php
// Dynamic Sidebar
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}?>
<div class="col-12 col-md-4 meta ">
    <div class="elizama-sidebar elizama-card">
    	<span class="elizama-sidebar-container elizama-widget">
    	<?php dynamic_sidebar( 'sidebar-1' ); ?>
    </span>
    </div>
</div>
	<!-- Sidebar fallback content -->
