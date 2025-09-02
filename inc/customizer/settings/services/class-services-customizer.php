<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!class_exists( 'GH_Services_Customizer_Addition')) {

	class GH_Services_Customizer_Addition {

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
            $wp_customize->add_section('services_section' , array(
                'title'    => 'Прайс лист',
                'priority' => 99,
            ));
        }

        private function register_controls($wp_customize) {
            $wp_customize->add_control( new Service_Sortable_Repeater_Custom_Control( $wp_customize, 'services_prices',
                array(
                    'label' => 'Услуги',
                    'label_single' => 'Услуга',
                    'section' => 'services_section',
                    'button_labels' => array(
                        'add' => 'Добавить',
                    )
                )
            ) );
        }

        private function register_settings($wp_customize) {
            $wp_customize->add_setting( 'services_prices',
                array(
                    'default' => '',
                    'transport' => 'refresh',
                    'sanitize_callback' => 'gh_sanitize_text',
                )
            );
        }
    }
}

GH_Services_Customizer_Addition::get_instance();