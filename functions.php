<?php 
/*
*function definitions for theme

*/



?>
<?php 

if(! isset ($content_width)){
    
    $content_width = 660;
    
    
}
function bccwp_setup(){
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
   /**
 * Register Custom Navigation Walker
 */
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';    
register_nav_menus( array(
    'primary' => __( 'Main header menu', 'bccwp' ),
) );

}


add_action('after_setup_theme','bccwp_setup');

function bcc_scripts(){
        wp_enqueue_style('bootstrap-core',get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('custom-style',get_template_directory_uri().'/style.css');
        wp_enqueue_style('fancy-box',get_template_directory_uri().'/css/fancybox.css');
      /*wp_enqueue_style('bootstrap-theme',get_template_directory_uri().'/css/bootstrap-theme.min.css');
        wp_enqueue_style('full-calender',get_template_directory_uri().'/css/fullcalender.css');
        wp_enqueue_style('flex-slider',get_template_directory_uri().'/css/flexslider.css');*/
 
 
        wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),null,true);
        wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), null, true );
     
    
    wp_enqueue_script( 'ketchup-all', get_template_directory_uri() . '/js/ketchup.all.js', array('jquery'), null, true );
    wp_enqueue_script( 'fancy-js', get_template_directory_uri() . '/js/fancybox.js', array(), false,true );
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array(), '', true );
    
    if( is_singular()
      && comments_open()
      && get_option('thread_comments')  
  ) {
    wp_enqueue_script('comment-reply');
  }

}
add_action('wp_enqueue_scripts','bcc_scripts');



function new_excerpt_text(){ 
    return '...';      
}
add_filter('excerpt_more','new_excerpt_text');
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="vertical-links has-margin-xs-bottom">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



?>