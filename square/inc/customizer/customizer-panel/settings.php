<?php

$wp_customize->get_setting('blogname')->transport = 'postMessage';
$wp_customize->get_setting('blogdescription')->transport = 'postMessage';
$wp_customize->get_setting('custom_logo')->transport = 'refresh';
$wp_customize->get_control('background_color')->section = 'background_image';
$wp_customize->get_section('colors')->priority = 25;
$wp_customize->get_section('static_front_page')->priority = 2;

$square_page = '';
$square_page_array = get_pages();
if (is_array($square_page_array)) {
    $square_page = $square_page_array[0]->ID;
}

$header_bg_choices = array(
    'sq-white' => esc_html__('White', 'square'),
    'sq-black' => esc_html__('Black', 'square')
);

$square_pro_features = '<ul class="upsell-features">
	<li>' . esc_html__("4 more demos that can be imported with one click", "square") . '</li>
    <li>' . esc_html__("Elementor compatible - Built your Home Page with Customizer or Elementor whichever you like", "square") . '</li>
	<li>' . esc_html__("19 Front Page sections with multiple styles (Highlight, Service, Portfolio, Tab, Team, Testimonial, Pricing, Blog, Counter, Call To Action, Logo Carousel, Contact section with google map)", "square") . '</li>
	<li>' . esc_html__("Section reorder", "square") . '</li>
	<li>' . esc_html__("Video background, Image Motion background, Parallax background, Gradient background option for each section", "square") . '</li>
	<li>' . esc_html__("4 icon pack for icon picker (5000+ icons)", "square") . '</li>
	<li>' . esc_html__("Unlimited slider with linkable button", "square") . '</li>
	<li>' . esc_html__("Add unlimited blocks(like slider, team, testimonial) for each Section", "square") . '</li>
	<li>' . esc_html__("15+ Shape divider to choose from for each section", "square") . '</li>
	<li>' . esc_html__("6 header layouts with advanced header settings to change color, height and other options", "square") . '</li>
	<li>' . esc_html__("4 blog layouts", "square") . '</li>
	<li>' . esc_html__("In-built MegaMenu", "square") . '</li>
	<li>' . esc_html__("Advanced typography options", "square") . '</li>
	<li>' . esc_html__("Advanced color options", "square") . '</li>
	<li>' . esc_html__("Top header bar", "square") . '</li>
	<li>' . esc_html__("Preloader option", "square") . '</li>
	<li>' . esc_html__("Sidebar layout options", "square") . '</li>
	<li>' . esc_html__("Website layout (fullwidth or boxed)", "square") . '</li>
	<li>' . esc_html__("Advanced blog settings", "square") . '</li>
	<li>' . esc_html__("Advanced footer setting", "square") . '</li>
	<li>' . esc_html__("15 custom widgets", "square") . '</li>
	<li>' . esc_html__("Blog single page - Author Box, Social Share and Related Post", "square") . '</li>
	<li>' . esc_html__("Google map option", "square") . '</li>
	<li>' . esc_html__("WooCommerce compatible", "square") . '</li>
	<li>' . esc_html__("Fully multilingual and translation ready", "square") . '</li>
	<li>' . esc_html__("Fully RTL(right to left) languages compatible", "square") . '</li>
    <li>' . esc_html__("Remove footer credit text", "square") . '</li>
	</ul>
	<a class="ht-implink" href="' . admin_url('admin.php?page=square-welcome&section=free_vs_pro') . '" target="_blank">' . esc_html__("Comparision - Free Vs Pro", "square") . '</a>';


$wp_customize->add_section(new Square_Upgrade_Section($wp_customize, 'square-pro-section', array(
    'priority' => 0,
    //'title' => esc_html__('Christmas & New Year Discount!', 'square'),
    'upgrade_text' => esc_html__('Upgrade to Pro', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-customizer-button&utm_campaign=square-upgrade',
)));

$wp_customize->add_section(new Square_Upgrade_Section($wp_customize, 'square-doc-section', array(
    'title' => esc_html__('Documentation', 'square'),
    'priority' => 1000,
    'upgrade_text' => esc_html__('View', 'square'),
    'upgrade_url' => 'https://hashthemes.com/documentation/square-documentation/'
)));

$wp_customize->add_section(new Square_Upgrade_Section($wp_customize, 'square-demo-import-section', array(
    'title' => esc_html__('Import Demo Content', 'square'),
    'priority' => 999,
    'upgrade_text' => esc_html__('Import', 'square'),
    'upgrade_url' => admin_url('admin.php?page=square-welcome')
)));

$wp_customize->add_setting('square_template_color', array(
    'default' => '#5bc2ce',
    'sanitize_callback' => 'sanitize_hex_color',
    'transport' => 'postMessage'
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'square_template_color', array(
    'section' => 'colors',
    'label' => esc_html__('Template Color', 'square')
)));

$wp_customize->add_setting('square_color_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text',
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_color_upgrade_text', array(
    'section' => 'colors',
    'label' => esc_html__('For more color options,', 'square'),
    'priority' => 100,
    'active_callback' => 'square_is_upgrade_notice_active',
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade'
)));

