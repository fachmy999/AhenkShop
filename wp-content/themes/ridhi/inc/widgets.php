<?php
/**
 * Ridhi Widget Areas
 * 
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * @package Ridhi
 */

function ridhi_widgets_init(){    
    $sidebars = array(
        'sidebar'   => array(
            'name'        => __( 'Sidebar', 'ridhi' ),
            'id'          => 'sidebar', 
            'description' => __( 'Default Sidebar', 'ridhi' ),
        ),
        'footer-one'=> array(
            'name'        => __( 'Footer One', 'ridhi' ),
            'id'          => 'footer-one', 
            'description' => __( 'Add footer one widgets here.', 'ridhi' ),
        ),
        'footer-two'=> array(
            'name'        => __( 'Footer Two', 'ridhi' ),
            'id'          => 'footer-two', 
            'description' => __( 'Add footer two widgets here.', 'ridhi' ),
        ),
        'footer-three'=> array(
            'name'        => __( 'Footer Three', 'ridhi' ),
            'id'          => 'footer-three', 
            'description' => __( 'Add footer three widgets here.', 'ridhi' ),
        ),
        'footer-four'=> array(
            'name'        => __( 'Footer Four', 'ridhi' ),
            'id'          => 'footer-four', 
            'description' => __( 'Add footer four widgets here.', 'ridhi' ),
        )
    );
    
    foreach( $sidebars as $sidebar ){
        register_sidebar( array(
    		'name'          => esc_html( $sidebar['name'] ),
    		'id'            => esc_attr( $sidebar['id'] ),
    		'description'   => esc_html( $sidebar['description'] ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title" itemprop="name">',
    		'after_title'   => '</h2>',
    	) );
    }
}
add_action( 'widgets_init', 'ridhi_widgets_init' );