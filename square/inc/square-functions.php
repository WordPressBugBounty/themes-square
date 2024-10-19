<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Square
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function square_body_classes($classes) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if (is_multi_author()) {
        $classes[] = 'group-blog';
    }

    $sq_post_type = array('post', 'page');

    if (is_singular($sq_post_type)) {
        global $post;
        $sq_sidebar_layout = get_post_meta($post->ID, 'sq_sidebar_layout', true);

        if (!$sq_sidebar_layout) {
            $sq_sidebar_layout = 'right_sidebar';
        }

        $classes[] = 'sq_' . $sq_sidebar_layout;
    }

    return $classes;
}

add_filter('body_class', 'square_body_classes');

if (!function_exists('square_excerpt')) {

    function square_excerpt($content, $letter_count) {
        $content = strip_shortcodes($content);
        $content = wp_strip_all_tags($content);
        $content = mb_substr($content, 0, $letter_count);

        if (strlen($content) == $letter_count) {
            $content .= "...";
        }
        return $content;
    }

}

if (!function_exists('square_word_excerpt')) {

    function square_word_excerpt($content, $limit) {
        $content = strip_shortcodes($content);
        $content = wp_strip_all_tags($content);
        $content = explode(' ', $content);
        $content = implode(' ', array_slice($content, 0, $limit));
        $content .= "...";
        return $content;
    }

}

add_filter('wp_page_menu_args', 'square_change_wp_page_menu_args');

if (!function_exists('square_change_wp_page_menu_args')) {

    function square_change_wp_page_menu_args($args) {
        $args['menu_class'] = 'sq-menu sq-clearfix';
        return $args;
    }

}

function square_comment($comment, $args, $depth) {
    $tag = ('div' === $args['style']) ? 'div' : 'li';
    ?>
    <<?php echo esc_attr($tag); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? 'parent' : '', $comment); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
            <footer class="comment-meta">
                <div class="comment-author vcard">
                    <?php if (0 != $args['avatar_size'])
                        echo get_avatar($comment, $args['avatar_size']); ?>
                    <?php echo sprintf('<b class="fn">%s</b>', get_comment_author_link($comment)); ?>
                </div><!-- .comment-author -->

                <?php if ('0' == $comment->comment_approved): ?>
                    <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'square'); ?></p>
                <?php endif; ?>
                <?php edit_comment_link(esc_html__('Edit', 'square'), '<span class="edit-link">', '</span>'); ?>
            </footer><!-- .comment-meta -->

            <div class="comment-content">
                <?php comment_text(); ?>
            </div><!-- .comment-content -->

            <div class="comment-metadata sq-clearfix">
                <a href="<?php echo esc_url(get_comment_link($comment, $args)); ?>">
                    <time datetime="<?php comment_time('c'); ?>">
                        <?php
                        /* translators: 1: comment date, 2: comment time */
                        printf(esc_html__('%1$s at %2$s', 'square'), get_comment_date('', $comment), get_comment_time());
                        ?>
                    </time>
                </a>

                <?php
                comment_reply_link(array_merge($args, array(
                    'add_below' => 'div-comment',
                    'depth' => $depth,
                    'max_depth' => $args['max_depth'],
                    'before' => '<div class="reply">',
                    'after' => '</div>'
                )));
                ?>
            </div><!-- .comment-metadata -->
        </article><!-- .comment-body -->
        <?php
}

function square_dynamic_style() {
    $square_page_header_bg = get_theme_mod('square_page_header_bg', get_template_directory_uri() . '/images/bg.jpg');

    echo '<style>';
    echo '.sq-main-header{background-image: url(' . esc_url($square_page_header_bg) . ')}';
    echo '</style>';
}

add_action('wp_head', 'square_dynamic_style');

/**
 * Remove hentry from post_class
 */
add_filter('post_class', 'square_remove_hentry_class');

function square_remove_hentry_class($classes) {
    if (is_singular(array('post', 'page'))) {
        $classes = array_diff($classes, array('hentry'));
    }
    return $classes;
}

add_filter('get_custom_logo', 'square_remove_itemprop');