/* ============HOMEPAGE SETTINGS PANEL============ */
$wp_customize->add_setting('square_enable_frontpage', array(
    'sanitize_callback' => 'square_sanitize_checkbox',
    'default' => square_enable_frontpage_default()
));

$wp_customize->add_control(new Square_Toggle_Control($wp_customize, 'square_enable_frontpage', array(
    'section' => 'static_front_page',
    'label' => esc_html__('Enable FrontPage', 'square'),
    'description' => sprintf(esc_html__('Overwrites the homepage displays setting and shows the frontpage for Customizer %s', 'square'), '<a href="javascript:wp.customize.panel(\'square_home_settings_panel\').focus()">' . esc_html__('Front Page Sections', 'square') . '</a>') . '<br/><br/>' . esc_html__('Do not enable this option if you want to use Elementor in home page.', 'square')
)));

/* ============GENERAL SETTINGS PANEL============ */
$wp_customize->add_panel('square_general_settings_panel', array(
    'title' => esc_html__('General Settings', 'square'),
    'priority' => 20
));

//TITLE AND TAGLINE SETTINGS
$wp_customize->add_section('title_tagline', array(
    'title' => esc_html__('Site Logo, Title & Tagline', 'square'),
    'panel' => 'square_general_settings_panel',
));

$wp_customize->get_control('header_text')->label = esc_html__('Display Site Title and Tagline(Only Displays if Logo is Removed)', 'square');

