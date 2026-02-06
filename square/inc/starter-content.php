<?php
/**
 * Credit: Storefront Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('Square_Starter_Content')):

    class Square_Starter_Content {

        public function __construct() {
            add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
            add_action('admin_notices', array($this, 'admin_notices'), 99);
            add_action('wp_ajax_square_dismiss_notice', array($this, 'dismiss_nux'));
            add_action('admin_post_square_starter_content', array($this, 'redirect_customizer'));
            add_action('after_setup_theme', array($this, 'starter_content'));
        }


        public function enqueue_scripts() {
            global $wp_customize;

            if (isset($wp_customize) || true === (bool) get_option('square_nux_dismissed')) {
                return;
            }

            wp_enqueue_script('square-starter-admin-script', get_template_directory_uri() . '/js/starter.js', array('jquery'));

            $square_nux = array(
                'nonce' => wp_create_nonce('square_notice_dismiss')
            );

            wp_localize_script('square-starter-admin-script', 'squareNUX', $square_nux);
        }

        public function admin_notices() {
            if (true === (bool) get_option('square_nux_dismissed')) {
                return;
            }
            ?>

            <div class="notice notice-info square-notice-nux is-dismissible">

                <div class="notice-content">
                    <h2><?php esc_html_e('Thank you for installing the Square Theme', 'square'); ?></h2>
                    <p>
                        <?php
                        echo esc_attr__('Let\'s get started by Customizing the website.', 'square');
                        ?>
                    </p>
                    <p></p>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                        <input type="hidden" name="action" value="square_starter_content">
                        <?php wp_nonce_field('square_starter_content'); ?>

                        <input type="submit" class="button button-primary" value="<?php esc_attr_e('Let\'s go!', 'square'); ?>">
                    </form>
                    <p></p>
                </div>
            </div>
        <?php }

        /**
         * AJAX dismiss notice.
         *
         */
        public function dismiss_nux() {
            $nonce = !empty($_POST['nonce']) ? $_POST['nonce'] : false;

            if (!$nonce || !wp_verify_nonce($nonce, 'square_notice_dismiss') || !current_user_can('manage_options')) {
                die();
            }

            update_option('square_nux_dismissed', true);
        }

        /**
         * Redirects to the customizer with the correct variables.
         *
         */
        public function redirect_customizer() {
            check_admin_referer('square_starter_content');

            if (current_user_can('manage_options')) {
                // Dismiss notice.
                update_option('square_nux_dismissed', true);
            }

            $args = array('square_starter_content' => '1');

            wp_safe_redirect(add_query_arg($args, admin_url('customize.php')));

            die();
        }

        /**
         * Starter content.
         *
         */
        public function starter_content() {
            // Define and register starter content to showcase the theme on new sites.
            $starter_content = array(
                'posts' => array(
                    'about' => array(
                        'post_type' => 'page',
                        'post_title' => esc_html_x('About Us', 'Theme starter content', 'square'),
                        'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.<br/>Urna nec tincidunt praesent semper feugiat nibh sed. Non arcu risus quis varius quam quisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames. Quisque id diam vel quam elementum pulvinar etiam non. In cursus turpis massa tincidunt dui ut. Ultricies tristique nulla aliquet enim tortor at auctor. Elementum nibh tellus molestie nunc non blandit massa. Tristique senectus et netus et. '
                    ),
                    'financial-solution' => array(
                        'post_type' => 'page',
                        'post_title' => 'Business & Financial Solutions',
                        'post_content' => 'We provide a full suite of business and financial solutions designed to help companies achieve stability, efficiency, and growth.'
                    ),
                    'online-presence' => array(
                        'post_type' => 'page',
                        'post_title' => 'Increase Your Online Presence',
                        'post_content' => 'In today’s digital-first world, your online presence defines your brand. We help businesses boost visibility, engagement, and conversions.'
                    ),
                    'become-successful' => array(
                        'post_type' => 'page',
                        'post_title' => 'Become Successful & Superior',
                        'post_content' => 'Success begins with vision, strategy, and execution. At our company, we empower clients to achieve superior performance through smart business planning.'
                    ),
                    'our-mission' => array(
                        'post_type' => 'page',
                        'post_title' => 'Our Mission',
                        'post_content' => 'Our mission is to deliver innovative and sustainable business solutions that empower organizations to achieve long-term success. We are committed to excellence, integrity, and building lasting partnerships that drive measurable growth and positive impact in every industry we serve.'
                    ),
                    'our-services' => array(
                        'post_type' => 'page',
                        'post_title' => 'Our Services',
                        'post_content' => 'We provide a comprehensive range of corporate services designed to help businesses adapt, grow, and succeed in today’s competitive market.  
                        • Business Consulting and Strategy  
                        • Technology and Digital Transformation  
                        • Branding and Marketing Solutions  
                        • Financial Advisory and Risk Management  
                        • Human Resource and Talent Development  
                        Our expert teams combine industry knowledge with modern tools to deliver efficient and reliable results.'
                    ),
                    'our-team' => array(
                        'post_type' => 'page',
                        'post_title' => 'Our Team',
                        'post_content' => 'Our team consists of passionate professionals with diverse expertise in business strategy, technology, and innovation. With years of combined experience, we work collaboratively to craft solutions that meet each client’s unique challenges. We value transparency, creativity, and a culture of continuous learning and improvement.'
                    ),
                    'faqs' => array(
                        'post_type' => 'page',
                        'post_title' => 'FAQs',
                        'post_content' => '<strong>1. What industries do you serve?</strong><br>We serve clients across multiple industries, including finance, healthcare, technology, and retail.<br><br>
<strong>2. How can I get started?</strong><br>Simply contact us through our website or request a consultation. Our team will reach out to understand your goals and requirements.<br><br>
<strong>3. Do you offer customized solutions?</strong><br>Yes. Every project is tailored to match your business objectives and industry standards.'
                    ),
                    'request-quote' => array(
                        'post_type' => 'page',
                        'post_title' => 'Request a Quote',
                        'post_content' => 'Ready to take your business to the next level? Fill out our quote request form and let us know your project details. Our consultants will review your requirements and prepare a customized proposal that aligns with your goals, timeline, and budget. Let’s build success together!'
                    ),
                    'contact',
                    'blog',
                ),
                // Create the custom image attachments used as post thumbnails for pages.
                'attachments' => array(
                    'slider' => array(
                        'post_title' => esc_html_x('Slider', 'Theme starter content', 'square'),
                        'file' => 'images/bg.jpg',
                    ),
                    'square-logo' => array(
                        'post_title' => esc_html_x('Square Logo', 'Theme starter content', 'square'),
                        'file' => 'images/logo.png',
                    )
                ),

                'options' => array(
                    //'show_on_front' => 'page',
                    //'page_on_front' => '{{home}}',
                    //'page_for_posts' => '{{blog}}',
                ),

                // Set the front page section theme mods to the IDs of the core-registered pages.
                'theme_mods' => array(
                    'custom_logo' => '{{square-logo}}',
                    'header_text' => false,
                    'square_enable_frontpage' => true,
                    'square_template_color' => '#00bcd4',
                    'square_about_page' => '{{about}}',
                    'square_featured_page1' => '{{financial-solution}}',
                    'square_featured_page2' => '{{online-presence}}',
                    'square_featured_page3' => '{{become-successful}}',
                    'square_featured_page_icon1' => 'fas fa-plane',
                    'square_featured_page_icon2' => 'fa fa-money',
                    'square_featured_page_icon3' => 'fa fa-lightbulb-o',
                    'square_tab_page1' => '{{our-mission}}',
                    'square_tab_page2' => '{{our-services}}',
                    'square_tab_page3' => '{{our-team}}',
                    'square_tab_page4' => '{{faqs}}',
                    'square_tab_page5' => '{{request-quote}}',
                    'square_tab_title1' => esc_html_x('Our Mission', 'Theme starter content', 'square'),
                    'square_tab_title2' => esc_html_x('Our Services', 'Theme starter content', 'square'),
                    'square_tab_title3' => esc_html_x('Team', 'Theme starter content', 'square'),
                    'square_tab_title4' => esc_html_x('FAQ\'s', 'Theme starter content', 'square'),
                    'square_tab_title5' => esc_html_x('Request Quote', 'Theme starter content', 'square'),
                    'square_tab_icon1' => 'fa fa-bullseye',
                    'square_tab_icon2' => 'fa fa-trophy',
                    'square_tab_icon3' => 'fa fa-black-tie',
                    'square_tab_icon4' => 'fa fa-book',
                    'square_tab_icon5' => 'fa fa-exclamation-circle',
                    'square_logo_title' => esc_html_x('Our Clients', 'Theme starter content', 'square')
                ),
                'nav_menus' => array(
                    'primary' => array(
                        'name' => __('Primary Menu', 'square'),
                        'items' => array(
                            'link_home',
                            'page_about',
                            'page_blog',
                            'page_contact',
                            'post_news'
                        ),
                    )
                ),
            );

            $starter_content = apply_filters('square_starter_content', $starter_content);

            add_theme_support('starter-content', $starter_content);
        }

    }

endif;

return new Square_Starter_Content();