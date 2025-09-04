<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

if (!class_exists( 'GH_Contacts_Customizer_Addition')) {

	class GH_Contacts_Customizer_Addition {

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
            $this->register_panels($wp_customize);
            $this->register_sections($wp_customize);
            $this->register_settings($wp_customize);
            $this->register_controls($wp_customize);
        }

        private function register_panels($wp_customize) {
            $wp_customize->add_panel('panel_contacts', array(
                'priority'       => 99,
                'theme_supports' => '',
                'title'          => 'Контакты',
            ));
        }

        private function register_sections($wp_customize) {
            $wp_customize->add_section('phone_section' , array(
                'title'    => 'Телефон',
                'panel'    => 'panel_contacts',
                'priority' => 99,
            ));
            $wp_customize->add_section('instagram_section' , array(
                'title'    => 'Instagram',
                'panel'    => 'panel_contacts',
                'priority' => 99,
            ));
            $wp_customize->add_section('whatsapp_section' , array(
                'title'    => 'WhatsApp',
                'panel'    => 'panel_contacts',
                'priority' => 99,
            ));
            $wp_customize->add_section('address_section' , array(
                'title'    => 'Адрес',
                'panel'    => 'panel_contacts',
                'priority' => 99,
            ));
        }

        private function register_controls($wp_customize) {
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'main_contact_phone_setting',
                array(
                    'label'    => 'Ссылка',
                    'section'  => 'phone_section',
                    'settings' => 'main_contact_phone_setting',
                    'type'     => 'text',
                    'input_attrs' => array(
                        'placeholder' => '+79999999999',
                    )
                )
            ));
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'main_contact_phone_label_setting',
                array(
                    'label'    => 'Подпись',
                    'section'  => 'phone_section',
                    'settings' => 'main_contact_phone_label_setting',
                    'type'     => 'text',
                    'input_attrs' => array(
                        'placeholder' => '+79999999999',
                    )
                )
            ));
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'main_contact_instagram_setting',
                array(
                    'label'    => 'Ссылка',
                    'section'  => 'instagram_section',
                    'settings' => 'main_contact_instagram_setting',
                    'type'     => 'text',
                    'input_attrs' => array(
                        'placeholder' => 'https://example.com/',
                    )
                )
            ));
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'main_contact_instagram_label_setting',
                array(
                    'label'    => 'Подпись',
                    'section'  => 'instagram_section',
                    'settings' => 'main_contact_instagram_label_setting',
                    'type'     => 'text',
                    'input_attrs' => array(
                        'placeholder' => 'Например: @username',
                    )
                )
            ));
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'main_contact_whatsapp_setting',
                array(
                    'label'    => 'Ссылка',
                    'section'  => 'whatsapp_section',
                    'settings' => 'main_contact_whatsapp_setting',
                    'type'     => 'text',
                    'input_attrs' => array(
                        'placeholder' => 'https://example.com/',
                    )
                )
            ));
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'main_contact_whatsapp_label_setting',
                array(
                    'label'    => 'Подпись',
                    'section'  => 'whatsapp_section',
                    'settings' => 'main_contact_whatsapp_label_setting',
                    'type'     => 'text',
                    'input_attrs' => array(
                        'placeholder' => 'Например: +7 (888) 444-33-22',
                    )
                )
            ));
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'main_contact_address_setting',
                array(
                    'label'    => 'Адрес',
                    'section'  => 'address_section',
                    'settings' => 'main_contact_address_setting',
                    'type'     => 'textarea',
                    'input_attrs' => array(
                        'placeholder' => 'Адрес...',
                    )
                )
            ));
        }

        private function register_settings($wp_customize) {
            $wp_customize->add_setting('main_contact_phone_setting', array(
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'gh_sanitize_phone',
                'default' => '',
            ));
            $wp_customize->add_setting('main_contact_phone_label_setting', array(
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'sanitize_text_field',
                'default'           => '',
            ));
            $wp_customize->add_setting('main_contact_instagram_setting', array(
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'gh_sanitize_text',
                'default'           => '',
            ));
            $wp_customize->add_setting('main_contact_instagram_label_setting', array(
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'gh_sanitize_text',
                'default'           => '',
            ));
            $wp_customize->add_setting('main_contact_whatsapp_setting', array(
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'gh_sanitize_text',
                'default'           => '',
            ));
            $wp_customize->add_setting('main_contact_whatsapp_label_setting', array(
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'gh_sanitize_text',
                'default'           => '',
            ));
            $wp_customize->add_setting('main_contact_address_setting', array(
                'capability'        => 'edit_theme_options',
                'sanitize_callback' => 'gh_sanitize_textarea',
                'default'           => '',
            ));
        }
    }
}

GH_Contacts_Customizer_Addition::get_instance();