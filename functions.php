<?php
/**
 * site functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage site
 * @since 1.0
 */

/**
 * site only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function site_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/site
	 * If you're building a theme based on site, use a find and replace
	 * to change 'site' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'site', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'site-featured-image', 2000, 1200, true );

	add_image_size( 'site-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    	     => __( 'Top Menu', 'site' ),
		'primary_menu'   => __( 'Primary Menu', 'site' ),
		'footer_menu'    => __( 'Footer Menu', 'site' ),
		'social' 	     => __( 'Social Links Menu', 'site' ),
		'mobile_primary' => __( 'Mobile Primary', 'site' ),
		'mobile_secondary' => __( 'Mobile Secondary', 'site' ),
		'support' => __( 'Support menu', 'site' ),
		'mobile_page' => __( 'Mobile Page Menu', 'site' ),
		'at_home_page' => __( 'At Home Page Menu', 'site' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'site_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function site_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( site_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}

	/**
	 * Filter site content width of the theme.
	 *
	 * @since site 1.0
	 *
	 * @param $content_width integer
	 */
	$GLOBALS['content_width'] = apply_filters( 'site_content_width', $content_width );
}
add_action( 'template_redirect', 'site_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function site_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Language', 'site' ),
		'id'            => 'language-1',
		'description'   => __( 'Language switcher.', 'site' ),
		'before_widget' => '<div id="%1$s" class="header__language">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	// register_sidebar( array(
	// 	'name'          => __( 'Sidebar', 'site' ),
	// 	'id'            => 'sidebar-1',
	// 	'description'   => __( 'Add widgets here to appear in your sidebar.', 'site' ),
	// 	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	// 	'after_widget'  => '</section>',
	// 	'before_title'  => '<h2 class="widget-title">',
	// 	'after_title'   => '</h2>',
	// ) );

	register_sidebar( array(
		'name'          => __( 'Footer Menus', 'site' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'site' ),
		'before_widget' => '<section id="%1$s" class="footer__widget footer__widget--top %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer__widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Text', 'site' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'site' ),
		'before_widget' => '<section id="%1$s" class="footer__widget--middle %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer__widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Faq contact form', 'site' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your faq page.', 'site' ),
		'before_widget' => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Popup contact form', 'site' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Add widgets here to appear in your popup.', 'site' ),
		'before_widget' => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'site_widgets_init' );

//enable shortcode
add_filter('widget_text','do_shortcode');

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since site 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function site_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'site' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'site_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since site 1.0
 */
function site_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'site_javascript_detection', 0 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function site_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'site_pingback_header' );

/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'site-style', get_stylesheet_uri() );


	wp_enqueue_script( 'libs', get_theme_file_uri( '/js/libs.js' ), array( 'jquery' ), '2.0', true );
	wp_enqueue_script( 'script', get_theme_file_uri( '/js/script.js' ), array( 'jquery' ), '2.0', true );
	wp_localize_script( 'script', 'tt_vars', array(
		'view_all' => __('View All', 'site'),
		'hide_all' => __('Hide All', 'site'),
		'see_all' => __('See all', 'site'),
		'search_dest' => __('Please search for a destination','site')
	));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since site 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function site_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	if ( 740 <= $width ) {
		$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
	}

	if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
		if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
			 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
		}
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'site_content_image_sizes_attr', 10, 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since site 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function site_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( is_archive() || is_search() || is_home() ) {
		$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
	} else {
		$attr['sizes'] = '100vw';
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'site_post_thumbnail_sizes_attr', 10, 3 );


/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );

/**
 * Custom post type in menu.
 */
require get_parent_theme_file_path( '/inc/cpt-menu.php' );

/**
 * Custom post type.
 */
require get_parent_theme_file_path( '/inc/cpt.php' );

/**
 * Custom post type taxonomy.
 */
require get_parent_theme_file_path( '/inc/cpt-taxonomy.php' );

/**
 * Shortcode.
 */
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop' , 12);
//container
function info_shortcode( $atts , $content = null ) {
	return '<div class="footer__info">'. do_shortcode($content) .'</div>';
}
add_shortcode( 'info', 'info_shortcode' );

//address
function address_shortcode( $atts , $content = null ) {
	return '<address class="footer__address"><svg class="icon icon--pin-large"><use xlink:href="#icon--pin-large"></use></svg>'. do_shortcode($content) .'</address>';
}
add_shortcode( 'address', 'address_shortcode' );
//phone
function phone_shortcode( $atts , $content = null ) {
	return '<div class="footer__phone"><svg class="icon icon--phone-number"><use xlink:href="#icon--phone-number"></use></svg><div class"footer__phone-item"><h2><a href="tel:'. do_shortcode($content) .'">'. do_shortcode($content) .'</a></h2><h3>'. __('Free Hotline','site') .'</h3></div></div>';
}
add_shortcode( 'phone', 'phone_shortcode' );

/**
 * Activate settings page.
 */
if( function_exists('acf_add_options_page') ) {

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Mobile Page settings',
		'menu_title'	=> 'Mobile Settings',
		'menu_slug' 	=> 'mobile-page-settings'
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'At Home Page Settings',
		'menu_title'	=> 'At Home Settings',
		'parent_slug'	=> 'mobile-page-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Faq Page Settings',
		'menu_title'	=> 'Faq Settings',
		'parent_slug'	=> 'mobile-page-settings',
	));
}


/**
 * Menu description.
 */
