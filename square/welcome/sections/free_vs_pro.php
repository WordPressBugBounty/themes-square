<div class="free-vs-pro-info-wrap">
    <div class="free-vs-pro-info">
        <h4><?php echo esc_html_x('ONE TIME PAYMENT', 'Free vs Pro Content', 'square'); ?></h4>
        <p><?php echo esc_html_x('No renewal needed', 'Free vs Pro Content', 'square'); ?></p>
    </div>

    <div class="free-vs-pro-info">
        <h4><?php echo esc_html_x('UNLIMITED DOMAIN LICENCE', 'Free vs Pro Content', 'square'); ?></h4>
        <p><?php echo esc_html_x('Use in as many websites as you need', 'Free vs Pro Content', 'square'); ?></p>
    </div>

    <div class="free-vs-pro-info">
        <h4><?php echo esc_html_x('FREE UPDATES FOR LIFETIME', 'Free vs Pro Content', 'square'); ?></h4>
        <p><?php echo esc_html_x('Keep up to date', 'Free vs Pro Content', 'square'); ?></p>
    </div>
</div>

<?php
/*
 *  Feature rows carry the .feature-row class and are numbered by a CSS counter
 *  rather than by a number typed into each label. The numbers used to be part
 *  of the translatable strings, which meant inserting a feature renumbered -
 *  and so invalidated the translation of - every row below it.
 */
