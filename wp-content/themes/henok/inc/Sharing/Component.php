<?php
/**
 * Henok\Henok\Sharing\Component class
 *
 * @package Henok
 */

namespace Henok\Henok\Sharing;

use Henok\Henok\Component_Interface;
use WP_Customize_Manager;
use function add_action;
use function __;
use function get_theme_mod;
use function esc_html;
use function esc_url;

/**
 * Class for adding social sharing links.
 */
class Component implements Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'sharing';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', array( $this, 'action_register_customizer_control' ) );
	}

	/**
	 * Adds a Customizer setting and control for selecting accent color.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_register_customizer_control( WP_Customize_Manager $wp_customize ) {

		$sharing_choices = [
			'yes' => __( 'On (default)', 'henok' ),
			'no'  => __( 'Off', 'henok' ),
		];

		// Register the Customizer setting and ensure it is validated.
		$wp_customize->add_setting(
			'sharing_facebook',
			array(
				'default'           => 'yes',
				'transport'         => 'postMessage',
				'sanitize_callback' => function( $input ) use ( $sharing_choices ) : string {
					if ( array_key_exists( $input, $sharing_choices ) ) {
						return $input;
					}
					return '';
				},
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			'sharing_facebook',
			array(
				'label'       => __( 'Facebook Social Sharing', 'henok' ),
				'description' => __( 'Enable a Facebook sharing link below post and page content. You can disable this if you prefer to use a plugin. ', 'henok' ),
				'section'     => 'social_options',
				'type'        => 'radio',
				'choices'     => $sharing_choices,
			)
		);

		// Register the Customizer setting and ensure it is validated.
		$wp_customize->add_setting(
			'sharing_twitter',
			array(
				'default'           => 'yes',
				'transport'         => 'postMessage',
				'sanitize_callback' => function( $input ) use ( $sharing_choices ) : string {
					if ( array_key_exists( $input, $sharing_choices ) ) {
						return $input;
					}
					return '';
				},
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			'sharing_twitter',
			array(
				'label'       => __( 'Twitter Social Sharing', 'henok' ),
				'description' => __( 'Enable a Twitter sharing link below post and page content. You can disable this if you prefer to use a plugin. ', 'henok' ),
				'section'     => 'social_options',
				'type'        => 'radio',
				'choices'     => $sharing_choices,
			)
		);

		// Register the Customizer setting and ensure it is validated.
		$wp_customize->add_setting(
			'sharing_linkedin',
			array(
				'default'           => 'yes',
				'transport'         => 'postMessage',
				'sanitize_callback' => function( $input ) use ( $sharing_choices ) : string {
					if ( array_key_exists( $input, $sharing_choices ) ) {
						return $input;
					}
					return '';
				},
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			'sharing_linkedin',
			array(
				'label'       => __( 'LinkedIn Social Sharing', 'henok' ),
				'description' => __( 'Enable a LinkedIn sharing link below post and page content. You can disable this if you prefer to use a plugin. ', 'henok' ),
				'section'     => 'social_options',
				'type'        => 'radio',
				'choices'     => $sharing_choices,
			)
		);

		// Register the Customizer setting and ensure it is validated.
		$wp_customize->add_setting(
			'sharing_reddit',
			array(
				'default'           => 'yes',
				'transport'         => 'postMessage',
				'sanitize_callback' => function( $input ) use ( $sharing_choices ) : string {
					if ( array_key_exists( $input, $sharing_choices ) ) {
						return $input;
					}
					return '';
				},
			)
		);

		// Register the Customizer control for the setting.
		$wp_customize->add_control(
			'sharing_reddit',
			array(
				'label'       => __( 'Reddit Social Sharing', 'henok' ),
				'description' => __( 'Enable a Reddit sharing link below post and page content. You can disable this if you prefer to use a plugin. ', 'henok' ),
				'section'     => 'social_options',
				'type'        => 'radio',
				'choices'     => $sharing_choices,
			)
		);
	}
}
