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
            add_action('after_setup_theme', array($this, 'resolve_list_theme_mods'), 101); // Just after the Customizer imports starter content, at 100.
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
            // The WordPress.org theme preview (wp-themes.com) renders this too, so every {{key}} must exist and keys must be unique across posts and attachments.
            // Keys are prefixed, as the preview reuses a real page whose slug matches a key (such as "about") instead of the starter content.
            $starter_content = array(
                'posts' => array(
                    'square-about' => array(
                        'post_type' => 'page',
                        'post_title' => _x('About Us', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p>' . _x('We are a team of consultants, designers and developers who have spent over fifteen years helping businesses plan, build and grow. From first idea to finished project, we keep things simple, honest and focused on results.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('Every client gets a dedicated team, a clear plan and regular updates. We listen first, explain our thinking and only recommend what will make a real difference to your business.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('Over the years we have completed more than 450 projects for over 120 clients, from small family shops to national brands. Many of them have worked with us for years, and most of our new work comes from their recommendations.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>' . _x('Honest advice, even when it means doing less', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Clear pricing with no hidden costs', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Friendly support long after launch', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --></ul><!-- /wp:list -->',
                    ),
                    'square-featured-1' => array(
                        'post_type' => 'page',
                        'post_title' => _x('Business Consulting', 'Theme starter content', 'square'),
                        'post_content' => _x('Practical advice and clear plans that help you make better decisions and grow with confidence.', 'Theme starter content', 'square'),
                    ),
                    'square-featured-2' => array(
                        'post_type' => 'page',
                        'post_title' => _x('Digital Solutions', 'Theme starter content', 'square'),
                        'post_content' => _x('Websites, apps and online tools built to save you time and bring in more customers.', 'Theme starter content', 'square'),
                    ),
                    'square-featured-3' => array(
                        'post_type' => 'page',
                        'post_title' => _x('Lasting Partnerships', 'Theme starter content', 'square'),
                        'post_content' => _x('We stay by your side after launch, with quick answers whenever you need them.', 'Theme starter content', 'square'),
                    ),
                    'square-mission' => array(
                        'post_type' => 'page',
                        'post_title' => _x('Our Mission', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p>' . _x('Our mission is to give every business, large or small, access to the advice and tools that help it succeed. We measure our work by one thing: the difference it makes to our clients.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('We believe in honest advice, clear pricing and long-term partnerships built on trust.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('We do this by learning how your business really works before we suggest anything, by setting goals we can measure together, and by sharing what we learn along the way so your team grows stronger too.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>' . _x('Put our clients\' success first', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Keep every promise we make', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Keep learning and improving', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --></ul><!-- /wp:list -->',
                    ),
                    'square-services' => array(
                        'post_type' => 'page',
                        'post_title' => _x('Our Services', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p>' . _x('Everything you need to plan, build and grow your business, all in one place.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>' . _x('Business strategy and planning', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Website design and development', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Branding and digital marketing', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Financial advice and risk management', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --></ul><!-- /wp:list --><!-- wp:paragraph --><p>' . _x('Choose a single service or combine several into one plan. Every project starts with a free consultation, and you always know the cost and timeline before any work begins.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph -->',
                    ),
                    'square-team' => array(
                        'post_type' => 'page',
                        'post_title' => _x('Our Team', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p>' . _x('Our team brings together strategists, designers, developers and marketers with years of experience across many industries.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('We work closely together and with you, so every project benefits from the right mix of skills from the very first meeting.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('Each client has one main contact who knows their business and keeps the project on track, backed by specialists who step in whenever their skills are needed.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>' . _x('Over 25 experienced professionals', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Specialists in strategy, design, development and marketing', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('Regular training to keep our skills up to date', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --></ul><!-- /wp:list -->',
                    ),
                    'square-faqs' => array(
                        'post_type' => 'page',
                        'post_title' => _x('Frequently Asked Questions', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p><strong>' . _x('What kinds of businesses do you work with?', 'Theme starter content', 'square') . '</strong><br>' . _x('Start-ups, local shops and established companies in finance, healthcare, retail and technology.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><strong>' . _x('How do we get started?', 'Theme starter content', 'square') . '</strong><br>' . _x('Send us a message or book a free call. We will learn about your goals and suggest the next steps.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><strong>' . _x('Can you work with our existing team?', 'Theme starter content', 'square') . '</strong><br>' . _x('Yes. We are happy to lead a project or support your own staff wherever you need us.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph -->',
                    ),
                    'square-quote' => array(
                        'post_type' => 'page',
                        'post_title' => _x('Request a Quote', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p>' . _x('Tell us about your project, your timeline and your budget. One of our consultants will get back to you within one business day with a clear, no-obligation proposal.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('Your proposal will include:', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:list --><ul class="wp-block-list"><!-- wp:list-item --><li>' . _x('A summary of your goals and how we will reach them', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('A clear timeline with key milestones', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --><!-- wp:list-item --><li>' . _x('A fixed price with no hidden costs', 'Theme starter content', 'square') . '</li><!-- /wp:list-item --></ul><!-- /wp:list --><!-- wp:paragraph --><p>' . _x('Prefer to talk it through? Call us or book a free 30-minute consultation at a time that suits you.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph -->',
                    ),
                    'square-post-1' => array(
                        'post_type' => 'post',
                        'post_title' => _x('5 Tips for Planning Your New Website', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p>' . _x('A new website is a big investment, and a little planning at the start saves a lot of time later. Before you think about colors or layouts, write down what you want visitors to do: call you, book a meeting or buy a product.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('Next, list the pages you really need, gather your text and photos early, and look at a few sites you like for inspiration. With clear goals and content ready, the design and build go faster and the result works harder for your business.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph -->',
                        'thumbnail' => '{{square-post-image-1}}',
                    ),
                    'square-post-2' => array(
                        'post_type' => 'post',
                        'post_title' => _x('How to Choose the Right Tools for Your Team', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p>' . _x('The right tools make work feel easier, while the wrong ones slow everyone down. Start with the problems your team faces every day, not with the most popular app.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('Try one tool at a time, give people a few weeks to get used to it, and ask for honest feedback. Keep the tools that save time and drop the ones nobody uses.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph -->',
                        'thumbnail' => '{{square-post-image-2}}',
                    ),
                    'square-post-3' => array(
                        'post_type' => 'post',
                        'post_title' => _x('Why Great Teams Build Great Businesses', 'Theme starter content', 'square'),
                        'post_content' => '<!-- wp:paragraph --><p>' . _x('Every successful project we have delivered had one thing in common: a team that trusted each other. Skills matter, but clear communication and shared goals matter more.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>' . _x('Take time to celebrate small wins, make it easy for people to ask questions, and give everyone a clear view of where the business is heading. Happy teams build products customers love.', 'Theme starter content', 'square') . '</p><!-- /wp:paragraph -->',
                        'thumbnail' => '{{square-post-image-3}}',
                    ),
                    'contact',
                    'blog',
                ),

                // Images bundled with the theme. Titles must be unique, as the Customizer import matches list settings to them.
                'attachments' => array(
                    'square-logo' => array(
                        'post_title' => _x('Square Logo', 'Theme starter content', 'square'),
                        'file' => 'images/logo.png',
                    ),
                    'square-about-image-1' => array(
                        'post_title' => _x('Michael Carter', 'Theme starter content', 'square'),
                        'file' => 'images/starter/person-1.jpg',
                    ),
                    'square-about-image-2' => array(
                        'post_title' => _x('Sophia Bennett', 'Theme starter content', 'square'),
                        'file' => 'images/starter/person-2.jpg',
                    ),
                    'square-about-image-3' => array(
                        'post_title' => _x('Daniel Brooks', 'Theme starter content', 'square'),
                        'file' => 'images/starter/person-3.jpg',
                    ),
                    'square-about-image-4' => array(
                        'post_title' => _x('Olivia Hayes', 'Theme starter content', 'square'),
                        'file' => 'images/starter/person-4.jpg',
                    ),
                    'square-post-image-1' => array(
                        'post_title' => _x('Desk with a computer and keyboard', 'Theme starter content', 'square'),
                        'file' => 'images/starter/banner-1.jpg',
                    ),
                    'square-post-image-2' => array(
                        'post_title' => _x('Laptop and tablet on a desk', 'Theme starter content', 'square'),
                        'file' => 'images/starter/banner-2.jpg',
                    ),
                    'square-post-image-3' => array(
                        'post_title' => _x('Team working together', 'Theme starter content', 'square'),
                        'file' => 'images/bg.jpg',
                    ),
                    'square-client-1' => array(
                        'post_title' => _x('Zentrix logo', 'Theme starter content', 'square'),
                        'file' => 'images/starter/client-1.png',
                    ),
                    'square-client-2' => array(
                        'post_title' => _x('Lumora logo', 'Theme starter content', 'square'),
                        'file' => 'images/starter/client-2.png',
                    ),
                    'square-client-3' => array(
                        'post_title' => _x('Peakvale logo', 'Theme starter content', 'square'),
                        'file' => 'images/starter/client-3.png',
                    ),
                    'square-client-4' => array(
                        'post_title' => _x('Orbitly logo', 'Theme starter content', 'square'),
                        'file' => 'images/starter/client-4.png',
                    ),
                    'square-client-5' => array(
                        'post_title' => _x('Cobaltix logo', 'Theme starter content', 'square'),
                        'file' => 'images/starter/client-5.png',
                    ),
                    'square-client-6' => array(
                        'post_title' => _x('Solvana logo', 'Theme starter content', 'square'),
                        'file' => 'images/starter/client-6.png',
                    ),
                ),

                'options' => array(),

                // Set the front page section theme mods to the IDs of the pages above.
                'theme_mods' => array(
                    'custom_logo' => '{{square-logo}}',
                    'square_enable_frontpage' => true,
                    'square_template_color' => '#00bcd4',
                    'square_slider_title1' => _x('Smart Solutions for Growing Businesses', 'Theme starter content', 'square'),
                    'square_slider_subtitle1' => _x('Consulting, technology and marketing that help your company move forward.', 'Theme starter content', 'square'),
                    'square_slider_image1' => get_template_directory_uri() . '/images/bg.jpg',
                    'square_slider_title2' => _x('Turn Your Ideas Into Results', 'Theme starter content', 'square'),
                    'square_slider_subtitle2' => _x('We plan, build and launch projects that bring in new customers.', 'Theme starter content', 'square'),
                    'square_slider_image2' => get_template_directory_uri() . '/images/starter/banner-1.jpg',
                    'square_slider_title3' => _x('Work With a Team You Can Trust', 'Theme starter content', 'square'),
                    'square_slider_subtitle3' => _x('Fifteen years of helping businesses of every size succeed.', 'Theme starter content', 'square'),
                    'square_slider_image3' => get_template_directory_uri() . '/images/starter/banner-2.jpg',
                    'square_featured_page1' => '{{square-featured-1}}',
                    'square_featured_page2' => '{{square-featured-2}}',
                    'square_featured_page3' => '{{square-featured-3}}',
                    'square_featured_page_icon1' => 'fa-solid fa-chart-line',
                    'square_featured_page_icon2' => 'fa-solid fa-laptop-code',
                    'square_featured_page_icon3' => 'fa-solid fa-handshake',
                    'square_about_page' => '{{square-about}}',
                    'square_about_image_stack' => array('{{square-about-image-1}}', '{{square-about-image-2}}', '{{square-about-image-3}}', '{{square-about-image-4}}'),
                    'square_tab_page1' => '{{square-mission}}',
                    'square_tab_page2' => '{{square-services}}',
                    'square_tab_page3' => '{{square-team}}',
                    'square_tab_page4' => '{{square-faqs}}',
                    'square_tab_page5' => '{{square-quote}}',
                    'square_tab_title1' => _x('Our Mission', 'Theme starter content', 'square'),
                    'square_tab_title2' => _x('Our Services', 'Theme starter content', 'square'),
                    'square_tab_title3' => _x('Our Team', 'Theme starter content', 'square'),
                    'square_tab_title4' => _x('FAQs', 'Theme starter content', 'square'),
                    'square_tab_title5' => _x('Get a Quote', 'Theme starter content', 'square'),
                    'square_tab_icon1' => 'fa-solid fa-bullseye',
                    'square_tab_icon2' => 'fa-solid fa-briefcase',
                    'square_tab_icon3' => 'fa-solid fa-users',
                    'square_tab_icon4' => 'fa-solid fa-circle-question',
                    'square_tab_icon5' => 'fa-solid fa-file-signature',
                    'square_logo_title' => _x('Our Clients', 'Theme starter content', 'square'),
                    'square_client_logo_image' => array('{{square-client-1}}', '{{square-client-2}}', '{{square-client-3}}', '{{square-client-4}}', '{{square-client-5}}', '{{square-client-6}}'),
                ),
                'nav_menus' => array(
                    'primary' => array(
                        'name' => __('Primary Menu', 'square'),
                        'items' => array(
                            'link_home',
                            'square_about' => array(
                                'type' => 'post_type',
                                'object' => 'page',
                                'object_id' => '{{square-about}}',
                            ),
                            'page_blog',
                            'page_contact',
                        ),
                    )
                ),
            );

            $starter_content = apply_filters('square_starter_content', $starter_content);

            add_theme_support('starter-content', $starter_content);
        }

        /**
         * Fills in the gallery settings (About image stack, client logos) when the Customizer imports starter content.
         *
         * Core resolves a theme mod only when it holds a single {{symbol}}, and skips the setting otherwise.
         * Here each symbol is matched to the attachment core created for it, which core names after its title.
         */
        public function resolve_list_theme_mods() {
            global $wp_customize, $pagenow;

            if (!get_option('fresh_site') || 'customize.php' !== $pagenow || !$wp_customize instanceof WP_Customize_Manager) {
                return;
            }

            $starter_content = get_theme_starter_content();
            $post_values = $wp_customize->unsanitized_post_values();
            $changeset_data = $wp_customize->changeset_data();

            if (empty($starter_content['theme_mods']) || empty($post_values['nav_menus_created_posts']) || !is_array($changeset_data)) {
                return;
            }

            $created_ids = array();
            foreach ((array) $post_values['nav_menus_created_posts'] as $post_id) {
                $created_ids[get_post_type($post_id) . ':' . get_post_meta($post_id, '_customize_draft_post_name', true)] = $post_id;
            }

            // Both gallery settings save a comma separated string.
            foreach (array('square_about_image_stack', 'square_client_logo_image') as $name) {
                // Leave a value the user has already set in this changeset alone.
                if (!isset($starter_content['theme_mods'][$name]) || !is_array($starter_content['theme_mods'][$name]) || isset($changeset_data[$name])) {
                    continue;
                }

                $ids = array();
                foreach ($starter_content['theme_mods'][$name] as $value) {
                    if (!preg_match('/^{{(?P<symbol>.+)}}$/', $value, $matches) || !isset($starter_content['attachments'][$matches['symbol']])) {
                        continue;
                    }

                    $key = 'attachment:' . sanitize_title($starter_content['attachments'][$matches['symbol']]['post_title']);
                    if (isset($created_ids[$key])) {
                        $ids[] = $created_ids[$key];
                    }
                }

                if ($ids) {
                    $wp_customize->set_post_value($name, implode(',', $ids));
                }
            }
        }

    }

endif;

return new Square_Starter_Content();
