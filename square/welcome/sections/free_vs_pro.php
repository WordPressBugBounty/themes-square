<div class="free-vs-pro-info-wrap">
    <div class="free-vs-pro-info">
        <span class="dashicons dashicons-money-alt" aria-hidden="true"></span>
        <h4><?php echo esc_html_x('ONE TIME PAYMENT', 'Free vs Pro Content', 'square'); ?></h4>
        <p><?php echo esc_html_x('No renewal needed', 'Free vs Pro Content', 'square'); ?></p>
    </div>

    <div class="free-vs-pro-info">
        <span class="dashicons dashicons-admin-site-alt3" aria-hidden="true"></span>
        <h4><?php echo esc_html_x('UNLIMITED DOMAIN LICENSE', 'Free vs Pro Content', 'square'); ?></h4>
        <p><?php echo esc_html_x('Use it on as many websites as you need', 'Free vs Pro Content', 'square'); ?></p>
    </div>

    <div class="free-vs-pro-info">
        <span class="dashicons dashicons-update" aria-hidden="true"></span>
        <h4><?php echo esc_html_x('FREE LIFETIME UPDATES', 'Free vs Pro Content', 'square'); ?></h4>
        <p><?php echo esc_html_x('Every new feature at no extra cost', 'Free vs Pro Content', 'square'); ?></p>
    </div>
</div>

