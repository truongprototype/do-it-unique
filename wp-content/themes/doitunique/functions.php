<?php
function doitunique_enqueue_styles() {
    wp_enqueue_style('doitunique-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'doitunique_enqueue_styles');
add_action('after_switch_theme', function() {
    // Vô hiệu hóa việc tạo thư mục YYYY/MM trong uploads
    update_option('uploads_use_yearmonth_folders', 0);
    // Thay đổi cấu trúc permalink thành /%postname%/
    if (get_option('permalink_structure') !== '/%postname%/') {
        update_option('permalink_structure', '/%postname%/');
        flush_rewrite_rules(); // Áp dụng thay đổi rewrite
    }
});