<?php
function doitunique_enqueue_styles() {
    wp_enqueue_style('doitunique-style', get_stylesheet_uri());
    
    // Enqueue Slick Slider CSS
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    
    // Additional CSS for testimonial slider
    $testimonial_css = "
        .testimonial-content {
            max-width: 100%;
            word-wrap: break-word;
            overflow-wrap: break-word;
            padding: 0 15px;
        }
        
        .testimonial-text {
            display: block;
            word-wrap: break-word;
            overflow-wrap: break-word;
            width: 100%;
            line-height: 1.6;
            white-space: normal;
        }
        
        .testimonial-slider {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
    ";
    wp_add_inline_style('slick-css', $testimonial_css);
    
    // Enqueue jQuery (if not already included)
    wp_enqueue_script('jquery');
    
    // Enqueue Slick Slider JS
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
}
add_action('wp_enqueue_scripts', 'doitunique_enqueue_styles');

// Add theme support for various features
function doitunique_theme_setup() {
    // Add theme support for site icon (favicon)
    add_theme_support('site-icon');
    
    // Add theme support for custom logo
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'doitunique_theme_setup');

add_action('after_switch_theme', function() {
    // Vô hiệu hóa việc tạo thư mục YYYY/MM trong uploads
    update_option('uploads_use_yearmonth_folders', 0);
    // Thay đổi cấu trúc permalink thành /%postname%/
    if (get_option('permalink_structure') !== '/%postname%/') {
        update_option('permalink_structure', '/%postname%/');
        flush_rewrite_rules(); // Áp dụng thay đổi rewrite
    }
});