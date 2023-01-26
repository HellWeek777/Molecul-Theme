<?php

/**
 * Załączenie stylów i skryptów do motywu
 */
function cloudyblog_scripts() {

  wp_enqueue_style( 'cloudyblog-stylef', get_template_directory_uri() . '/style.css' );

}
// Custom Excerpt function for Advanced Custom Fields
function custom_field_excerpt() {
	global $post;
	$text = get_field('zajawka'); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 20; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}

add_action( 'wp_enqueue_scripts', 'cloudyblog_scripts' );
add_action('init', 'cloneRole');

function cloneRole() {
 $adm = get_role('administrator');
 $adm_cap= array_keys( $adm->capabilities ); //get administator capabilities
 add_role('new_role', 'MOLECULE'); //create new role
 $new_role = get_role('new_role');
  foreach ( $adm_cap as $cap ) {
   $new_role->add_cap( $cap ); //clone administrator capabilities to new role
  }
}
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo get_template_directory_uri()."/log.svg"?>);
          background-size: contain; 
          width: 100%;
height: 200px !important;
        }
        .login {
          background: #0C1248;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
    return esc_url( home_url( '/' ) );
}


