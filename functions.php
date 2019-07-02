<?php



do_action('shop_isle_page');
add_action('shop_isle_page', 'shop_isle_page_content', 20);

function shop_isle_page_content() {
    the_content();
}

if (class_exists('woocommerce')) {


    add_filter('woocommerce_product_is_visible', 'product_invisible');

    function product_invisible() {
        return false;
    }

    add_filter('woocommerce_register_post_type_product', 'hide_product_page', 12, 1);

    function hide_product_page($args) {
        $args["publicly_queryable"] = false;
        $args["public"] = false;
        return $args;
    }

    add_filter('woocommerce_account_menu_items', 'custom_my_account_menu_items');

    function custom_my_account_menu_items($items) {
        return array();
    }

    function wc_empty_cart_redirect_url() {
        return '#';
    }

    add_filter('woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url');
}