?>
<table class="comparison-table">
    <tr>
        <td>
            <span><?php echo esc_html_x('Upgrade to Pro', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Everything below, on as many sites as you like, for a single payment. No renewals, and updates stay free for life.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td colspan="2">
            <a target="_blank" class="buy-pro-btn" href="<?php echo esc_url(square_upgrade_url('freevspro-top', 'square-freevspro')); ?>"><?php echo esc_html_x('Buy Now ($65 only)', 'Free vs Pro Content', 'square'); ?></a>
        </td>
    </tr>
    <tr>
        <th><?php echo esc_html_x('Features', 'Free vs Pro Content', 'square'); ?></th>
        <th><?php echo esc_html_x('Free', 'Free vs Pro Content', 'square'); ?></th>
        <th><?php echo esc_html_x('Pro', 'Free vs Pro Content', 'square'); ?></th>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('One Click Demo Import', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('With one click demo-import, you can install the demo content with just one click.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('1 Demo', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('4 More Demos', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('GDPR Compliance & Cookies Consent', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/configuring-gdpr-settings/" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The Premium version is fully GDPR compliant. Means no data is collected if you use the theme alone. Also the premium version has option to add GDPR Compliance & Cookies Consent text with buttons.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Maintenance Mode', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/setting-up-maintenance-mode-page/" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The premium version has an inbuilt option to add the Maintenance(under construction) Screen with countdown time. You don\'t need to install additional plugins.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Elementor Compatible', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Fan of Pagebuilder? No problem, with premium version you can create your website with Elementor. Elementor provides you with unlimited possibilities to create the website of your imagination.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Elementor Widgets', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#I.ElementorModule" target="_blank"><?php echo esc_html_x('View Demo', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Elementor provides you with unlimited possibilities to create the website of your imagination.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td>21 Widgets</td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Elementor Section Extenders', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#III.ElementorExtender" target="_blank"><?php echo esc_html_x('View Demo', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('You can extend the Elementor section with amazing interactive extenders like Parallax Background, Parallax Animation, Colors Animation, Water Ripples, Particles Background, Background Effects & lot more.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Elementor Template/Section Importer', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/import-elementor-template/" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Import Elementor Templates and Sections with just one click without having to import the whole website.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Multiple Header Layouts and Settings', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#III.MainHeader" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The premium version gives the option to choose from 6 header layouts. Additionally, it allows changing the header background color, text color, header height, and more.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Mega Menu', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/create-mega-menu/" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The Premium version has an inbuilt mega menu that will allow you to create beautiful big menus in no time.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Advanced Typography Options for Specific Sections', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#TypographySettings" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The premium version has 800+ Google Fonts to choose from. Don\'t want to use Google Fonts? No problem, it has web safe standard non-Google fonts to choose from as well.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Color Options', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The free version has a basic color option but the premium version has advanced color options that allow customizing the color everywhere like header, post/page, footer, and home page sections.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Section Reorder', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Option to organize how the home page section appears.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Unlimited Blocks for Each Section', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The premium version allows adding an unlimited block for all the sections on the home page. This includes a slider, featured block, highlight block, service, team, testimonial, counter, pricing, tabs, content slider, and logo. Moreover, it has the option to choose the number of columns to show in each row.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Video Background, Image Motion Background, Gradient Background', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/configure-advanced-settings/#totalplus-background-types" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The premium version has advanced background options that include an option to choose from a video background, moving background, or gradient background.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Sections', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#HomePageSections/Settings" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Square Plus has an additional 13 sections.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td>5</td>
        <td>18</td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Blocks - Style Variations', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Option to switch the style of the home page blocks.', 'Free vs Pro Content', 'square'); ?></p>
            <ul>
                <li><a href="https://demo.hashthemes.com/square-plus/featured-block/" target="_blank"><?php echo esc_html_x('Featured Block - 3 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/highlight-block/" target="_blank"><?php echo esc_html_x('Highlight Block - 2 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/tab-block/" target="_blank"><?php echo esc_html_x('Tabs - 5 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/portfolio-masonry/" target="_blank"><?php echo esc_html_x('Portfolio Masonry - 6 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/portfolio-carousel/" target="_blank"><?php echo esc_html_x('Portfolio Slider - 4 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/logo-carousel/" target="_blank"><?php echo esc_html_x('Client Logo - 4 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/content-slider/" target="_blank"><?php echo esc_html_x('Content Slider - 2 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/team-block/" target="_blank"><?php echo esc_html_x('Team Grid/Carousel - 4 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/counter-block/" target="_blank"><?php echo esc_html_x('Counter - 4 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/blog-section/" target="_blank"><?php echo esc_html_x('Blog block - 4 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/testimonial-blocks/" target="_blank"><?php echo esc_html_x('Testimonial - 2 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/pricing-block/" target="_blank"><?php echo esc_html_x('Pricing - 4 styles', 'Free vs Pro Content', 'square'); ?></a></li>
            </ul>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Shape Dividers', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/configure-advanced-settings/#totalplus-shape-divider" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The theme has 16 shape dividers that you can choose from to create a nice transition effect between sections', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Sections with Full Screen Height', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/configure-advanced-settings/#totalplus-full-window-height" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('A home page section that covers the full screen despite having less content. It is useful for a one-page website.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Slider', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#HomeSlider" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The premium version has an option for the Simple Slider, Revolution Slider, and Single Banner Image with advanced customization options.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Top Header Bar', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#II.TopHeader" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Square Plus comes with an option for the top bar where you can add a contact address, social icon, language picker, or any informative text.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Add New Widget Area', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/add-new-widget-area/" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Create unlimited widget areas using our premium version. You can create new widget areas for placing widgets.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Custom Widgets', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('With a custom widget and SiteOrigin Page Builder, you can play to create various website layouts.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td>3 Widgets</td>
        <td>14 Widgets</td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('PreLoader Option', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#II.PreloaderOptions" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The loading screen appears until the website is fully loaded. The premium version has the option to choose from 16 preloaders or add your preloader image as well.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Sidebar Layout Options', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#SidebarSettings" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php printf(esc_html_x('The premium version has the option to change the sidebar layout universally or %1schange the sidebar for individual posts/pages%2s. Moreover, it allows choosing the sidebar widgets for individual posts/pages.', 'Free vs Pro Content', 'square'), '<a href="https://hashthemes.com/articles/change-the-sidebar-layout-and-choose-unique-widget/" target="_blank">', '</a>'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Advanced Blog Settings', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#BlogPostSettings" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The Premium version has an advanced blog page setting option. The option allows you to show or hide each element of the blog.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Blog Layouts', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The premium version gives the option to choose from 4 differently designed blog layouts.', 'Free vs Pro Content', 'square'); ?></p>
            <ul>
                <li><a href="https://demo.hashthemes.com/square-plus/original/blog/" target="_blank"><?php echo esc_html_x('Blog Layout 1 Demo', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/business/blog/" target="_blank"><?php echo esc_html_x('Blog Layout 2 Demo', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/main-demo/blog/" target="_blank"><?php echo esc_html_x('Blog Layout 3 Demo', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/gym/blog/" target="_blank"><?php echo esc_html_x('Blog Layout 4 Demo', 'Free vs Pro Content', 'square'); ?></a></li>
            </ul>
        </td>
        <td>1</td>
        <td>4</td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Reorder and Show/Hide Elements of Single Post', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#SinglePostSettings" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Change the position(reorder) the single post elements like post meta, featured image, content, category, tags, and social share icons and place them in the order you want. You can disable it individually if you do not want to show it.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Author Box, Social Share, and Related Post at the Bottom of the Single Post', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Shows the short intro of the post author along with social icons, major Social Share Icons without using a plugin, and related posts by category.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Unique Header Background for Each Post and Page', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/changing-the-title-bar-background/" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The premium version has the option to add a unique Title Bar(Header) background for each post and page.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Different Background and Text Color for Each Post and Page', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/change-the-background-and-text-color/" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The premium version comes with the option to configure the background and text color of each page and post on the website. It will allow you to choose the custom background color, background image, and text color for any page or post you like.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Hide Header and Footer for Each Post and Page', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/hide-header-and-footer/" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('You can show/hide the header and footer for each of the pages/posts. It is helpful if you are running an infographic website.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>

    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Advanced Footer Setting', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#FooterSettings" target="_blank"><?php echo esc_html_x('Detail', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('The premium version has the option to choose from 5 different footer styles. Apart from that, you can set the number of footer columns and resize them as you want with dragging column resizer.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Remove Footer Credit Text', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The premium version easily allows you to remove or change the footer credit text.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Google Map Option', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Shows the physical location with an interactive contact form.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/no.png'); ?>" alt="No"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Icon Picker', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The premium theme has 5 icon packs with more than 5000+ icons. They can be used on the various sections of the Home Page, WordPress Widget Blocks, and Elementor Modules.', 'Free vs Pro Content', 'square'); ?></p>
            <ul>
                <li><?php echo esc_html_x('i) Ico Font', 'Free vs Pro Content', 'square'); ?></li>
                <li><?php echo esc_html_x('ii) FontAwesome', 'Free vs Pro Content', 'square'); ?></li>
                <li><?php echo esc_html_x('iii) Essential Icon', 'Free vs Pro Content', 'square'); ?></li>
                <li><?php echo esc_html_x('iv) Material Icon', 'Free vs Pro Content', 'square'); ?></li>
                <li><?php echo esc_html_x('v) Elegant Icon', 'Free vs Pro Content', 'square'); ?></li>
            </ul>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('WooCommerce Compatible', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The premium version has enhanced WooCommerce options like adding a cart icon in the menu, product page settings, sidebar layout settings, and more.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('RTL Ready', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Both the free and premium versions are fully compatible with RTL (Right to left) languages like Arabic.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Multilingual Ready', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The Premium Version is fully compatible with WPML and Polylang. Create the website in multiple languages.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Partially', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Fully', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Translation Ready', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Both the free and pro versions are fully translation ready.', 'Free vs Pro Content', 'square'); ?>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Search Engine Optimization', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Follows best SEO practices so that your website always ranks higher in Search Engines.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Major Browser Compatible', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The website runs smoothly in all major browsers.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Responsive - Mobile Friendly', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Adapts to any screen size and displays beautifully.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Fast and Friendly Support', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('For the Premium theme, the user will get a reply in 10 hours or less.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
        <td><img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/yes.png'); ?>" alt="Yes"></td>
    </tr>
    <tr>
        <td>
            <span><?php echo esc_html_x('Upgrade to Pro', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Everything below, on as many sites as you like, for a single payment. No renewals, and updates stay free for life.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td colspan="2">
            <a target="_blank" class="buy-pro-btn" href="<?php echo esc_url(square_upgrade_url('freevspro-bottom', 'square-freevspro')); ?>"><?php echo esc_html_x('Buy Now ($65 only)', 'Free vs Pro Content', 'square'); ?></a>
        </td>
    </tr>
</table>