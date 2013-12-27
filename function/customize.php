<?php
/* Theme Customization Options
 *
 * @package    WordPress
 * @subpackage RootBeer
 * @framework  Foundation
 * @author     JoshMedeski
 */

function rootbeer_register_theme_customizer( $wp_customize ) {
    $wp_customize->add_setting(
        'rootbeer_link_color',
        array(
            'default'     => '#000000'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label'       => __( 'Link Color', 'rootbeer' ),
                'section'     => 'colors',
                'settings'    => 'rootbeer_link_color'
            )
        )
    );

    // Header Options
    $wp_customize->add_section(
        'rootbeer_header',
        array(
            'title'     => 'Header',
            'description' => 'This controls the top of the website.',
            'priority'  => 200
        )
    );

    $wp_customize->add_setting(
    'rootbeer_display_header',
        array(
            'default'    =>  'true'
        )
    );

    $wp_customize->add_control(
    'rootbeer_display_header',
        array(
            'section'   => 'rootbeer_header',
            'label'     => 'Display Header?',
            'type'      => 'checkbox'
        )
    );

    $wp_customize->add_setting(
    'rootbeer_header_style',
        array(
            'default'   => 'nav-bar'
        )
    );
 
    $wp_customize->add_control(
        'rootbeer_header_style',
        array(
            'section'  => 'rootbeer_header',
            'label'    => 'Header Style',
            'type'     => 'select',
            'choices'  => array(
                'nav-bar'    => 'Nav Bar',
                'top-bar'   => 'Top Bar',
                'inline-list'   => 'Inline List',
                'custom'   => 'Custom',
            )
        )
    );

}
add_action( 'customize_register', 'rootbeer_register_theme_customizer' );

function rootbeer_customizer_css() {
    ?>
    <style type="text/css">
        a { color: <?php echo get_theme_mod( 'rootbeer_link_color' ); ?>; }
        <?php if( false === get_theme_mod( 'rootbeer_display_header' ) ) { ?>
            .header { display: none; }
        <?php } // end if ?>
    </style>
    <?php
}
add_action( 'wp_head', 'rootbeer_customizer_css' );