class Menu_With_Description extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '<span class="menu-description">' . $item->description . '</span>';
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}


//remove title from pagination
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}

//work php in shortcode
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

function iso_list_menu($format='none'){
	$current_language = apply_filters( 'wpml_current_language', NULL );
    $languages = icl_get_languages('skip_missing=0&orderby=code');

    arsort($languages);

    if(!empty($languages)){
        $iso_lang_menu = NULL;
            foreach($languages as $l){

                switch($format){
                    case 'ucwords':
                        $lang_label = ucwords($l['language_code']);
                    break;
                    case 'strtoupper':
                        $lang_label = strtoupper($l['language_code']);
                    break;
                    default:
                        $lang_label = $l['language_code'];
                    break;
                }

				if ($l['language_code'] === $current_language) {
					$iso_lang_menu .= "<li class='current-language'><a href='".$l['url']."'>" . $lang_label . "</a></li>";
				} else {
					$iso_lang_menu .= "<li><a href='".$l['url']."'>" . $lang_label . "</a></li>";
				}

            }

        $iso_lang_menu = substr($iso_lang_menu,0,-3);
    }

return $iso_lang_menu;
}


function remove_styles () {
	wp_deregister_style ('contact-form-7');
	wp_deregister_style ('legacy-dropdown');
}
add_action ('wp_print_styles','remove_styles',100);


/**
 * Enable translation of CONTACT_FORM7 Google Captcha by integrating CONTACT_FORM7 and WPML
 *
 * Check if there is a WPML language code plugin and CONTACT FORM 7 plugin
 * If there is then deregister the google captcha script added by cf7 and add our own with the
 * language code
 */
/* Gabriel - using now recaptcha v3 invisible - no need to reload with language! - this also breaks the new contact form recaptcha!
if ( defined('ICL_LANGUAGE_CODE') && defined('WPCF7_PLUGIN')) {
    remove_action( 'wpcf7_enqueue_scripts', 'wpcf7_recaptcha_enqueue_scripts' );
    add_action( 'wpcf7_enqueue_scripts', 'site_recaptcha_enqueue_scripts' );

    function site_recaptcha_enqueue_scripts() {
        $url = 'https://www.google.com/recaptcha/api.js';
        $url = add_query_arg( array(
            'onload' => 'recaptchaCallback',
            'render' => 'explicit',
            'hl' => ICL_LANGUAGE_CODE
        ), $url );

        wp_register_script( 'google-recaptcha', $url, array(), '2.0', true );
    }
}
*/

// Add verification url to autoresponder email before sending
add_action( 'wpcf7_before_send_mail', 'wpcf7_add_text_to_mail_body' );
// 12686 (EN), 12826 (DE), 12827 (FR), 12828 (IT), 12829 (PT) - Form id`s
function wpcf7_add_text_to_mail_body($contact_form){
 $form_id = $contact_form->id();
 if ($form_id == 12686 || 12826 || 12827 || 12828 || 12829):
	 $verification_url = '';
	 $locale = get_locale();
	 $shortLocale = explode('_', $locale);
	 $order_time_id = date('\P\P-ymd-gis');
	 $response = wp_remote_get( 'https://api.site.ch/v1/GetVerificationLink?apikey=8793juidxv63jkh89&langcode='.$shortLocale.'&orderid='.$order_time_id, array( 'timeout' => 10 ) );
	 if ( is_array( $response ) ) {
	   $body = $response['body']; // use the content
	   $decoded = json_decode($body, true);
	   $verification_url = $decoded['verificationlink'];
	 }

     // get mail property
     $mail = $contact_form->prop( 'mail_2' ); // returns array

     // add content to email body
	 $mail['body'] = str_replace('[verification_url]', $verification_url , $mail['body'] );

     // set mail property with changed value(s)
     $contact_form->set_properties( array( 'mail_2' => $mail ) );

	 return $contact_form;
 endif;
}


/**
 * Enable html tags in search excerpts
 * see: https://wordpress.stackexchange.com/questions/141125/allow-html-in-excerpt
 */
function wpse_allowedtags() {
    // Add custom tags to this string
        return '<a><b>';
    }

if ( ! function_exists( 'wpse_custom_wp_trim_excerpt' ) ) :

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
    	$raw_excerpt = $wpse_excerpt;
        if ( '' == $wpse_excerpt ) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes( $wpse_excerpt );
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]&gt;', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /*IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
                $excerpt_word_count = 60;
                $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
                $tokens = array();
                $excerptOutput = '';
                $count = 0;

                // Divide the string into tokens; HTML tags, or words, followed by any whitespace
                preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

                foreach ($tokens[0] as $token) {

                    if ($count >= $excerpt_length && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) {
                    // Limit reached, continue until , ; ? . or ! occur at the end
                        $excerptOutput .= trim($token);
                        break;
                    }

                    // Add words to complete sentence
                    $count++;

                    // Append what's left of the token
                    $excerptOutput .= $token;
                }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

			$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
			esc_url( get_permalink( get_the_ID() ) ), "..." );

                $excerpt_end = '</br><a href="'. esc_url( get_permalink() ) . '">' . '...' . '</a>';
                $excerpt_more = $link;
				$wpse_excerpt .= $excerpt_more; /*Add read more in new paragraph */

            return $wpse_excerpt;

        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');

// remove yoast canonical tags - Gabriel 10.12.2018
function yoast_remove_canonical_tags() { return false; };
add_filter('wpseo_canonical', 'yoast_remove_canonical_tags');