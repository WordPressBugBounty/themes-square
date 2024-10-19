function squareDynamicCss(control, style) {
    jQuery('style.' + control).remove();

    jQuery('head').append(
        '<style class="' + control + '">:root{' + style + '}</style>'
    );
}

function squareLightenDarkenColor(hex, lum) {
    // validate hex string
    hex = String(hex).replace(/[^0-9a-f]/gi, '');
    if (hex.length < 6) {
        hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
    }
    lum = lum || 0;

    // convert to decimal and change luminosity
    var rgb = "#", c, i;
    for (i = 0; i < 3; i++) {
        c = parseInt(hex.substr(i * 2, 2), 16);
        c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
        rgb += ("00" + c).substr(c.length);
    }

    return rgb;
}

jQuery(document).ready(function ($) {
    'use strict';
    // Site title and description.
    wp.customize('blogname', function (value) {
        value.bind(function (to) {
            $('.sq-site-title a').text(to);
        });
    });
    wp.customize('blogdescription', function (value) {
        value.bind(function (to) {
            $('.sq-site-description').text(to);
        });
    });

    // Header background color
    wp.customize('square_header_bg', function (value) {
        value.bind(function (to) {
            if ('sq-white' === to) {
                $('#sq-masthead').addClass('sq-white');
            } else {
                $('#sq-masthead').removeClass('sq-white');
            }
        });
    });

    wp.customize('square_template_color', function (value) {
        value.bind(function (to) {
            var css = '--square-template-color:' + to + ';';
            css += '--square-template-dark-color:' + squareLightenDarkenColor(to, -0.1) + ';';
            squareDynamicCss('square_template_color', css);
        });
    });
});