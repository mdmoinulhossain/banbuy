<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '3.7.3' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '3.6.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';

	/**
	 * Metabox additions.
	 */
	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
}

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';


/* woocommerce product price */
if (!function_exists('my_commonPriceHtml')) {

    function my_commonPriceHtml($price_amt, $regular_price, $sale_price, $saving_percentage) {
        $html_price = '<p class="price">';
        //if product is in sale
        if (($price_amt == $sale_price) && ($sale_price != 0)) {
            $html_price .= '<ins>' . wc_price($sale_price) . '</ins>';
			$html_price .= '<br/>';
            $html_price .= '<del>' . wc_price($regular_price) . '</del>' . '<span> -' . $saving_percentage . '%</span>';
        }
        //in sale but free
        else if (($price_amt == $sale_price) && ($sale_price == 0)) {
            $html_price .= '<ins>Free!</ins>';
			$html_price .= '<br/>';
            $html_price .= '<del>' . wc_price($regular_price) . '</del>';
        }
        //not is sale
        else if (($price_amt == $regular_price) && ($regular_price != 0)) {
            $html_price .= '<ins>' . wc_price($regular_price) . '</ins>';
        }
        //for free product
        else if (($price_amt == $regular_price) && ($regular_price == 0)) {
            $html_price .= '<ins>Free!</ins>';
        }
        $html_price .= '</p>';
        return $html_price;
    }

}

add_filter('woocommerce_get_price_html', 'my_simple_product_price_html', 100, 2);

function my_simple_product_price_html($price, $product) {
    if ($product->is_type('simple')) {
        $regular_price = $product->get_regular_price();
        $sale_price = $product->get_sale_price();
        $price_amt = $product->get_price();
		$saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 1 ); //discount calculation
        return my_commonPriceHtml($price_amt, $regular_price, $sale_price, $saving_percentage);
    } else {
        return $price;
    }
}

add_filter('woocommerce_variation_sale_price_html', 'my_variable_product_price_html', 10, 2);
add_filter('woocommerce_variation_price_html', 'my_variable_product_price_html', 10, 2);

function my_variable_product_price_html($price, $variation, $saving_percentage) {
    $variation_id = $variation->variation_id;
    //creating the product object
    $variable_product = new WC_Product($variation_id);

    $regular_price = $variable_product->get_regular_price();
    $sale_price = $variable_product->get_sale_price();
    $price_amt = $variable_product->get_price();
	$saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 1 ); //discount calculation
    return my_commonPriceHtml($price_amt, $regular_price, $sale_price, $saving_percentage);
}

add_filter('woocommerce_variable_sale_price_html', 'my_variable_product_minmax_price_html', 10, 2);
add_filter('woocommerce_variable_price_html', 'my_variable_product_minmax_price_html', 10, 2);

function my_variable_product_minmax_price_html($price, $product) {
    $variation_min_price = $product->get_variation_price('min', true);
    $variation_max_price = $product->get_variation_price('max', true);
    $variation_min_regular_price = $product->get_variation_regular_price('min', true);
    $variation_max_regular_price = $product->get_variation_regular_price('max', true);

    if (($variation_min_price == $variation_min_regular_price) && ($variation_max_price == $variation_max_regular_price)) {
        $html_min_max_price = $price;
    } else {
        $html_price = '<p class="price">';
        $html_price .= '<ins>' . wc_price($variation_min_price) . '-' . wc_price($variation_max_price) . '</ins>';
        $html_price .= '<del>' . wc_price($variation_min_regular_price) . '-' . wc_price($variation_max_regular_price) . '</del>';
        $html_min_max_price = $html_price;
    }

    return $html_min_max_price;
}

//Hide Price Range for WooCommerce Variable Products
add_filter( 'woocommerce_variable_sale_price_html', 
'lw_variable_product_price', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 
'lw_variable_product_price', 10, 2 );

function lw_variable_product_price( $v_price, $v_product ) {

// Product Price
$prod_prices = array( $v_product->get_variation_price( 'min', true ), 
                            $v_product->get_variation_price( 'max', true ) );
$prod_price = $prod_prices[0]!==$prod_prices[1] ? sprintf(__('From: %1$s', 'woocommerce'), 
                       wc_price( $prod_prices[0] ) ) : wc_price( $prod_prices[0] );

// Regular Price
$regular_prices = array( $v_product->get_variation_regular_price( 'min', true ), 
                          $v_product->get_variation_regular_price( 'max', true ) );
sort( $regular_prices );
$regular_price = $regular_prices[0]!==$regular_prices[1] ? sprintf(__('From: %1$s','woocommerce')
                      , wc_price( $regular_prices[0] ) ) : wc_price( $regular_prices[0] );
	

	
if ( $prod_price !== $regular_price ) {
$saving_percentage = round( 100 - ( $prod_prices[0] / $regular_prices[0] * 100 ), 1 );
$prod_price = '<h3>'.$prod_price.$v_product->get_price_suffix() . '</h3> <del>' . 
                      $regular_price . $v_product->get_price_suffix() . '</del> -'. $saving_percentage . '%';
}
return $prod_price;
}



// product discount
