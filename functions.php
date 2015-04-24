<?
require_once get_stylesheet_directory().'/library/thumbnails.php';

//Lazy hack https://wordpress.org/support/topic/position-conflicts-nextpage-jetpack
function jeherve_custom_pagination( $content ) {
		if( is_singular() ) {
			$content .= //wp_link_pages('echo=0');
 				wp_link_pages( array(
                                         'before' => '<div class="page-links">'.__( 'Pages:', 'sparkling' ),
		     			 'after'             => '</div>',	                                         'link_before'       => '<span>',                                               'link_after'        => '</span>',
													                  'pagelink'          => '%',
										                                       'echo'              => 0						               ) );			 	
		}
		return $content;
}
add_filter( 'the_content','jeherve_custom_pagination', 1 );

add_action( 'after_setup_theme', 'custom_theme_setup' );
function custom_theme_setup() {
   add_image_size( 'large-thumb',750, 200 , true ); // (cropped)
}
?>
