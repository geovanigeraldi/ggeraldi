<?php
/**
 * elizama Theme Customizer.
 *
 *
 * @param WP_Customize_Manager $wp_customize theme Customizer object
 *
 */

function Elizama_customize_register($wp_customize)
{
    //Add a class for titles
    class Elizama_Info extends WP_Customize_Control
    {
        public $type = 'info';
        public $label = '';

        public function render_content()
        {
            ?>
<h3 style="text-decoration: underline; color: #ff0066; text-transform: uppercase;"><?php echo esc_html($this->label); ?></h3>
<?php
        }
    }

    class Elizama_Customize_Textarea_Control extends WP_Customize_Control
    {
        public $type = 'textarea';

        public function render_content()
        {
            ?>
<label>
    <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
    <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
</label>
<?php
        }
    }

class Elizama_Customize_Range_Control extends WP_Customize_Control
{
    public $type = 'custom_range';


    public function render_content()
    {
        ?>
        <label>
            <?php if ( ! empty( $this->label )) : ?>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
            <?php endif; ?>

            <input data-input-type="range" type="range"  <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> oninput="jQuery(this).next('input').val( jQuery(this).val() )" />
            <input onKeyUp="jQuery(this).prev('input').val( jQuery(this).val() )" type='text' value='<?php echo esc_attr( $this->value() ); ?>' disabled>

            <?php if ( ! empty( $this->description )) : ?>
                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
            <?php endif; ?>
        </label>
        <?php
    }
}

    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->remove_control('header_textcolor');
    $wp_customize->remove_control('display_header_text');


    /* Link Focus color */

    $wp_customize->add_setting(
        'link_hover_and_focus_menu',  array(
            'default' => '#09a8ed',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'link_hover_and_focus_menu', array(
                'label' => __('Link Focus', 'elizama'),
                'section' => 'colors',
                'settings' => 'link_hover_and_focus_menu',
            )
        )
    );


    /*

    Menu text color 
    */


    $wp_customize->add_setting('color_text_menu', array(
    'default' => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(
    new WP_Customize_Color_Control($wp_customize, 'color_text_menu', array(
        'label' => __('Menu text color', 'elizama'),
        'section' => 'colors',
        'settings' => 'color_text_menu',
    ))
    );
    /*


    Menu color
    */

    $wp_customize->add_setting(
        'background_color_menu',  array(
            'default' => '#1e1e1e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'background_color_menu', array(
                'label' => __('Menu and footer background color', 'elizama'),
                'section' => 'colors',
                'settings' => 'background_color_menu',
            )
        )
    );

    /* header background */


    
        $wp_customize->add_setting(
        'background_header',  array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'background_header', array(
                'label' => __('header background color', 'elizama'),
                'section' => 'colors',
                'settings' => 'background_header',
            )
        )
    );


    /* Title color */


    $wp_customize->add_setting(
        'site_title_shadow',  array(
            'default' => '#1e1e1e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'site_title_shadow', array(
                'label' => __('Title shadow color', 'elizama'),
                'section' => 'colors',
                'settings' => 'site_title_shadow',
            )
        )
    );

    $wp_customize->add_setting(
        'elizama_range_field_title', array(
        'default' => 14,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wpse_intval',
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
            'step' => 1,
            'class' => 'example-class',
            'style' => 'color: #ff0022',
            ), )
        );
    $wp_customize->add_control(
        new Elizama_Customize_Range_Control(
            $wp_customize, 'elizama_range_field_title', array(
                'type' => 'range',
                'section' => 'colors',
                'label' => __( 'Title shadow distance', 'elizama' ),
                'description' => '',
                'settings' => 'elizama_range_field_title',

                )
        
            ));




    /* Title color */


    $wp_customize->add_setting(
        'site_name',  array(
            'default' => '#ffffff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'site_name', array(
                'label' => __('Title Color', 'elizama'),
                'section' => 'colors',
                'settings' => 'site_name',
            )
        )
    );


        $wp_customize->add_setting(
        'range_field_shadow', array(
        'default' => 20,
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wpse_intval',
        'input_attrs' => array(
            'min' => 1,
            'max' => 100,
            'step' => 1,
            'class' => 'example-class',
            'style' => 'color: #ff0022',
            ), )
        );
    $wp_customize->add_control(
        new Elizama_Customize_Range_Control(
            $wp_customize, 'range_field_shadow', array(
                'type' => 'range',
                'section' => 'colors',
                'label' => __( 'Distance of the title in relation to the fund', 'elizama' ),
                'description' => '',
                'settings' => 'range_field_shadow',

                )
        
            ));



    /* sidebar color*/

    
        $wp_customize->add_setting(
        'background_sidebar',  array(
            'default' => '#1e1e1e',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'background_sidebar', array(
                'label' => __('Sidebar Background Color', 'elizama'),
                'section' => 'colors',
                'settings' => 'background_sidebar',
            )
        )
    );


    /*
         *
         *  FOOTER
         *
         */

 $wp_customize->add_section('footer_text', array(
    'title' => __('Footer Text', 'elizama'),
    'priority' => null,
    'description' => __('Add footer copyright text', 'elizama'),


));

    $wp_customize->add_setting('copyright_text', array(
    'default' => esc_html__('All Rigth Reserved','elizama'),
    'sanitize_callback' => 'sanitize_text_field',
));

    $wp_customize->add_control('copyright_text', array(
    'label' => esc_html__('Copyright','elizama'),
    'setting' => 'copyright_text',
    'section' => 'footer_text',
));


}
add_action('customize_register', 'elizama_customize_register');

