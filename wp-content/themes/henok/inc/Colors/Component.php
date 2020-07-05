<?php
/**
 * Henok\Henok\Colors\Component class
 *
 * @package Henok
 */

namespace Henok\Henok\Colors;

use Henok\Henok\Component_Interface;
use WP_Customize_Manager;
use WP_Customize_Color_Control;
use function add_action;
use function __;
use function sanitize_hex_color;

/**
 * Class for selecting accent color
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'colors';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', array( $this, 'action_register_customizer_control' ) );
		add_action( 'wp_head', array( $this, 'custom_css' ) );
	}

	/**
	 * Adds a Customizer setting and control for selecting accent color.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_register_customizer_control( WP_Customize_Manager $wp_customize ) {
		// Register the Customizer setting and ensure is sanitized.
		$wp_customize->add_setting(
			'accent_color',
			array(
				'default'           => '#fbdb17',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'accent_color',
				array(
					'label'    => __( 'Accent Color', 'henok' ),
					'section'  => 'colors',
					'settings' => 'accent_color',
				)
			)
		);

		// Register the Customizer setting and ensure its value is a boolean.
		$wp_customize->add_setting(
			'menubg_color',
			array(
				'default'           => '#111',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'menubg_color',
				array(
					'label'    => __( 'Menu Background Color', 'henok' ),
					'section'  => 'colors',
					'settings' => 'menubg_color',
				)
			)
		);

		// Register the Customizer setting and ensure its value is sanitized.
		$wp_customize->add_setting(
			'sponsorbg_color',
			array(
				'default'           => '#fff',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'sponsorbg_color',
				array(
					'label'    => __( 'Footer Sponsor Area Background Color', 'henok' ),
					'section'  => 'colors',
					'settings' => 'sponsorbg_color',
				)
			)
		);


		// Register the Customizer setting and ensure its value is sanitized.
		$wp_customize->add_setting(
			'footerbg_color',
			array(
				'default'           => '#111',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footerbg_color',
				array(
					'label'    => __( 'Footer Background Color', 'henok' ),
					'section'  => 'colors',
					'settings' => 'footerbg_color',
				)
			)
		);

		// Register the Customizer setting and ensure its value is sanitized.
		$wp_customize->add_setting(
			'siteinfobg_color',
			array(
				'default'           => '#212121',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'siteinfobg_color',
				array(
					'label'    => __( 'Footer Site Info Background Color', 'henok' ),
					'section'  => 'colors',
					'settings' => 'siteinfobg_color',
				)
			)
		);
	}

	/** Output our colors. */
	public function custom_css() {
		echo '<style>';
		if ( get_theme_mod( 'accent_color', '#fbdb17' ) !== '#fbdb17' ) {
			echo 'body { --color-theme-yellow: ' . esc_html( get_theme_mod( 'accent_color' ) ) . ';}';
		}
		if ( get_theme_mod( 'menubg_color', '#111' ) !== '#111' ) {
			echo '.main-navigation, .nav--toggle-sub ul ul { background: ' . esc_html( get_theme_mod( 'menubg_color' ) ) . ';}';
		}
		if ( get_theme_mod( 'sponsorbg_color', '#fff' ) ) {
			echo '.site-info{ background: ' . esc_html( get_theme_mod( 'sponsorbg_color', '#fff' ) ) . ';}';
		}
		if ( get_theme_mod( 'footerbg_color', '#111' ) !== '#111' ) {
			echo '.site-footer{ background: ' . esc_html( get_theme_mod( 'footerbg_color' ) ) . ';}';
		}
		if ( get_theme_mod( 'siteinfobg_color', '#212121' ) ) {
			echo '.site-info{ background: ' . esc_html( get_theme_mod( 'siteinfobg_color', '#212121' ) ) . ';}';
		}
		echo '</style>';
	}
}