$wp_customize->add_setting('square_title_tagline_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text',
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_title_tagline_upgrade_text', array(
    'section' => 'title_tagline',
    'label' => esc_html__('For more Options,', 'square'),
    'choices' => array(
        esc_html__('Show/Hide title & tagline individually with or without logo', 'square'),
        esc_html__('Choose title & tagline colors', 'square'),
        esc_html__('Configure logo height and width', 'square')
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

//HEADER LOGO 
$wp_customize->add_section('header_image', array(
    'title' => esc_html__('Header Logo', 'square'),
    'panel' => 'square_general_settings_panel',
));

//HEADER SETTINGS 
$wp_customize->add_section('square_header_setting_sec', array(
    'title' => esc_html__('Header Settings', 'square'),
    'panel' => 'square_general_settings_panel'
));

$wp_customize->add_setting('square_disable_sticky_header', array(
    'default' => 0,
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('square_disable_sticky_header', array(
    'settings' => 'square_disable_sticky_header',
    'section' => 'square_header_setting_sec',
    'label' => esc_html__('Disable Sticky Header', 'square'),
    'type' => 'checkbox',
));

$wp_customize->add_setting('square_header_bg', array(
    'default' => 'sq-black',
    'transport' => 'postMessage',
    'sanitize_callback' => 'square_sanitize_choices'
));

$wp_customize->add_control('square_header_bg', array(
    'type' => 'select',
    'settings' => 'square_header_bg',
    'section' => 'square_header_setting_sec',
    'label' => esc_html__('Header Background Color', 'square'),
    'choices' => $header_bg_choices
));

$wp_customize->add_setting('square_page_header_bg', array(
    'default' => get_template_directory_uri() . '/images/bg.jpg',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'square_page_header_bg', array(
    'label' => esc_html__('Page Header Banner', 'square'),
    'settings' => 'square_page_header_bg',
    'section' => 'square_header_setting_sec',
    'description' => esc_html__('This banner will show in the header of all the inner pages', 'square') . '<br/>' . esc_html__('Recommended Image Size: 1800X400px', 'square')
)));

$wp_customize->add_setting('square_header_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text',
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_header_upgrade_text', array(
    'section' => 'square_header_setting_sec',
    'label' => esc_html__('For more header layouts and settings,', 'square'),
    'choices' => array(
        esc_html__('6 header styles', 'square'),
        esc_html__('Increase/Decrease header height', 'square'),
        esc_html__('Search option on header', 'square'),
        esc_html__('10 menu hover styles', 'square'),
        esc_html__('Mega Menu', 'square'),
        esc_html__('Header color options', 'square'),
        esc_html__('Option for different header banner on each post/page', 'square'),
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

//BLOG SETTINGS
$wp_customize->add_section('square_blog_sec', array(
    'title' => esc_html__('Blog Settings', 'square'),
    'panel' => 'square_general_settings_panel'
));

$wp_customize->add_setting('square_blog_format', array(
    'default' => 'excerpt',
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control('square_blog_format', array(
    'label' => esc_html__('Blog Content Format', 'square'),
    'section' => 'square_blog_sec',
    'settings' => 'square_blog_format',
    'type' => 'radio',
    'choices' => array(
        'excerpt' => 'Excerpt',
        'full_content' => 'Full Content',
    )
));

$wp_customize->add_setting('square_blog_share_buttons', array(
    'default' => 0,
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('square_blog_share_buttons', array(
    'settings' => 'square_blog_share_buttons',
    'section' => 'square_blog_sec',
    'label' => esc_html__('Disable Share Buttons', 'square'),
    'type' => 'checkbox',
));

$wp_customize->add_setting('square_blog_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text',
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_blog_upgrade_text', array(
    'section' => 'square_blog_sec',
    'label' => esc_html__('For more blog layouts and settings,', 'square'),
    'choices' => array(
        esc_html__('4 blog layouts', 'square'),
        esc_html__('Option to exclude category from blog', 'square'),
        esc_html__('Option to control excerpt length', 'square'),
        esc_html__('Selectively show/hide posted date, author, comment count, categories, tags', 'square'),
        esc_html__('Reorder various section in single post', 'square'),
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

//BACKGROUND IMAGE
$wp_customize->add_section('background_image', array(
    'title' => esc_html__('Background Image', 'square'),
    'panel' => 'square_general_settings_panel',
));

/* GOOGLE FONT SECTION */
$wp_customize->add_section('square_google_font_section', array(
    'title' => esc_html__('Google Fonts', 'square'),
    'panel' => 'square_general_settings_panel',
    'priority' => 1000
));

$wp_customize->add_setting('square_load_google_font_locally', array(
    'sanitize_callback' => 'square_sanitize_checkbox',
    'default' => false
));

$wp_customize->add_control(new Square_Toggle_Control($wp_customize, 'square_load_google_font_locally', array(
    'section' => 'square_google_font_section',
    'label' => esc_html__('Load Google Fonts Locally', 'square'),
    'description' => esc_html__('It is required to load the Google Fonts locally in order to comply with GDPR. However, if your website is not required to comply with Google Fonts then you can check this field off. Loading the Fonts locally with lots of different Google fonts can decrease the speed of the website slightly.', 'square'),
)));

// Add the typography panel.
$wp_customize->add_panel('square_typography_panel', array(
    'priority' => 25,
    'title' => esc_html__('Typography Settings', 'square')
));

// Add the body typography section.
$wp_customize->add_section('square_body_typography_section', array(
    'panel' => 'square_typography_panel',
    'title' => esc_html__('Body', 'square')
));

$wp_customize->add_setting('square_body_family', array(
    'default' => 'Open Sans',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_body_style', array(
    'default' => '400',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_body_text_decoration', array(
    'default' => 'none',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_body_text_transform', array(
    'default' => 'none',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_body_size', array(
    'default' => '16',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_setting('square_body_line_height', array(
    'default' => '1.8',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_body_letter_spacing', array(
    'default' => '0',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_body_color', array(
    'default' => '#444444',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new Square_Typography_Control($wp_customize, 'square_body_typography', array(
    'label' => esc_html__('Body Typography', 'square'),
    'description' => esc_html__('Select how you want your body to appear.', 'square'),
    'section' => 'square_body_typography_section',
    'settings' => array(
        'family' => 'square_body_family',
        'style' => 'square_body_style',
        'text_decoration' => 'square_body_text_decoration',
        'text_transform' => 'square_body_text_transform',
        'size' => 'square_body_size',
        'line_height' => 'square_body_line_height',
        'letter_spacing' => 'square_body_letter_spacing',
        'color' => 'square_body_color'
    ),
    'input_attrs' => array(
        'min' => 10,
        'max' => 40,
        'step' => 1
    )
)));


// Add Header typography section.
$wp_customize->add_section('square_header_typography_section', array(
    'panel' => 'square_typography_panel',
    'title' => esc_html__('Header', 'square')
));

// Add H typography section.
$wp_customize->add_setting('square_h_family', array(
    'default' => 'Roboto Condensed',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_h_style', array(
    'default' => '400',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_h_text_decoration', array(
    'default' => 'none',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_h_text_transform', array(
    'default' => 'none',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_h_line_height', array(
    'default' => '1.2',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_h_letter_spacing', array(
    'default' => '0',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control(new Square_Typography_Control($wp_customize, 'square_h_typography', array(
    'label' => esc_html__('Header Typography', 'square'),
    'description' => esc_html__('Select how you want your Header to appear.', 'square'),
    'section' => 'square_header_typography_section',
    'settings' => array(
        'family' => 'square_h_family',
        'style' => 'square_h_style',
        'text_decoration' => 'square_h_text_decoration',
        'text_transform' => 'square_h_text_transform',
        'line_height' => 'square_h_line_height',
        'letter_spacing' => 'square_h_letter_spacing'
    ),
    'input_attrs' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    )
)));

$wp_customize->add_section(new Square_Upgrade_Section($wp_customize, 'square-hcfu-section', array(
    'title' => esc_html__('Want To Use Custom Fonts?', 'square'),
    'panel' => 'square_typography_panel',
    'priority' => 1000,
    'class' => 'ht--boxed',
    'options' => array(
        esc_html__('Upload custom fonts. The uploaded font will display in the typography font family list.', 'square'),
    ),
    'upgrade_text' => esc_html__('Purchase Custom Font Uploader', 'square'),
    'upgrade_url' => 'https://hashthemes.com/downloads/hash-custom-font-uploader/',
    'active_callback' => 'square_check_cfu'
)));

$wp_customize->add_setting('square_h_typography_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text',
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_h_typography_upgrade_text', array(
    'section' => 'square_header_typography_section',
    'label' => esc_html__('For more Options,', 'square'),
    'choices' => array(
        esc_html__('Configure H1, H2, H3, H4, H5, H6 individually or all at once', 'square'),
        esc_html__('Set font size of H1, H2, H3, H4, H5, H6 individually', 'square'),
        esc_html__('Seperate header font typography for home page sections header, inner page title bar heading, widget header', 'square')
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

// Add Menu typography section.
$wp_customize->add_section('square_menu_typography_section', array(
    'panel' => 'square_typography_panel',
    'title' => esc_html__('Menu', 'square')
));

// Add Menu typography section.
$wp_customize->add_setting('square_menu_family', array(
    'default' => 'Roboto Condensed',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_menu_style', array(
    'default' => '700',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_menu_text_decoration', array(
    'default' => 'none',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_menu_text_transform', array(
    'default' => 'uppercase',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_setting('square_menu_size', array(
    'default' => '15',
    'sanitize_callback' => 'absint',
));

$wp_customize->add_setting('square_menu_letter_spacing', array(
    'default' => '0',
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control(new Square_Typography_Control($wp_customize, 'square_menu_typography', array(
    'label' => esc_html__('Menu Typography', 'square'),
    'description' => esc_html__('Select how you want your menu to appear.', 'square'),
    'section' => 'square_menu_typography_section',
    'settings' => array(
        'family' => 'square_menu_family',
        'style' => 'square_menu_style',
        'text_decoration' => 'square_menu_text_decoration',
        'text_transform' => 'square_menu_text_transform',
        'size' => 'square_menu_size',
        'letter_spacing' => 'square_menu_letter_spacing'
    ),
    'input_attrs' => array(
        'min' => 10,
        'max' => 100,
        'step' => 1
    )
)));

/* ============HOME SETTINGS PANEL============ */
$wp_customize->add_panel('square_home_settings_panel', array(
    'title' => esc_html__('Home Page Sections', 'square'),
    'priority' => 30
));

$wp_customize->add_section(new Square_Upgrade_Section($wp_customize, 'square-frontpage-notice', array(
    'title' => sprintf(esc_html__('Important! Home Page Sections are not enabled. Enable it %1shere%2s.', 'square'), '<a href="javascript:wp.customize.section( \'static_front_page\' ).focus()">', '</a>'),
    'priority' => -1,
    'class' => 'ht--single-row',
    'panel' => 'square_home_settings_panel',
    'active_callback' => 'square_check_frontpage'
)));

/* ============SLIDER IMAGES SECTION============ */
$wp_customize->add_section('square_slider_sec', array(
    'title' => esc_html__('Slider Section', 'square'),
    'panel' => 'square_home_settings_panel'
));

//SLIDERS
for ($i = 1; $i < 4; $i++) {

    $wp_customize->add_setting('square_slider_heading' . $i, array(
        'default' => '',
        'sanitize_callback' => 'square_sanitize_text'
    ));

    $wp_customize->add_control(new Square_Heading_Control($wp_customize, 'square_slider_heading' . $i, array(
        'settings' => 'square_slider_heading' . $i,
        'section' => 'square_slider_sec',
        'label' => esc_html__('Slider ', 'square') . $i,
    )));

    $wp_customize->add_setting('square_slider_title' . $i, array(
        'default' => esc_html__('Free WordPress Themes', 'square'),
        'sanitize_callback' => 'square_sanitize_text',
    ));

    $wp_customize->add_control('square_slider_title' . $i, array(
        'settings' => 'square_slider_title' . $i,
        'section' => 'square_slider_sec',
        'type' => 'text',
        'label' => esc_html__('Caption Title', 'square')
    ));

    $wp_customize->add_setting('square_slider_subtitle' . $i, array(
        'default' => esc_html__('Create website in no time', 'square'),
        'sanitize_callback' => 'square_sanitize_text'
    ));

    $wp_customize->add_control('square_slider_subtitle' . $i, array(
        'settings' => 'square_slider_subtitle' . $i,
        'section' => 'square_slider_sec',
        'type' => 'textarea',
        'label' => esc_html__('Caption SubTitle', 'square')
    ));

    $wp_customize->add_setting('square_slider_image' . $i, array(
        'default' => get_template_directory_uri() . '/images/bg.jpg',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'square_slider_image' . $i, array(
        'label' => esc_html__('Slider Image', 'square'),
        'settings' => 'square_slider_image' . $i,
        'section' => 'square_slider_sec',
        'description' => esc_html__('Recommended Image Size: 1800X800px', 'square')
    )));
}

$wp_customize->add_setting('square_slider_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text',
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_slider_upgrade_text', array(
    'section' => 'square_slider_sec',
    'label' => esc_html__('To add unlimited sliders and for more slider settings,', 'square'),
    'choices' => array(
        esc_html__('Unlimited Slider', 'square'),
        esc_html__('Revolution Slider option', 'square'),
        esc_html__('Option to link slider to external links with button', 'square'),
        esc_html__('Option to configure slider pause duration', 'square'),
        esc_html__('Option to change caption background and text color', 'square'),
        esc_html__('Other more settings', 'square')
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

/* ============FEATURED SECTION============ */

//FEATURED PAGES
$wp_customize->add_section('square_featured_page_sec', array(
    'title' => esc_html__('Featured Section', 'square'),
    'panel' => 'square_home_settings_panel'
));

$wp_customize->add_setting('square_enable_featured_link', array(
    'default' => 1,
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('square_enable_featured_link', array(
    'settings' => 'square_enable_featured_link',
    'section' => 'square_featured_page_sec',
    'label' => esc_html__('Enable Read More link ', 'square'),
    'type' => 'checkbox',
));

for ($i = 1; $i < 4; $i++) {

    $wp_customize->add_setting('square_featured_header' . $i, array(
        'default' => '',
        'sanitize_callback' => 'square_sanitize_text'
    ));

    $wp_customize->add_control(new Square_Heading_Control($wp_customize, 'square_featured_header' . $i, array(
        'settings' => 'square_featured_header' . $i,
        'section' => 'square_featured_page_sec',
        'label' => esc_html__('Featured Page ', 'square') . $i
    )));

    $wp_customize->add_setting('square_featured_page' . $i, array(
        'default' => $square_page,
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control('square_featured_page' . $i, array(
        'settings' => 'square_featured_page' . $i,
        'section' => 'square_featured_page_sec',
        'type' => 'dropdown-pages',
        'label' => esc_html__('Select a Page', 'square')
    ));

    $wp_customize->add_setting('square_featured_page_icon' . $i, array(
        'default' => 'fa-regular fa-bell',
        'sanitize_callback' => 'square_sanitize_text'
    ));

    $wp_customize->add_control(new Square_Icon_Selector_Control($wp_customize, 'square_featured_page_icon' . $i, array(
        'settings' => 'square_featured_page_icon' . $i,
        'section' => 'square_featured_page_sec',
        'label' => esc_html__('FontAwesome Icon', 'square'),
    )));
}

$wp_customize->add_setting('square_featured_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_featured_upgrade_text', array(
    'section' => 'square_featured_page_sec',
    'label' => esc_html__('To add unlimited featured block and for more settings,', 'square'),
    'choices' => array(
        esc_html__('Unlimited featured block', 'square'),
        esc_html__('Display featured block with repeater instead of page', 'square'),
        esc_html__('3 featured block layouts', 'square'),
        esc_html__('5000+ icon to choose from(5 icon packs)', 'square'),
        esc_html__('Configure no of column to display in a row', 'square'),
        esc_html__('Multiple background option(image, gradient, video) for the section', 'square'),
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

/* ============ABOUT SECTION============ */

$wp_customize->add_section('square_about_sec', array(
    'title' => esc_html__('About Us Section', 'square'),
    'panel' => 'square_home_settings_panel'
));

$wp_customize->add_setting('square_disable_about_sec', array(
    'default' => 0,
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('square_disable_about_sec', array(
    'settings' => 'square_disable_about_sec',
    'section' => 'square_about_sec',
    'label' => esc_html__('Disable About Section ', 'square'),
    'type' => 'checkbox',
));

$wp_customize->add_setting('square_about_header', array(
    'default' => '',
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Heading_Control($wp_customize, 'square_about_header', array(
    'settings' => 'square_about_header',
    'section' => 'square_about_sec',
    'label' => esc_html__('About Page ', 'square')
)));

$wp_customize->add_setting('square_about_page', array(
    'default' => '',
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('square_about_page', array(
    'settings' => 'square_about_page',
    'section' => 'square_about_sec',
    'type' => 'dropdown-pages',
    'label' => esc_html__('Select a Page', 'square')
));

$wp_customize->add_setting('square_about_image_header', array(
    'default' => '',
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Heading_Control($wp_customize, 'square_about_image_header', array(
    'settings' => 'square_about_image_header',
    'section' => 'square_about_sec',
    'label' => esc_html__('About Page Stack Images', 'square')
)));

$wp_customize->add_setting('square_about_image_stack', array(
    'default' => '',
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Gallery_Control($wp_customize, 'square_about_image_stack', array(
    'settings' => 'square_about_image_stack',
    'section' => 'square_about_sec',
    'label' => esc_html__('About Us Stack Image', 'square'),
    'description' => esc_html__('Recommended Image Size: 400X420px', 'square') . '<br/>' . esc_html__('Leave the gallery empty for Full Width Text', 'square')
)));

$wp_customize->add_setting('square_about_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_about_upgrade_text', array(
    'section' => 'square_about_sec',
    'label' => esc_html__('For more settings,', 'square'),
    'choices' => array(
        esc_html__('Option to disable stack image gallery or replace it with single image or widget', 'square'),
        esc_html__('Configure the gallery width', 'square'),
        esc_html__('Multiple background option(image, gradient, video) for the section', 'square')
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

/* ============ABOUT SECTION============ */

$wp_customize->add_section('square_tab_sec', array(
    'title' => esc_html__('Tab Section', 'square'),
    'panel' => 'square_home_settings_panel'
));

$wp_customize->add_setting('square_disable_tab_sec', array(
    'default' => 0,
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('square_disable_tab_sec', array(
    'settings' => 'square_disable_tab_sec',
    'section' => 'square_tab_sec',
    'label' => esc_html__('Disable Tab Section ', 'square'),
    'type' => 'checkbox',
    'priority' => 5
));

for ($i = 1; $i < 6; $i++) {

    $wp_customize->add_setting('square_tab_header' . $i, array(
        'default' => '',
        'sanitize_callback' => 'square_sanitize_text'
    ));

    $wp_customize->add_control(new Square_Heading_Control($wp_customize, 'square_tab_header' . $i, array(
        'settings' => 'square_tab_header' . $i,
        'section' => 'square_tab_sec',
        'label' => esc_html__('Tab ', 'square') . $i,
        'priority' => 10
    )));

    $wp_customize->add_setting('square_tab_title' . $i, array(
        'default' => '',
        'sanitize_callback' => 'square_sanitize_text'
    ));

    $wp_customize->add_control('square_tab_title' . $i, array(
        'settings' => 'square_tab_title' . $i,
        'section' => 'square_tab_sec',
        'type' => 'text',
        'label' => esc_html__('Tab Title', 'square'),
        'priority' => 10
    ));

    $wp_customize->add_setting('square_tab_icon' . $i, array(
        'default' => 'fa-regular fa-bell',
        'sanitize_callback' => 'square_sanitize_text'
    ));

    $wp_customize->add_control(new Square_Icon_Selector_Control($wp_customize, 'square_tab_icon' . $i, array(
        'settings' => 'square_tab_icon' . $i,
        'section' => 'square_tab_sec',
        'label' => esc_html__('FontAwesome Icon', 'square'),
        'priority' => 10
    )));

    $wp_customize->add_setting('square_tab_page' . $i, array(
        'default' => '',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control('square_tab_page' . $i, array(
        'settings' => 'square_tab_page' . $i,
        'section' => 'square_tab_sec',
        'type' => 'dropdown-pages',
        'label' => esc_html__('Select a Page', 'square'),
        'priority' => 10
    ));
}

$wp_customize->add_setting('square_tab_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_tab_upgrade_text', array(
    'section' => 'square_tab_sec',
    'label' => esc_html__('To add unlimited tab block and for more settings,', 'square'),
    'choices' => array(
        esc_html__('Unlimited tab blocks', 'square'),
        esc_html__('5 tab layouts', 'square'),
        esc_html__('5000+ icon to choose from(5 icon packs)', 'square'),
        esc_html__('Multiple background option(image, gradient, video) for the section', 'square'),
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

/* ============CLIENTS LOGO SECTION============ */
$wp_customize->add_section('square_logo_sec', array(
    'title' => esc_html__('Clients Logo Section', 'square'),
    'panel' => 'square_home_settings_panel'
));

$wp_customize->add_setting('square_disable_logo_sec', array(
    'default' => 0,
    'sanitize_callback' => 'absint'
));

$wp_customize->add_control('square_disable_logo_sec', array(
    'settings' => 'square_disable_logo_sec',
    'section' => 'square_logo_sec',
    'label' => esc_html__('Disable Client Logo Section ', 'square'),
    'type' => 'checkbox',
));

$wp_customize->add_setting('square_logo_header', array(
    'default' => '',
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Heading_Control($wp_customize, 'square_logo_header', array(
    'settings' => 'square_logo_header',
    'section' => 'square_logo_sec',
    'label' => esc_html__('Section Title & Logo', 'square')
)));

$wp_customize->add_setting('square_logo_title', array(
    'default' => '',
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control('square_logo_title', array(
    'settings' => 'square_logo_title',
    'section' => 'square_logo_sec',
    'type' => 'text',
    'label' => esc_html__('Title', 'square')
));

//CLIENTS LOGOS
$wp_customize->add_setting('square_client_logo_image', array(
    'default' => '',
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Gallery_Control($wp_customize, 'square_client_logo_image', array(
    'settings' => 'square_client_logo_image',
    'section' => 'square_logo_sec',
    'label' => esc_html__('Upload Clients Logos', 'square'),
    'description' => esc_html__('Recommended Image Size: 220X90px', 'square')
)));

$wp_customize->add_setting('square_logo_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text',
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_logo_upgrade_text', array(
    'section' => 'square_logo_sec',
    'label' => esc_html__('For more settings,', 'square'),
    'choices' => array(
        esc_html__('4 clients logo layouts', 'square'),
        esc_html__('Option to link the logos to external url', 'square'),
        esc_html__('Multiple background option(image, gradient, video) for the section', 'square')
    ),
    'priority' => 100,
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

$wp_customize->add_section(new Square_Upgrade_Section($wp_customize, 'square-upgrade-section', array(
    'title' => esc_html__('More Sections on Premium', 'square'),
    'panel' => 'square_home_settings_panel',
    'priority' => 1000,
    'options' => array(
        esc_html__('--Drag and Drop Reorder Sections--', 'square'),
        esc_html__('- Highlight Section', 'square'),
        esc_html__('- Service Section', 'square'),
        esc_html__('- Portfolio Section', 'square'),
        esc_html__('- Portfolio Slider Section', 'square'),
        esc_html__('- Content Slider Section', 'square'),
        esc_html__('- Team Section', 'square'),
        esc_html__('- Testimonial Section', 'square'),
        esc_html__('- Pricing Section', 'square'),
        esc_html__('- Blog Section', 'square'),
        esc_html__('- Counter Section', 'square'),
        esc_html__('- Call To Action Section', 'square'),
        esc_html__('------------------------', 'square'),
        esc_html__('- Elementor Pagebuilder Compatible. All the above sections can be created with Elementor Page Builder or Customizer whichever you like.', 'square'),
    ),
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade',
    'active_callback' => 'square_is_upgrade_notice_active'
)));

/* ============SOCIAL ICONS SECTION============ */
$wp_customize->add_section('square_social_sec', array(
    'title' => esc_html__('Footer Social Icons', 'square'),
));

$wp_customize->add_setting('square_social_facebook', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control('square_social_facebook', array(
    'settings' => 'square_social_facebook',
    'section' => 'square_social_sec',
    'type' => 'text',
    'label' => esc_html__('Facebook', 'square')
));

$wp_customize->add_setting('square_social_twitter', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control('square_social_twitter', array(
    'settings' => 'square_social_twitter',
    'section' => 'square_social_sec',
    'type' => 'text',
    'label' => esc_html__('Twitter', 'square')
));

$wp_customize->add_setting('square_social_pinterest', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control('square_social_pinterest', array(
    'settings' => 'square_social_pinterest',
    'section' => 'square_social_sec',
    'type' => 'text',
    'label' => esc_html__('Pinterest', 'square')
));

$wp_customize->add_setting('square_social_youtube', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control('square_social_youtube', array(
    'settings' => 'square_social_youtube',
    'section' => 'square_social_sec',
    'type' => 'text',
    'label' => esc_html__('Youtube', 'square')
));

$wp_customize->add_setting('square_social_linkedin', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control('square_social_linkedin', array(
    'settings' => 'square_social_linkedin',
    'section' => 'square_social_sec',
    'type' => 'text',
    'label' => esc_html__('Linkedin', 'square')
));

$wp_customize->add_setting('square_social_instagram', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control('square_social_instagram', array(
    'settings' => 'square_social_instagram',
    'section' => 'square_social_sec',
    'type' => 'text',
    'label' => esc_html__('Instagram', 'square')
));

$wp_customize->add_setting('square_social_upgrade_text', array(
    'sanitize_callback' => 'square_sanitize_text'
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_social_upgrade_text', array(
    'section' => 'square_social_sec',
    'label' => esc_html__('To add unlimited and any social media,', 'square'),
    'priority' => 100,
    'active_callback' => 'square_is_upgrade_notice_active',
    'upgrade_text' => esc_html__('Upgrade to PRO', 'square'),
    'upgrade_url' => 'https://hashthemes.com/wordpress-theme/square-plus/?utm_source=wordpress&utm_medium=square-link&utm_campaign=square-upgrade'
)));


/* ============PRO FEATURES============ */
$wp_customize->add_section('square_pro_feature_section', array(
    'title' => esc_html__('Pro Theme Features', 'square'),
    'priority' => 1
));

$wp_customize->add_setting('square_hide_upgrade_notice', array(
    'sanitize_callback' => 'square_sanitize_checkbox',
    'default' => false,
));

$wp_customize->add_control(new Square_Toggle_Control($wp_customize, 'square_hide_upgrade_notice', array(
    'section' => 'square_pro_feature_section',
    'label' => esc_html__('Hide all Upgrade Notices from Customizer', 'square'),
    'description' => esc_html__('If you don\'t want to upgrade to premium version then you can turn off all the upgrade notices. However you can turn it on anytime if you make mind to upgrade to premium version.', 'square')
)));

$wp_customize->add_setting('square_pro_features', array(
    'sanitize_callback' => 'square_sanitize_text',
));

$wp_customize->add_control(new Square_Upgrade_Info_Control($wp_customize, 'square_pro_features', array(
    'settings' => 'square_pro_features',
    'section' => 'square_pro_feature_section',
    'description' => $square_pro_features,
    'active_callback' => 'square_is_upgrade_notice_active'
)));
