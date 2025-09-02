<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!class_exists( 'GH_Home_Banner_Customizer_Addition')) {

	class GH_Home_Banner_Customizer_Addition {

		private static $instance;

		public static function get_instance() {
			if (!isset( self::$instance )) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		public function __construct() {
            add_action('customize_register', array($this, 'register'));
        }

        public function register($wp_customize) {
            $this->register_sections($wp_customize);
            $this->register_settings($wp_customize);
            $this->register_controls($wp_customize);
        }

        private function register_sections($wp_customize) {
            $wp_customize->add_section('home_banner_section' , array(
                'title'    => 'Баннер на главной',
                'priority' => 99,
            ));
        }

        private function register_controls($wp_customize) {
            $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'home_banner_file_setting', array(
                'label'    => 'Баннер',
                'section'  => 'home_banner_section',
                'settings' => 'home_banner_file_setting',
            )));
            
        }

        private function register_settings($wp_customize) {
            $wp_customize->add_setting('home_banner_file_setting', array(
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'absint',
                'default' => '',
            ));
        }
    }
}

GH_Home_Banner_Customizer_Addition::get_instance();