function square_remove_itemprop() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $html = sprintf('<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>', esc_url(home_url('/')), wp_get_attachment_image($custom_logo_id, 'full', false, array(
        'class' => 'custom-logo',
    ))
    );
    return $html;
}

function square_hex2rgba($color, $opacity = false) {

    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if (empty($color))
        return $default;

    //Sanitize $color if "#" is provided 
    if ($color[0] == '#') {
        $color = substr($color, 1);
    }

    //Check if color has 6 or 3 characters and get values
    if (strlen($color) == 6) {
        $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
    } elseif (strlen($color) == 3) {
        $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
    } else {
        return $default;
    }

    //Convert hexadec to rgb
    $rgb = array_map('hexdec', $hex);

    //Check if opacity is set(rgba or rgb)
    if ($opacity) {
        if (abs($opacity) > 1)
            $opacity = 1.0;
        $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
    } else {
        $output = 'rgb(' . implode(",", $rgb) . ')';
    }

    //Return rgb(a) color string
    return $output;
}

function squareColourBrightness($hex, $percent) {
    // Work out if hash given
    $hash = '';
    if (stristr($hex, '#')) {
        $hex = str_replace('#', '', $hex);
        $hash = '#';
    }
    /// HEX TO RGB
    $rgb = array(hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2)));
    //// CALCULATE 
    for ($i = 0; $i < 3; $i++) {
        // See if brighter or darker
        if ($percent > 0) {
            // Lighter
            $rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1 - $percent));
        } else {
            // Darker
            $positivePercent = $percent - ($percent * 2);
            $rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1 - $positivePercent));
        }
        // In case rounding up causes us to go to 256
        if ($rgb[$i] > 255) {
            $rgb[$i] = 255;
        }
    }
    //// RBG to Hex
    $hex = '';
    for ($i = 0; $i < 3; $i++) {
        // Convert the decimal digit to hex
        $hexDigit = dechex($rgb[$i]);
        // Add a leading zero if necessary
        if (strlen($hexDigit) == 1) {
            $hexDigit = "0" . $hexDigit;
        }
        // Append to the hex string
        $hex .= $hexDigit;
    }
    return $hash . $hex;
}

function square_css_strip_whitespace($css) {
    $replace = array(
        "#/\*.*?\*/#s" => "", // Strip C style comments.
        "#\s\s+#" => " ", // Strip excess whitespace.
    );
    $search = array_keys($replace);
    $css = preg_replace($search, $replace, $css);

    $replace = array(
        ": " => ":",
        "; " => ";",
        " {" => "{",
        " }" => "}",
        ", " => ",",
        "{ " => "{",
        ";}" => "}", // Strip optional semicolons.
        ",\n" => ",", // Don't wrap multiple selectors.
        "\n}" => "}", // Don't wrap closing braces.
        //"} " => "}\n", // Put each rule on it's own line.
    );
    $search = array_keys($replace);
    $css = str_replace($search, $replace, $css);

    return trim($css);
}

function square_typography_vars($keys) {
    if (!$keys && !is_array($keys)) {
        return;
    }
    $css = array();

    foreach ($keys as $key) {
        $family = get_theme_mod($key . '_family');
        $style = get_theme_mod($key . '_style');
        $text_decoration = get_theme_mod($key . '_text_decoration');
        $text_transform = get_theme_mod($key . '_text_transform');
        $size = get_theme_mod($key . '_size');
        $line_height = get_theme_mod($key . '_line_height');
        $letter_spacing = get_theme_mod($key . '_letter_spacing');
        $color = get_theme_mod($key . '_color');

        if (strpos($style, 'italic')) {
            $italic = 'italic';
        }

        $weight = absint($style);
        $key = str_replace('_', '-', $key);

        $css[] = (!empty($family) && $family != 'Default') ? "--" . $key . "-family: '{$family}', serif" : NULL;
        $css[] = !empty($weight) ? "--" . $key . "-weight: {$weight}" : NULL;
        $css[] = !empty($italic) ? "--" . $key . "-style: {$italic}" : NULL;
        $css[] = !empty($text_transform) ? "--" . $key . "-text-transform: {$text_transform}" : NULL;
        $css[] = !empty($text_decoration) ? "--" . $key . "-text-decoration: {$text_decoration}" : NULL;
        $css[] = !empty($size) ? "--" . $key . "-size: {$size}px" : NULL;
        $css[] = !empty($line_height) ? "--" . $key . "-line-height: {$line_height}" : NULL;
        $css[] = !empty($letter_spacing) ? "--" . $key . "-letter-spacing: {$letter_spacing}px" : NULL;
        $css[] = !empty($color) ? "--" . $key . "-color: {$color}" : NULL;
    }

    $css = array_filter($css);

    return implode(';', $css);
}

