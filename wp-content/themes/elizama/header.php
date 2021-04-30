<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
			<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
		<?php endif; ?>

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>

   
<main class="page projets-page">
    <section class="portfolio-block projects compact-grid">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elizama' ); ?></a>
		<nav class="navbar navbar-light navbar-expand-lg  bg-white portfolio-navbar">
		  <div class="container colort">

			<!-- Brand and toggle get grouped for better mobile display -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="<?php esc_attr_e('Toggle navigation','elizama');?>">
				<span class="sr-only"><?php esc_html_e('Toggle navigation','elizama');?></span><span class="navbar-toggler-icon"></span>
			</button>
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'navbarNav',
					'menu_class'        => 'nav navbar-nav ml-auto',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>
				<?php if (class_exists('WooCommerce')) { ?>
					<div class="d-flex flex-row bd-highlight mb-3 right">
		        	<?php 

		            elizama_cart_link();
		            ?>
		        </div>
		    <?php } ?>
		
			</div>
		</nav>
		<main class="container-fluid">
		    <section class="blockit">

		        <div class="row site-title" itemscope itemtype="title">
		            <div class="col-lg-12 text-center  title-position ">
		            	<?php if ( get_header_image() ) : ?>
		            		        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						        </a>

		            	<?php else: ?>
			            <div class="site-name "> 
			                <?php if( is_home() && is_front_page() ) :?>               
			                <h1 aria-label="<?php echo esc_attr_e('CodePen','elizama');?>">
			                    <a href="<?php echo esc_url(home_url('/'));?>"><span  data-text="<?php echo esc_html(get_bloginfo( 'name' ));?>"><?php echo esc_html(get_bloginfo( 'name' ));?></span></a>  
			                </h1>
			                <h3><?php echo esc_html(get_bloginfo( 'description' ));?></h3>
			                <?php else : ?>
			                <h1 aria-label="<?php echo esc_attr_e('CodePen','elizama');?>">
			                    <a href="<?php echo esc_url(home_url('/'));?>"><span  data-text="<?php echo esc_html(get_bloginfo( 'name' ));?>"><?php echo esc_html(get_bloginfo( 'name' ));?></span></a>  
			                </h1>
			                <?php endif;?>
			            </div>
			        <?php endif; ?>
		            </div>
		            
		        </div>
		    </section>
		</main>

