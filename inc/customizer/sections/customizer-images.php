<?php
/**
 * Post Images Settings
 *
 * Register images section, settings and controls for Theme Customizer
 *
 * @package zeePersonal
 */


/**
 * Adds featured image settings to the Customizer
 *
 * @param object $wp_customize / Customizer Object
 */
function zeepersonal_customize_register_post_image_settings( $wp_customize ) {

	// Add Sections for Post Settings
	$wp_customize->add_section( 'zeepersonal_section_images', array(
        'title'    => esc_html__( 'Post Images', 'zeepersonal' ),
        'priority' => 50,
		'panel' => 'zeepersonal_options_panel' 
		)
	);

	// Add Post Images Settings for archive posts
	$wp_customize->add_setting( 'zeepersonal_theme_options[post_layout_archives]', array(
        'default'           => 'left',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'zeepersonal_sanitize_post_layout'
		)
	);
    $wp_customize->add_control( 'zeepersonal_control_post_layout_archives', array(
        'label'    => esc_html__( 'Post Images (archive pages)', 'zeepersonal' ),
        'section'  => 'zeepersonal_section_images',
        'settings' => 'zeepersonal_theme_options[post_layout_archives]',
        'type'     => 'radio',
		'priority' => 1,
        'choices'  => array(
            'left' => esc_html__( 'Show featured image beside content.', 'zeepersonal' ),
            'top' => esc_html__( 'Show featured image above content.', 'zeepersonal' ),
			'none' => esc_html__( 'Hide featured image.', 'zeepersonal' )
			)
		)
	);
	
	// Add Post Images Settings for single posts
	$wp_customize->add_setting( 'zeepersonal_theme_options[post_image_single_header]', array(
        'default'           => '',
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'esc_attr'
        )
    );
    $wp_customize->add_control( new zeePersonal_Customize_Header_Control(
        $wp_customize, 'zeepersonal_control_post_image_single_header', array(
            'label' => esc_html__( 'Post Image (single posts)', 'zeepersonal' ),
            'section' => 'zeepersonal_section_images',
            'settings' => 'zeepersonal_theme_options[post_image_single_header]',
            'priority' => 2
            )
        )
    );
	$wp_customize->add_setting( 'zeepersonal_theme_options[post_image_single]', array(
        'default'           => true,
		'type'           	=> 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'zeepersonal_sanitize_checkbox'
		)
	);
    $wp_customize->add_control( 'zeepersonal_control_post_image_single', array(
        'label'    => esc_html__( 'Show featured image on single posts.', 'zeepersonal' ),
        'section'  => 'zeepersonal_section_images',
        'settings' => 'zeepersonal_theme_options[post_image_single]',
        'type'     => 'checkbox',
		'priority' => 3
		)
	);

}
add_action( 'customize_register', 'zeepersonal_customize_register_post_image_settings' );