<?php
/* Feature rows are numbered by a CSS counter, so inserting one doesn't break other translations. */
?>
<table class="comparison-table">
    <tr>
        <td>
            <span><?php echo esc_html_x('Upgrade to Pro', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Everything below, on as many sites as you like, for a single payment. No renewals, and updates stay free for life.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td colspan="2">
            <a target="_blank" class="buy-pro-btn" href="<?php echo esc_url(square_upgrade_url('freevspro-top', 'square-freevspro')); ?>"><?php echo esc_html_x('Buy Now for $65', 'Free vs Pro Content', 'square'); ?></a>
        </td>
    </tr>
    <tr>
        <th><?php echo esc_html_x('Features', 'Free vs Pro Content', 'square'); ?></th>
        <th><?php echo esc_html_x('Free', 'Free vs Pro Content', 'square'); ?></th>
        <th><?php echo esc_html_x('Pro', 'Free vs Pro Content', 'square'); ?></th>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('One-Click Demo Import', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Import a complete demo website, with its content and settings, in a single click.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('1 Demo', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('4 More Demos', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('GDPR Compliance and Cookie Consent', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/configuring-gdpr-settings/" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Neither version collects any visitor data on its own. Square Plus adds a cookie consent bar with your own text, buttons and a link to your privacy policy.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Maintenance Mode', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/setting-up-maintenance-mode-page/" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Show a maintenance or coming soon screen with a countdown timer while you work on the site, with no extra plugin needed.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Elementor Compatible', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Both versions work with Elementor. Square Plus goes further, with its own widgets, section extenders and templates.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Elementor Widgets', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#I.ElementorModule" target="_blank"><?php echo esc_html_x('View Demo', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Square Plus adds its own Elementor widgets, so you can build any page layout with the same look as the rest of the theme.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><?php echo esc_html_x('21 Widgets', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Elementor Section Extenders', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#III.ElementorExtender" target="_blank"><?php echo esc_html_x('View Demo', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Add interactive effects to Elementor sections, such as Parallax Background, Parallax Animation, Colors Animation, Water Ripples, Particles Background and Background Effects.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Elementor Template and Section Importer', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/import-elementor-template/" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Import individual Elementor templates and sections with one click, without importing a whole demo.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Header Layouts and Settings', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#III.MainHeader" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Choose from 6 header layouts, and set the header background, text color, height and more.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Mega Menu', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/create-mega-menu/" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Build large, multi-column menus with the built-in mega menu, with no extra plugin needed.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Typography', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#TypographySettings" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Square Plus adds separate typography settings for specific parts of the site, with 1,900+ Google Fonts and web-safe system fonts to choose from.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Color Options', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('The free version covers the main site colors. Square Plus lets you set colors throughout the site, including the header, posts and pages, footer and each home page section.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Section Reorder', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Arrange the home page sections in the order you want.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Unlimited Blocks for Each Section', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Add as many items as you need to every home page section, including slides, featured and highlight blocks, services, team members, testimonials, counters, pricing plans, tabs, content slides and logos, and choose how many columns each row shows.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Video, Motion and Gradient Backgrounds', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/configure-advanced-settings/#totalplus-background-types" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Give any home page section a video, moving image or gradient background.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Sections', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#HomePageSections/Settings" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Square Plus adds 13 more home page sections.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td>5</td>
        <td>18</td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Block Styles', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Switch between several designs for each home page block:', 'Free vs Pro Content', 'square'); ?></p>
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
                <li><a href="https://demo.hashthemes.com/square-plus/blog-section/" target="_blank"><?php echo esc_html_x('Blog Block - 4 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/testimonial-blocks/" target="_blank"><?php echo esc_html_x('Testimonial - 2 styles', 'Free vs Pro Content', 'square'); ?></a></li>
                <li><a href="https://demo.hashthemes.com/square-plus/pricing-block/" target="_blank"><?php echo esc_html_x('Pricing - 4 styles', 'Free vs Pro Content', 'square'); ?></a></li>
            </ul>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Shape Dividers', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/configure-advanced-settings/#totalplus-shape-divider" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Choose from 16 shape dividers for smooth transitions between sections.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Full Screen Home Page Sections', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/configure-advanced-settings/#totalplus-full-window-height" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Make any home page section fill the height of the screen, however little content it has. Ideal for one-page websites.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Home Page Slider', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#HomeSlider" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Choose a simple slider, Revolution Slider or a single banner image, each with advanced settings.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Top Header Bar', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#II.TopHeader" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('A bar above the header for your contact details, social icons, a language switcher or a short message.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Add New Widget Area', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/add-new-widget-area/" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Create as many extra widget areas as you need, for example to show a different sidebar on individual pages.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Custom Widgets', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Ready-made widgets for sidebars and footers, which you can also use to build page layouts with SiteOrigin Page Builder.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td>3 Widgets</td>
        <td>14 Widgets</td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Preloader', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#II.PreloaderOptions" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Show a loading animation until the page has fully loaded. Choose from 16 preloaders or upload your own image.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Sidebar Layout Options', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#SidebarSettings" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php printf(esc_html_x('Set the sidebar layout for the whole site or %1$sfor individual posts and pages%2$s, and choose different sidebar widgets for individual posts and pages.', 'Free vs Pro Content', 'square'), '<a href="https://hashthemes.com/articles/change-the-sidebar-layout-and-choose-unique-widget/" target="_blank">', '</a>'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Advanced Blog Settings', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#BlogPostSettings" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Square Plus adds a show or hide setting for every element of the blog page.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Blog Layouts', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Choose from 4 distinct blog layouts.', 'Free vs Pro Content', 'square'); ?></p>
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
            <span><?php echo esc_html_x('Reorder and Show or Hide Single Post Elements', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#SinglePostSettings" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Put the parts of a single post, such as the post meta, featured image, content, categories, tags and share icons, in the order you want, and hide any you do not need.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Author Box, Social Sharing and Related Posts', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Below each post: an author box with a short bio and social icons, share buttons for the major social networks with no extra plugin, and related posts from the same category.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Unique Header Background for Each Post and Page', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/changing-the-title-bar-background/" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Give any post or page its own title bar background.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Custom Background and Text Colors for Each Post and Page', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/change-the-background-and-text-color/" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Set a custom background color, background image and text color for any post or page.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Hide Header and Footer for Each Post and Page', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/articles/hide-header-and-footer/" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Hide the header or footer on individual posts and pages, which is useful for landing pages and infographics.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>

    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Advanced Footer Settings', 'Free vs Pro Content', 'square'); ?> - <a href="https://hashthemes.com/documentation/square-plus-documentation/#FooterSettings" target="_blank"><?php echo esc_html_x('Details', 'Free vs Pro Content', 'square'); ?></a></span>
            <p><?php echo esc_html_x('Choose from 5 footer styles, set the number of footer columns and drag to resize them.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Remove Footer Credit Text', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Remove or change the footer credit text.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Google Map', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Show your location on an interactive map, alongside a contact form.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-no" role="img" aria-label="<?php esc_attr_e('No', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Icon Picker', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Square Plus includes 5 icon packs with more than 12,000 icons, for the home page sections, widgets and Elementor widgets.', 'Free vs Pro Content', 'square'); ?></p>
            <ul>
                <li><?php echo esc_html_x('IcoFont', 'Free vs Pro Content', 'square'); ?></li>
                <li><?php echo esc_html_x('Font Awesome', 'Free vs Pro Content', 'square'); ?></li>
                <li><?php echo esc_html_x('Essential Icons', 'Free vs Pro Content', 'square'); ?></li>
                <li><?php echo esc_html_x('Material Design Icons', 'Free vs Pro Content', 'square'); ?></li>
                <li><?php echo esc_html_x('Elegant Icons', 'Free vs Pro Content', 'square'); ?></li>
            </ul>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('WooCommerce Compatible', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Both versions support WooCommerce. Square Plus adds a cart icon in the menu, product page settings, shop sidebar layouts and more.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Basic', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Advanced', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('RTL Ready', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Both versions fully support right-to-left languages such as Arabic and Hebrew.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Multilingual Ready', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Square Plus is fully compatible with WPML and Polylang, so you can run your website in several languages.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><?php echo esc_html_x('Partially', 'Free vs Pro Content', 'square'); ?></td>
        <td><?php echo esc_html_x('Fully', 'Free vs Pro Content', 'square'); ?></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Translation Ready', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Both versions are ready to be translated into any language.', 'Free vs Pro Content', 'square'); ?>
        </td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></p>
        </td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Search Engine Optimization', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Clean, well-structured code that follows SEO best practices.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Major Browser Compatible', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Works smoothly in all major browsers.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Responsive and Mobile Friendly', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Adapts to every screen size, from phones to large desktops.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr class="feature-row">
        <td>
            <span><?php echo esc_html_x('Support', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Square Plus customers get a reply from our support team in 10 hours or less.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
        <td><span class="welcome-mark is-yes" role="img" aria-label="<?php esc_attr_e('Yes', 'square'); ?>"></span></td>
    </tr>
    <tr>
        <td>
            <span><?php echo esc_html_x('Upgrade to Pro', 'Free vs Pro Content', 'square'); ?></span>
            <p><?php echo esc_html_x('Everything above, on as many sites as you like, for a single payment. No renewals, and updates stay free for life.', 'Free vs Pro Content', 'square'); ?></p>
        </td>
        <td colspan="2">
            <a target="_blank" class="buy-pro-btn" href="<?php echo esc_url(square_upgrade_url('freevspro-bottom', 'square-freevspro')); ?>"><?php echo esc_html_x('Buy Now for $65', 'Free vs Pro Content', 'square'); ?></a>
        </td>
    </tr>
</table>