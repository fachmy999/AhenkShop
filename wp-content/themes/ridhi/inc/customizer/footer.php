<?php
/**
 * Ridhi Footer Setting
 *
 * @package Ridhi
 */

function ridhi_customize_register_footer( $wp_customize ) {
    
    $wp_customize->add_section(
        'footer_settings',
        array(
            'title'      => __( 'Footer Settings', 'ridhi' ),
            'priority'   => 199,
            'capability' => 'edit_theme_options',
        )
    );
    
    /** Footer Copyright */
    $wp_customize->add_setting(
        'footer_copyright',
        array(
            'default'           => '',
            'sanitize_callback' => 'wp_kses_post',
            'transport'         => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
        'footer_copyright',
        array(
            'label'   => __( 'Footer Copyright Text', 'ridhi' ),
            'section' => 'footer_settings',
            'type'    => 'textarea',
        )
    );
    
    $wp_customize->selective_refresh->add_partial( 
        'footer_copyright', 
        array(
            'selector'        => '.site-info .copyright',
            'render_callback' => 'ridhi_get_footer_copyright',
        ) 
    );
        
}
add_action( 'customize_register', 'ridhi_customize_register_footer' );