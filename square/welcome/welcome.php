<?php
if (!class_exists('Square_Welcome')):

    class Square_Welcome {
        public $theme_name = ''; // For storing Theme Name
        public $theme_version = ''; // For Storing Theme Current Version Information
        public $free_plugins = array(); // For Storing the list of the Recommended Free Plugins

        /**
         * Constructor for the Welcome Screen
         */

        public function __construct() {

            /** Useful Variables */
            $theme = wp_get_theme();
            $this->theme_name = $theme->Name;
            $this->theme_version = $theme->Version;

            /** List of Recommended Free Plugins */
            $this->free_plugins = array(
                'hashthemes-demo-importer' => array(
                    'name' => 'HashThemes Demo Importer',
                    'slug' => 'hashthemes-demo-importer',
                    'filename' => 'hashthemes-demo-importer',
                    'thumb_path' => 'https://ps.w.org/hashthemes-demo-importer/assets/icon-256x256.png'
                ),
                'elementor' => array(
                    'name' => 'Elementor Page Builder',
                    'slug' => 'elementor',
                    'filename' => 'elementor',
                    'thumb_path' => 'https://ps.w.org/elementor/assets/icon-256x256.gif'
                ),
                'hash-form' => array(
                    'name' => 'Hash Form - Drag & Drop Form Builder',
                    'slug' => 'hash-form',
                    'filename' => 'hash-form',
                    'thumb_path' => 'https://ps.w.org/hash-form/assets/icon-256x256.gif'
                ),
                'hash-elements' => array(
                    'name' => 'Hash Elements',
                    'slug' => 'hash-elements',
                    'filename' => 'hash-elements',
                    'thumb_path' => 'https://ps.w.org/hash-elements/assets/icon-256x256.png'
                ),
                'simple-floating-menu' => array(
                    'name' => 'Simple Floating Menu',
                    'slug' => 'simple-floating-menu',
                    'filename' => 'simple-floating-menu',
                    'thumb_path' => 'https://ps.w.org/simple-floating-menu/assets/icon-256x256.png'
                ),
            );

            /* Create a Welcome Page */
            add_action('admin_menu', array($this, 'welcome_register_menu'));

            /* Enqueue Styles & Scripts for Welcome Page */
            add_action('admin_enqueue_scripts', array($this, 'welcome_styles_and_scripts'));

            /* Adds Footer Rating Text */
            add_filter('admin_footer_text', array($this, 'admin_footer_text'));

            /* Create a Welcome Page */
            add_action('wp_loaded', array($this, 'admin_notice'), 20);

            add_action('after_switch_theme', array($this, 'erase_hide_notice'));

            add_action('wp_ajax_square_activate_plugin', array($this, 'activate_plugin'));

            add_action('admin_init', array($this, 'welcome_init'));
        }

        /** Trigger Welcome Message Notification */
        public function admin_notice($hook) {
            add_action('admin_notices', array($this, 'admin_notice_content'));
        }

        /** Welcome Message Notification */
        public function admin_notice_content() {
            if (!$this->is_dismissed('welcome')) {
                $this->welcome_notice();
            }

            if (!$this->is_dismissed('review') && !empty(get_option('square_first_activation')) && time() > get_option('square_first_activation') + 15 * DAY_IN_SECONDS) {
                $this->review_notice();
            }
        }

        public function welcome_notice() {
            $screen = get_current_screen();

            if ('appearance_page_square-welcome' === $screen->id || (isset($screen->parent_file) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id) || 'theme-install' === $screen->id) {
                return;
            }
            ?>
            <div class="updated notice square-welcome-notice square-notice">
                <?php $this->dismiss_button('welcome'); ?>
                <div class="square-welcome-notice-wrap">
                    <h2><?php esc_html_e('Congratulations!', 'square'); ?></h2>
                    <p><?php printf(esc_html__('%1$s is now installed and ready to use. You can start either by importing the ready made demo or get started by customizing it your self.', 'square'), $this->theme_name); ?></p>

                    <div class="square-welcome-info">
                        <div class="square-welcome-thumb">
                            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/screenshot.jpg'); ?>" alt="<?php echo esc_attr__('Square Demo', 'square'); ?>">
                        </div>

                        <?php
                        if ('appearance_page_hdi-demo-importer' !== $screen->id) {
                            ?>
                            <div class="square-welcome-import">
                                <h3><?php esc_html_e('Import Demo', 'square'); ?></h3>
                                <p><?php esc_html_e('Click below to install and active HashThemes Demo Importer Plugin.', 'square'); ?></p>
                                <p><?php echo $this->generate_hdi_install_button(); ?></p>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="square-welcome-getting-started">
                            <h3><?php esc_html_e('Get Started', 'square'); ?></h3>
                            <p><?php printf(esc_html__('Here you will find all the necessary links and information on how to use %s.', 'square'), $this->theme_name); ?></p>
                            <p><a href="<?php echo esc_url(admin_url('admin.php?page=square-welcome')); ?>" class="button button-primary"><?php esc_html_e('Go to Setting Page', 'square'); ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        /** Register Menu for Welcome Page */
        public function welcome_register_menu() {
            add_menu_page(esc_html__('Welcome', 'square'), sprintf(esc_html__('%s Settings', 'square'), esc_html(str_replace(' ', '', $this->theme_name))), 'manage_options', 'square-welcome', array($this, 'welcome_screen'), 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4Ny4xNiA4Ny4xNiIgZmlsbD0iI0ZGRkZGRiI+PGc+PGc+PHBhdGggZD0iTTE5LjEzLDI3LjY0YTguNTQsOC41NCwwLDAsMSw4LjUxLTguNTFINjMuNzhWNC4yNUE0LjI3LDQuMjcsMCwwLDAsNTkuNTIsMEg0LjI1QTQuMjYsNC4yNiwwLDAsMCwwLDQuMjVWNTkuNTJhNC4yNyw0LjI3LDAsMCwwLDQuMjUsNC4yNkgxOS4xM1pNNjgsMjMuMzhIODIuOTFhNC4yNyw0LjI3LDAsMCwxLDQuMjUsNC4yNlY4Mi45MWE0LjI2LDQuMjYsMCwwLDEtNC4yNSw0LjI1SDI3LjY0YTQuMjcsNC4yNywwLDAsMS00LjI2LTQuMjVWNjhINTkuNTJBOC41NCw4LjU0LDAsMCwwLDY4LDU5LjUyWk0yMy4zOCw2My43OFYyNy42NGE0LjI4LDQuMjgsMCwwLDEsNC4yNi00LjI2SDYzLjc4VjU5LjUyYTQuMjgsNC4yOCwwLDAsMS00LjI2LDQuMjZaIi8+PC9nPjwvZz48L3N2Zz4=', 60);
        }

        /** Welcome Page */
        public function welcome_screen() {
            /** Define Tabs Sections */
            $tabs = array(
                'getting_started' => esc_html__('Getting Started', 'square'),
                'recommended_plugins' => esc_html__('Recommended Plugins', 'square'),
                'support' => esc_html__('Support', 'square'),
                'free_vs_pro' => esc_html__('Free Vs Pro', 'square')
            );
            ?>
            <div class="welcome-wrap">
                <div class="welcome-main-content">
                    <?php require_once get_template_directory() . '/welcome/sections/header.php'; ?>

                    <div class="welcome-section-wrapper">
                        <?php $section = isset($_GET['section']) && array_key_exists($_GET['section'], $tabs) ? $_GET['section'] : 'getting_started'; ?>

                        <div class="welcome-section <?php echo esc_attr($section); ?> clearfix">
                            <?php require_once get_template_directory() . '/welcome/sections/' . $section . '.php'; ?>
                        </div>
                    </div>
                </div>

                <div class="welcome-footer-content">
                    <?php require_once get_template_directory() . '/welcome/sections/footer.php'; ?>
                </div>
            </div>
            <?php
        }

        /** Enqueue Necessary Styles and Scripts for the Welcome Page */
        public function welcome_styles_and_scripts($hook) {
            if ('theme-install.php' !== $hook) {
                $importer_params = array(
                    'installing_text' => esc_html__('Installing Demo Importer Plugin', 'square'),
                    'activating_text' => esc_html__('Activating Demo Importer Plugin', 'square'),
                    'importer_page' => esc_html__('Go to Demo Importer Page', 'square'),
                    'importer_url' => admin_url('themes.php?page=hdi-demo-importer'),
                    'error' => esc_html__('Error! Reload the page and try again.', 'square'),
                    'ajax_nonce' => wp_create_nonce('square_activate_hdi_plugin')
                );
                wp_enqueue_script('square-welcome', get_template_directory_uri() . '/welcome/js/welcome.js', array('plugin-install', 'updates'), SQUARE_VERSION, true);
                wp_localize_script('square-welcome', 'importer_params', $importer_params);
            }

            if (is_rtl()) {
                wp_enqueue_style('square-welcome', get_template_directory_uri() . '/welcome/css/welcome.rtl.css', array(), SQUARE_VERSION);
            } else {
                wp_enqueue_style('square-welcome', get_template_directory_uri() . '/welcome/css/welcome.css', array(), SQUARE_VERSION);
            }
        }

        /* Check if plugin is installed */

        public function check_plugin_installed_state($slug, $filename) {
            return file_exists(ABSPATH . 'wp-content/plugins/' . $slug . '/' . $filename . '.php') ? true : false;
        }

        /* Check if plugin is activated */

        public function check_plugin_active_state($slug, $filename) {
            return is_plugin_active($slug . '/' . $filename . '.php') ? true : false;
        }

        /** Generate Url for the Plugin Button */
        public function plugin_generate_url($status, $slug, $file_name) {
            switch ($status) {
                case 'install':
                    return wp_nonce_url(add_query_arg(array(
                        'action' => 'install-plugin',
                        'plugin' => esc_attr($slug)
                    ), network_admin_url('update.php')), 'install-plugin_' . esc_attr($slug));
                    break;

                case 'inactive':
                    return add_query_arg(array(
                        'action' => 'deactivate',
                        'plugin' => rawurlencode(esc_attr($slug) . '/' . esc_attr($file_name) . '.php'),
                        'plugin_status' => 'all',
                        'paged' => '1',
                        '_wpnonce' => wp_create_nonce('deactivate-plugin_' . esc_attr($slug) . '/' . esc_attr($file_name) . '.php'),
                    ), network_admin_url('plugins.php'));
                    break;

                case 'active':
                    return add_query_arg(array(
                        'action' => 'activate',
                        'plugin' => rawurlencode(esc_attr($slug) . '/' . esc_attr($file_name) . '.php'),
                        'plugin_status' => 'all',
                        'paged' => '1',
                        '_wpnonce' => wp_create_nonce('activate-plugin_' . esc_attr($slug) . '/' . esc_attr($file_name) . '.php'),
                    ), network_admin_url('plugins.php'));
                    break;
            }
        }

        /** Ajax Plugin Activation */
        public function activate_plugin() {
            if (!current_user_can('manage_options')) {
                return;
            }

            check_ajax_referer('square_activate_hdi_plugin', 'security');

            $slug = isset($_POST['slug']) ? $_POST['slug'] : '';
            $file = isset($_POST['file']) ? $_POST['file'] : '';
            $success = false;

            if (!empty($slug) && !empty($file)) {
                $result = activate_plugin($slug . '/' . $file . '.php');
                update_option('square_hide_notice', true);
                if (!is_wp_error($result)) {
                    $success = true;
                }
            }
            echo wp_json_encode(array('success' => $success));
            die();
        }

        /** Adds Footer Notes */
        public function admin_footer_text($text) {
            $screen = get_current_screen();

            if ('toplevel_page_square-welcome' == $screen->id) {
                $text = sprintf(esc_html__('Please leave us a %s rating if you like our theme . A huge thank you from HashThemes in advance!', 'square'), '<a href="https://wordpress.org/support/theme/square/reviews/?filter=5#new-post" target="_blank">&#9733;&#9733;&#9733;&#9733;&#9733;</a>');
            }

            return $text;
        }

        /** Generate HashThemes Demo Importer Install Button Link */
        public function generate_hdi_install_button() {
            $slug = $filename = 'hashthemes-demo-importer';
            $import_url = '#';

            if ($this->check_plugin_installed_state($slug, $filename) && !$this->check_plugin_active_state($slug, $filename)) {
                $import_class = 'button button-primary square-activate-plugin';
                $import_button_text = esc_html__('Activate Demo Importer Plugin', 'square');
            } elseif ($this->check_plugin_installed_state($slug, $filename)) {
                $import_class = 'button button-primary';
                $import_button_text = esc_html__('Go to Demo Importer Page', 'square');
                $import_url = admin_url('themes.php?page=hdi-demo-importer');
            } else {
                $import_class = 'button button-primary square-install-plugin';
                $import_button_text = esc_html__('Install Demo Importer Plugin', 'square');
            }
            return '<a data-slug="' . esc_attr($slug) . '" data-filename="' . esc_attr($filename) . '" class="' . esc_attr($import_class) . '" href="' . $import_url . '">' . esc_html($import_button_text) . '</a>';
        }

        public function erase_hide_notice() {
            delete_option('square_dismissed_notices');
            delete_option('square_first_activation');
        }

        /**
         * Handle a click on the dismiss button
         *
         * @return void
         */
        public function welcome_init() {
            if (!get_option('square_first_activation')) {
                update_option('square_first_activation', time());
            }
            
            if (get_option('square_hide_notice') && !$this->is_dismissed('welcome')) {
                delete_option('square_hide_notice');
                self::dismiss('welcome');
            }

            if (isset($_GET['square-hide-notice'], $_GET['square_notice_nonce'])) {
                $notice = sanitize_key($_GET['square-hide-notice']);
                check_admin_referer($notice, 'square_notice_nonce');
                self::dismiss($notice);
                wp_safe_redirect(remove_query_arg(array('square-hide-notice', 'square_notice_nonce'), wp_get_referer()));
                exit;
            }
        }

        /**
         * Displays a notice asking for a review
         *
         * @return void
         */
        private function review_notice() {
            ?>
            <div class="square-notice notice notice-info">
                <?php $this->dismiss_button('review'); ?>

                <div class="square-notice-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87.16 87.16" fill="#FFFFFF">
                        <g>
                            <g>
                                <path d="M19.13,27.64a8.54,8.54,0,0,1,8.51-8.51H63.78V4.25A4.27,4.27,0,0,0,59.52,0H4.25A4.26,4.26,0,0,0,0,4.25V59.52a4.27,4.27,0,0,0,4.25,4.26H19.13ZM68,23.38H82.91a4.27,4.27,0,0,1,4.25,4.26V82.91a4.26,4.26,0,0,1-4.25,4.25H27.64a4.27,4.27,0,0,1-4.26-4.25V68H59.52A8.54,8.54,0,0,0,68,59.52ZM23.38,63.78V27.64a4.28,4.28,0,0,1,4.26-4.26H63.78V59.52a4.28,4.28,0,0,1-4.26,4.26Z" />
                            </g>
                        </g>
                    </svg>
                </div>

                <div class="square-notice-content">
                    <p>
                    <?php
                        printf(
                            /* translators: %1$s is link start tag, %2$s is link end tag. */
                            esc_html__('Great to see that you have been using Square Theme for some time. We hope you love it, and we would really appreciate it if you would %1$sgive us a %3$s rating%2$s. Your valuable review will inspire us to make it more better.', 'square'), '<a style="text-decoration:none;font-weight:bold;" target="_blank" href="https://wordpress.org/support/theme/square/reviews/?filter=5#new-post">', '</a>', '<span class="square-notice-star"><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span></span>'
                        );
                        ?>
                    </p>
                    <a target="_blank" class="button button-primary button-large" href="https://wordpress.org/support/theme/square/reviews/?filter=5#new-post"><span class="dashicons dashicons-thumbs-up"></span><?php echo esc_html__('Yes, of course', 'square') ?></a> &nbsp;
                    <a class="button button-large" href="<?php echo esc_url(wp_nonce_url(add_query_arg('square-hide-notice', 'review'), 'review', 'square_notice_nonce')); ?>"><span class="dashicons dashicons-yes"></span><?php echo esc_html__('I have already rated', 'square') ?></a>
                </div>
            </div>
            <?php
        }

        /**
         * Has a notice been dismissed?
         *
         * @param string $notice Notice name
         * @return bool
         */
        public static function is_dismissed($notice) {
            $dismissed = get_option('square_dismissed_notices', array());

            // Handle legacy user meta
            $dismissed_meta = get_user_meta(get_current_user_id(), 'square_dismissed_notices', true);
            if (is_array($dismissed_meta)) {
                if (array_diff($dismissed_meta, $dismissed)) {
                    $dismissed = array_merge($dismissed, $dismissed_meta);
                    update_option('square_dismissed_notices', $dismissed);
                }
                if (!is_multisite()) {
                    // Don't delete on multisite to avoid the notices to appear in other sites.
                    delete_user_meta(get_current_user_id(), 'square_dismissed_notices');
                }
            }

            return in_array($notice, $dismissed);
        }

        /**
         * Displays a dismiss button
         *
         * @param string $name Notice name
         * @return void
         */
        public function dismiss_button($name) {
            printf('<a class="notice-dismiss" href="%s"><span class="screen-reader-text">%s</span></a>', esc_url(wp_nonce_url(add_query_arg('square-hide-notice', $name), $name, 'square_notice_nonce')), esc_html__('Dismiss this notice.', 'square')
            );
        }

        /**
         * Stores a dismissed notice in database
         *
         * @param string $notice
         * @return void
         */
        public static function dismiss($notice) {
            $dismissed = get_option('square_dismissed_notices', array());

            if (!in_array($notice, $dismissed)) {
                $dismissed[] = $notice;
                update_option('square_dismissed_notices', array_unique($dismissed));
            }
        }

    }

    new Square_Welcome();

endif;
