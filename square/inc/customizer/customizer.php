<?php

define('SQUARE_CUSTOMIZER_URL', get_template_directory_uri() . '/inc/customizer/');
define('SQUARE_CUSTOMIZER_PATH', get_template_directory() . '/inc/customizer/');

require SQUARE_CUSTOMIZER_PATH . 'customizer-custom-controls.php';
require SQUARE_CUSTOMIZER_PATH . 'custom-controls/typography/typography.php';
require SQUARE_CUSTOMIZER_PATH . 'customizer-control-sanitization.php';
require SQUARE_CUSTOMIZER_PATH . 'customizer-functions.php';
require SQUARE_CUSTOMIZER_PATH . 'customizer-icon-manager.php';
require SQUARE_CUSTOMIZER_PATH . 'customizer-panel/register-customizer-controls.php';