//for backward compatibilty
function square_enable_frontpage_default() {
    if (!($frontpage_active = get_theme_mod('square_frontpage_active'))) {
        if (count(get_theme_mods()) > 3 && 'posts' == get_option('show_on_front')) {
            set_theme_mod('square_frontpage_active', 'yes');
        } else {
            set_theme_mod('square_frontpage_active', 'no');
        }
    }

    return $frontpage_active == 'yes' ? true : false;
}

function square_create_elementor_kit() {
    if (!did_action('elementor/loaded')) {
        return;
    }

    $kit = Elementor\Plugin::$instance->kits_manager->get_active_kit();

    if (!$kit->get_id()) {
        $created_default_kit = Elementor\Plugin::$instance->kits_manager->create_default();
        update_option('elementor_active_kit', $created_default_kit);
    }
}

function square_enable_wpform_export($args) {
    $args['can_export'] = true;
    return $args;
}

add_action('init', 'square_create_elementor_kit');
add_filter('wpforms_post_type_args', 'square_enable_wpform_export');

function square_premium_demo_config($demos) {
    $premium_demos = array(
        'main-demo' => array(
            'type' => 'pro',
            'name' => 'Square Plus - Main Demo',
            'image' => 'https://hashthemes.com/import-files/square-plus/screen/main-demo.jpg',
            'buy_url' => 'https://hashthemes.com/wordpress-theme/square-plus/',
            'preview_url' => 'https://demo.hashthemes.com/square-plus/main-demo/',
        ),
        'original' => array(
            'type' => 'pro',
            'name' => 'Square Plus - Original',
            'image' => 'https://hashthemes.com/import-files/square-plus/screen/original.jpg',
            'buy_url' => 'https://hashthemes.com/wordpress-theme/square-plus/',
            'preview_url' => 'https://demo.hashthemes.com/square-plus/original/',
        ),
        'business' => array(
            'type' => 'pro',
            'name' => 'Square Plus - Business',
            'image' => 'https://hashthemes.com/import-files/square-plus/screen/business.jpg',
            'buy_url' => 'https://hashthemes.com/wordpress-theme/square-plus/',
            'preview_url' => 'https://demo.hashthemes.com/square-plus/business/',
        ),
        'fitness' => array(
            'type' => 'pro',
            'name' => 'Square Plus - Fitness',
            'image' => 'https://hashthemes.com/import-files/square-plus/screen/fitness.jpg',
            'buy_url' => 'https://hashthemes.com/wordpress-theme/square-plus/',
            'preview_url' => 'https://demo.hashthemes.com/square-plus/gym/',
        )
    );

    $demos = array_merge($demos, $premium_demos);

    return $demos;
}

add_action('hdi_import_files', 'square_premium_demo_config');

function square_add_custom_fonts($fonts) {
    if (class_exists('Hash_Custom_Font_Uploader_Public')) {
        if (!empty(Hash_Custom_Font_Uploader_Public::get_all_fonts_list())) {
            $new_fonts = array(
                'label' => esc_html__('Custom Fonts', 'square'),
                'fonts' => Hash_Custom_Font_Uploader_Public::get_all_fonts_list()
            );
            array_unshift($fonts, $new_fonts);
        }
    }
    return $fonts;
}

add_filter('square_regsiter_fonts', 'square_add_custom_fonts');
