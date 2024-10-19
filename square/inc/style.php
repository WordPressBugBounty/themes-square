<?php

/**
 * @package Square
 */
function square_dymanic_styles() {
    $color = get_theme_mod('square_template_color', '#5bc2ce');
    $darker_color = squareColourBrightness($color, -0.9);
    $custom_css = ":root {";
    $custom_css .= "--square-template-color: {$color};";
    $custom_css .= "--square-template-dark-color: {$darker_color};";
    $custom_css .= square_typography_vars(array('square_body', 'square_h', 'square_menu'));
    $custom_css .= "}";

    return square_css_strip_whitespace($custom_css);
}
