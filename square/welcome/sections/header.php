<div class="welcome-header clearfix">
<?php
/*
 *  Seasonal sale banner.
 *
 *  This used to be a commented-out block that had to be uncommented each
 *  November and remembered again in January. It now opens and closes on the
 *  same campaign window as the customizer banner.
 */
$square_header_campaign = square_get_active_campaign();

if ($square_header_campaign && !empty($square_header_campaign['image'])) {
    ?>
    <a class="welcome-sale-banner" target="_blank" href="<?php echo esc_url(square_upgrade_url('welcome-banner-' . $square_header_campaign['id'], 'square-welcome-banner')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/' . $square_header_campaign['image']); ?>" alt="<?php echo esc_attr($square_header_campaign['title']); ?>">
    </a>
    <?php
}
?>
    <div class="welcome-intro">
        <h2><?php
        printf(// WPCS: XSS OK.
            /* translators: 1-theme name, 2-theme version */
            esc_html__('Welcome to %1$s - Version %2$s', 'square'), $this->theme_name, $this->theme_version);
        ?></h2>
        <div class="welcome-text">
            <?php
            printf(// WPCS: XSS OK.
                /* translators: 1-theme name */
                esc_html__('Welcome to %1$s - Thank You for Installing! Getting started with %1$s is quick and simple. Here, you\'ll find all the essential information you need to set up and begin using the theme with ease. And if you\'d like to unlock even more features and flexibility, you can always upgrade to the Premium version.', 'square'), $this->theme_name);
            ?>
        </div>

        <div class="free-pro-demos">
            <a class="button button-primary" href="https://demo.hashthemes.com/<?php echo get_option('stylesheet'); ?>/" target="_blank"><span class="dashicons dashicons-visibility"></span><?php esc_html_e('Free Demos', 'square'); ?></a>
            <a class="button button-primary" href="https://demo.hashthemes.com/square-plus/" target="_blank"><span class="dashicons dashicons-cart"></span><?php esc_html_e('Premium Demos', 'square'); ?></a>
        </div>
    </div>

    <div class="welcome-promo-banner">
        <a class="welcome-promo-offer" href="<?php echo esc_url(square_upgrade_url('welcome-promo-offer', 'square-welcome')); ?>" target="_blank"><?php echo esc_html__('Unlock all the possibilities with Square Plus.', 'square'); ?></a>
        <ul class="welcome-promo-points">
            <li><span class="dashicons dashicons-yes"></span><?php echo esc_html__('One time payment, no renewals', 'square'); ?></li>
            <li><span class="dashicons dashicons-yes"></span><?php echo esc_html__('Use on unlimited websites', 'square'); ?></li>
            <li><span class="dashicons dashicons-yes"></span><?php echo esc_html__('Lifetime updates included', 'square'); ?></li>
        </ul>

        <a href="<?php echo esc_url(square_upgrade_url('welcome-promo-button', 'square-welcome')); ?>" target="_blank" class="button button-primary upgrade-btn"><?php echo esc_html__('UPGRADE TO PRO', 'square'); ?></a>
    </div>
</div>

<div class="welcome-nav-wrapper clearfix">
    <?php foreach ($tabs as $section_id => $label): ?>
        <?php
        $section = isset($_GET['section']) && array_key_exists($_GET['section'], $tabs) ? $_GET['section'] : 'getting_started';
        $nav_class = 'welcome-nav-tab';
        if ($section_id == $section) {
            $nav_class .= ' welcome-nav-tab-active';
        }
        ?>
        <a href="<?php echo esc_url(admin_url('admin.php?page=square-welcome&section=' . $section_id)); ?>" class="<?php echo esc_attr($nav_class); ?>">
            <?php echo esc_html($label); ?>
        </a>
    <?php endforeach; ?>
</div>