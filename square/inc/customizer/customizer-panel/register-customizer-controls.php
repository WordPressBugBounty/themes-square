<?php

if (!class_exists('Square_Register_Customizer_Controls')) {

    class Square_Register_Customizer_Controls {

        function __construct() {
            add_action('customize_register', array($this, 'register_customizer_settings'));
            add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_customizer_script'));
            add_action('customize_preview_init', array($this, 'enqueue_customize_preview_js'));
        }

        public function register_customizer_settings($wp_customize) {
            /** Theme Options */
            require SQUARE_CUSTOMIZER_PATH . 'customizer-panel/settings.php';

            /** For Additional Hooks */
            do_action('square_new_options', $wp_customize);
        }

        public function enqueue_customizer_script() {
            wp_enqueue_script('square-customizer', SQUARE_CUSTOMIZER_URL . 'customizer-panel/assets/customizer.js', array('jquery'), SQUARE_VERSION, true);
            if (is_rtl()) {
                wp_enqueue_style('square-customizer', SQUARE_CUSTOMIZER_URL . 'customizer-panel/assets/customizer.rtl.css', array('square-customizer-control'), SQUARE_VERSION);
            } else {
                wp_enqueue_style('square-customizer', SQUARE_CUSTOMIZER_URL . 'customizer-panel/assets/customizer.css', array('square-customizer-control'), SQUARE_VERSION);
            }
            wp_enqueue_style('fontawesome-7.3.1', get_template_directory_uri() . '/css/font-awesome-6.3.0.css', array(), SQUARE_VERSION);
        }

        public function enqueue_customize_preview_js() {
            wp_enqueue_script('square-customizer-preview', SQUARE_CUSTOMIZER_URL . 'customizer-panel/assets/customizer-preview.js', array('customize-preview'), SQUARE_VERSION, true);
        }

    }

    new Square_Register_Customizer_Controls();
}

// Price line under the Customizer upgrade notes.
add_filter('square_upgrade_note', function () {
    return esc_html__('$65 one-time. Unlimited sites, lifetime updates, no renewal fees.', 'square');
});