function wpse_intval( $value ) {
    return (int) $value;
}

function elizama_custom_css()
{
    ?>
<style type="text/css">

    .colort a, .colort ul li a, .elizama-footer, .footer-credits-text a {
        color: <?php echo esc_html(get_theme_mod('color_text_menu', '#ffffff')); ?> !important;
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover,
    .skip-link, .screen-reader-text:focus,
    .entry-meta a:hover, .entry-meta a:focus,
    .standard-featured-link:focus,
    .entry-content a:focus,
    .entry-content .elizama-tooltip:focus,
    .entry-content .elizama-popover:focus,
    .post-link-nav a:focus,
     a.comment-reply-link:focus,
    .elizama-sidebar a:focus,
    .hvr-bounce-to-top:focus  {
        color: <?php echo esc_html(get_theme_mod('link_hover_and_focus_menu', '#09a8ed')); ?> !important;

    }
    .bg-white, .elizama-footer, .dropdown-menu.show, .skip-link, .screen-reader-text  {
        background-color: <?php echo esc_html(get_theme_mod('background_color_menu', '#1e1e1e')); ?> !important;
    }
    .elizama-sidebar, .btn-elizama, .single_add_to_cart_button, .checkout-button, .button.alt {
        background-color: <?php echo esc_html(get_theme_mod('background_sidebar', '#1e1e1e')); ?> !important;
    }
    .site-name h1 span::after {
        color: <?php echo esc_html(get_theme_mod('site_title_shadow', '#1e1e1e')); ?>;
          -webkit-transform: rotateY( <?php echo -esc_html(get_theme_mod('range_field_shadow', 20 )).'deg'; ?>);
          transform: rotateY( <?php echo -esc_html(get_theme_mod('range_field_shadow', 20)).'deg'; ?>);

    }
    .site-name h1 span::before {
  -webkit-transform: scale(1.1, 1) skew(0deg,  <?php echo esc_html(get_theme_mod('elizama_range_field_title', 14 )).'deg'; ?>);
          transform: scale(1.1, 1) skew(0deg,  <?php echo esc_html(get_theme_mod('elizama_range_field_title', 14 )).'deg'; ?>);
}

    .site-name h1 {
        color: <?php echo esc_html(get_theme_mod('site_name', '#fff')); ?>;

    }
    .blockit {
        background-color: <?php echo esc_html(get_theme_mod('background_header', '#ffffff')); ?> !important;
  
    }


</style>
<?php
}
add_action('wp_head', 'elizama_custom_css');