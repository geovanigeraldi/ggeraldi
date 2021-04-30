<?php

/*

package elizamatheme

    ========================
        THEME SUPPORT OPTIONS
    ========================
*/

$elizama_formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');


        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-formats', $elizama_formats );
        add_theme_support( "the_post_thumbnail" );
        add_theme_support( "title-tag" );
        add_theme_support('custom-background');
        add_theme_support( 'automatic-feed-links' );
        add_theme_support('post-thumbnails');
        add_theme_support('wide-align');
        add_theme_support('disable-custom-font-sizes');
        add_theme_support( 'editor-font-sizes', 
            array(
                array(       
                    'name' => __('Small', 'elizama'),
                    'shortName' => __('S', 'elizama'),
                    'size' => 11,
                    'slug' => 'small'
                ),
                array(        
                    'name' => __('Regular', 'elizama'),
                    'shortName' => __('M', 'elizama'),
                    'size' => 16,
                    'slug' => 'regular'
                ),
                array(
                    
                    'name' => __('Large', 'elizama'),
                    'shortName' => __('L', 'elizama'),
                    'size' => 20,
                    'slug' => 'large'
                ),
            ) 
        );
  // WooCommerce support.
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
      
        $elizama_header_support = array(
            'width' => 520,
            'height' => 128,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => false,
        );

        add_theme_support( 'custom-header', $elizama_header_support );

/* Activate Nav Menu Option */
function elizama_register_nav_menu()
{
    register_nav_menu('primary', 'Header Navigation Menu');
    register_nav_menu('secondary', 'Footer Navigation Menu');
}
add_action('after_setup_theme', 'elizama_register_nav_menu');

/* Activate HTML5 features */
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

/*
    ========================
        SIDEBAR FUNCTIONS
    ========================
*/

    add_action( 'widgets_init', 'elizama_slug_widgets_init' );

function elizama_slug_widgets_init()
{
    register_sidebar(

        array(
        'name' => __( 'Main Sidebar', 'elizama' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'elizama' ),
    'before_title'  => '<span class="widgettitle meta-heading">',
    'after_title'   => '</span>',
    )

    );
}

/*
    ========================
        BLOG LOOP CUSTOM FUNCTIONS
    ========================
*/

function elizama_posted_meta()
{
    $posted_on = human_time_diff(get_the_time('U'), current_time('timestamp'));

    $categories = get_the_category();
    $separator = ', ';
    $output = '';
    $i = 1;

    if (!empty($categories)):
        foreach ($categories as $category):
            if ($i > 1): $output .= $separator;
    endif;
    $output .= '<a href="'.esc_url(get_category_link($category->term_id)).'">'.esc_html($category->name).'</a>';
    ++$i;
    endforeach;
    endif;

    return '<span class="posted-on">Posted <a href="'.esc_url(get_permalink()).'">'.$posted_on.'</a> ago</span> / <span class="posted-in">'.$output.'</span>';
}

function elizama_posted_footer($onlyComments = false)
{

    $comments_num = get_comments_number();
    if (comments_open()) {
        if ($comments_num == 0) {
            $comments = __('No Comments', 'elizama');
        } elseif ($comments_num > 1) {
            $comments = $comments_num.__(' Comments', 'elizama');
        } else {
            $comments = __('1 Comment', 'elizama');
        }
        $comments = '<a class="comments-link small text-caps" href="'.esc_url(get_comments_link()).'">'.$comments.' <span class="elizama-icon elizama-comment"></span></a>';
    } else {
        $comments = __('Comments are closed', 'elizama');
    }

    if ($onlyComments) {
        return $comments;
    }

    return '<div class="post-footer-container"><div class="row"><div class="col-xs-12 col-sm-6">'.get_the_tag_list('<div class="tags-list"><span class="elizama-icon elizama-tag"></span>', ' ', '</div>').'</div><div class="col-xs-12 col-sm-6 text-right">'.$comments.'</div></div></div>';
}

function elizama_get_attachment($num = 1)
{
    $output = '';
    if (has_post_thumbnail() && $num == 1):
        $output = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); else:
        $attachments = get_posts(array(
            'post_type' => 'attachment',
            'posts_per_page' => $num,
            'post_parent' => get_the_ID(),
        ));
    if ($attachments && $num == 1):
            foreach ($attachments as $attachment):
                $output = wp_get_attachment_url($attachment->ID);
    endforeach; elseif ($attachments && $num > 1):
            $output = $attachments;
    endif;

    wp_reset_postdata();

    endif;

    return $output;
}

/*
    ========================
        SINGLE POST CUSTOM FUNCTIONS
    ========================
*/
function elizama_post_navigation()
{

    $nav = '<div class="col-lg-12">';

    $nav .= '<div class="row">';

    $prev = get_previous_post_link('<div class="post-link-nav"><span class="elizama-icon elizama-chevron-left" aria-hidden="true"></span> %link</div>', '%title');
    $nav .= '<div class="col-xs-12 col-sm-6">'.$prev.'</div>';

    $next = get_next_post_link('<div class="post-link-nav">%link <span class="elizama-icon elizama-chevron-right" aria-hidden="true"></span></div>', '%title');
    $nav .= '<div class="col-xs-12 col-sm-6 text-right">'.$next.'</div>';

    $nav .= '</div>';
    $nav .= '</div>';

    return $nav;
}


 function elizama_link_edit() {
    ?>
    
    <div class="edit-link">
    <?php edit_post_link( $text = null, $before = '', $after = '', $id = 0, $class = 'post-edit-link' ); ?>

    </div>
    <?php
 }
function elizama_get_post_navigation()
{
    if (get_comment_pages_count() > 1 && get_option('page_comments')):

      get_template_part( 'templates/elizama-comment-nav');

    endif;
}


