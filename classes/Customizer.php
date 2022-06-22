<?php

/**
 * Manage Customize Section
 * PHP version 7
 *
 * @category   Class
 * @package    scistories
 * @subpackage scistories-customize-section
 * @author      SciStories
 * @license    http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 * @link       http://scistories.com/
 * @since      1.0.0
 */

if (!class_exists('scistories_Customize_Section')) {
	/**
	 * Class to manage custimize section for scistories
	 */
	class scistories_Customize_Section
	{
		/**
		 * Add hooks and filters
		 *
		 * @since 1.0
		 * @static
		 * @access public
		 */
		public static function init()
		{
			add_action('customize_register', __CLASS__ . '::scistories_add_section');
		}

		/**
		 * Function to handle scistories_add_section action
		 *
		 * @since 1.0
		 * @static
		 * @access public
		 *
		 * @param Object $wp_customize Customize Manager object.
		 */
		public static function scistories_add_section($wp_customize)
		{
			/* For footer content */

			/* Add section */
			$wp_customize->add_section(
				'footer_content',
				array(
					'title'    => __('Footer Content', 'scistories'),
					'priority' => 30,
				),
			);

			/* Add settings */
			$wp_customize->add_setting(
				'address',
				array(
					'default'    => '',
					'capability' => 'edit_theme_options',
				)
			);

			$wp_customize->add_setting(
				'url_map',
				array(
					'default'    => '',
					'capability' => 'edit_theme_options',
				)
			);

			$wp_customize->add_setting(
				'phone',
				array(
					'default'    => '',
					'capability' => 'edit_theme_options',
				)
			);

			$wp_customize->add_setting(
				'email',
				array(
					'default'    => '',
					'capability' => 'edit_theme_options',
				)
			);

			$wp_customize->add_setting(
				'image',
				array(
					'default'    => '',
					'capability' => 'edit_theme_options',
				)
			);

			/* Add controls */
			$wp_customize->add_control(
				'address',
				array(
					'label'    => __('Address', 'scistories'),
					'section'  => 'footer_content',
					'settings' => 'address',
				)
			);

			$wp_customize->add_control(
				'url_map',
				array(
					'label'    => __('URL for Google Maps', 'scistories'),
					'section'  => 'footer_content',
					'settings' => 'url_map',
				)
			);

			$wp_customize->add_control(
				'phone',
				array(
					'label'    => __('Phone', 'scistories'),
					'section'  => 'footer_content',
					'settings' => 'phone',
				)
			);

			$wp_customize->add_control(
				'email',
				array(
					'label'    => __('E-mail', 'scistories'),
					'section'  => 'footer_content',
					'settings' => 'email',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'image',
					array(
						'label'      => __('Upload image', 'scistories'),
						'section'    => 'footer_content',
						'settings'   => 'image',
					)
				)
			);


			/* For Social media content */
			$wp_customize->add_section(
				'social_media',
				array(
					'title'    => __('Social Media', 'scistories'),
					'priority' => 60,
				),
			);

			/* for twitter */
			$wp_customize->add_setting(
				'twitter_setting',
				array(
					'default'    => '',
					'capability' => 'edit_theme_options',
				)
			);

			$wp_customize->add_control(
				'twitter_setting',
				array(
					'label'    => __('Twitter', 'scistories'),
					'section'  => 'social_media',
					'settings' => 'twitter_setting',
				)
			);

			/* for Instagram */
			$wp_customize->add_setting(
				'instagram_setting',
				array(
					'default'    => '',
					'capability' => 'edit_theme_options',
				)
			);

			$wp_customize->add_control(
				'instagram_setting',
				array(
					'label'    => __('Instagram', 'scistories'),
					'section'  => 'social_media',
					'settings' => 'instagram_setting',
				)
			);

			$wp_customize->add_section('google_a', array(
				'title'       => __('Google Analytics', SS_PREFIX),
				'capability'  => 'edit_theme_options',
				'description' => __('Add your Google Analytics code.', SS_PREFIX),
			));

			$wp_customize->add_setting('google_analytics', array(
				'default'    => '',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => '',
			));

			$wp_customize->add_control('google_analytics', array(
				'label'      => __('Google Analytics Code', SS_PREFIX),
				'settings'   => 'google_analytics',
				'section'    => 'google_a',
				'type'       => 'textarea',
			));
		}
	}

	/**
	 * Calling init function to activate hooks and filters.
	 */
	scistories_Customize_Section::init();
}
