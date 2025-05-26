<?php
/**
 * DoitUnique Blocks theme functions and definitions
 */

if (!function_exists('doitunique_blocks_setup')) {
    /**
     * Theme setup function
     */
    function doitunique_blocks_setup() {
        add_theme_support('wp-block-styles');
        add_theme_support('editor-styles');
        add_editor_style('style.css');
        
        // Đăng ký navigation menus
        register_nav_menus(
            array(
                'primary' => esc_html__('Primary Menu', 'doitunique-blocks'),
                'footer' => esc_html__('Footer Menu', 'doitunique-blocks'),
            )
        );
    }
}
add_action('after_setup_theme', 'doitunique_blocks_setup');

/**
 * Enqueue scripts and styles.
 */
function doitunique_blocks_scripts() {
    // Đăng ký Google Fonts
    wp_enqueue_style('doitunique-blocks-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap', array(), null);
    
    // Enqueue main stylesheet
    wp_enqueue_style('doitunique-blocks-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    
    // Enqueue custom CSS
    wp_enqueue_style('doitunique-blocks-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0');
    
    // Enqueue custom Javascript
    wp_enqueue_script('doitunique-blocks-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'doitunique_blocks_scripts');

/**
 * Đăng ký block patterns
 */
function doitunique_blocks_register_patterns() {
    if (class_exists('WP_Block_Patterns_Registry')) {
        // Đăng ký block pattern categories
        register_block_pattern_category(
            'doitunique',
            array('label' => __('DoitUnique', 'doitunique-blocks'))
        );
        
        // Đăng ký block patterns
        // Các pattern sẽ được thêm ở đây sau khi tạo xong template
    }
}
add_action('init', 'doitunique_blocks_register_patterns'); 