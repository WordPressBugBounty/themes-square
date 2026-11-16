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
<div class="welcome-hero">
    <div class="welcome-hero-main">
        <div class="welcome-brand">
            <svg class="welcome-brand-mark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87.16 87.16" aria-hidden="true"><path d="M19.13,27.64a8.54,8.54,0,0,1,8.51-8.51H63.78V4.25A4.27,4.27,0,0,0,59.52,0H4.25A4.26,4.26,0,0,0,0,4.25V59.52a4.27,4.27,0,0,0,4.25,4.26H19.13ZM68,23.38H82.91a4.27,4.27,0,0,1,4.25,4.26V82.91a4.26,4.26,0,0,1-4.25,4.25H27.64a4.27,4.27,0,0,1-4.26-4.25V68H59.52A8.54,8.54,0,0,0,68,59.52ZM23.38,63.78V27.64a4.28,4.28,0,0,1,4.26-4.26H63.78V59.52a4.28,4.28,0,0,1-4.26,4.26Z"/></svg>
            <span class="welcome-version">
                <?php
                /* translators: %s: theme version */
                printf(esc_html__('Version %s', 'square'), esc_html($this->theme_version));
                ?>
            </span>
        </div>

        <h1>
            <?php
            /* translators: %s: theme name */
            printf(esc_html__('Welcome to %s', 'square'), esc_html($this->theme_name));
            ?>
        </h1>
        <p class="welcome-hero-text">
            <?php
            /* translators: %s: theme name */
            printf(esc_html__('Thank you for choosing %s. Everything you need to set up your website is on this page: a setup checklist, shortcuts into the Customizer, recommended plugins and help when you need it.', 'square'), esc_html($this->theme_name));
            ?>
        </p>

        <div class="welcome-hero-actions">
            <a class="welcome-btn welcome-btn-light" href="<?php echo esc_url(admin_url('customize.php')); ?>"><span class="dashicons dashicons-admin-customizer" aria-hidden="true"></span><?php esc_html_e('Customize Your Site', 'square'); ?></a>
            <a class="welcome-btn welcome-btn-ghost" href="https://demo.hashthemes.com/square/" target="_blank"><span class="dashicons dashicons-visibility" aria-hidden="true"></span><?php esc_html_e('Free Demos', 'square'); ?></a>
            <a class="welcome-btn welcome-btn-ghost" href="https://demo.hashthemes.com/square-plus/" target="_blank"><span class="dashicons dashicons-cart" aria-hidden="true"></span><?php esc_html_e('Premium Demos', 'square'); ?></a>
        </div>
    </div>

    <div class="welcome-pro-card">
        <div class="welcome-pro-top">
            <span class="welcome-pro-badge"><span class="dashicons dashicons-star-filled" aria-hidden="true"></span>Square Plus</span>
            <p class="welcome-pro-price"><strong>$65</strong> <span><?php esc_html_e('one-time', 'square'); ?></span></p>
        </div>

        <ul class="welcome-pro-points">
            <li><span class="dashicons dashicons-yes" aria-hidden="true"></span><?php esc_html_e('One time payment, no renewals', 'square'); ?></li>
            <li><span class="dashicons dashicons-yes" aria-hidden="true"></span><?php esc_html_e('Use on unlimited websites', 'square'); ?></li>
            <li><span class="dashicons dashicons-yes" aria-hidden="true"></span><?php esc_html_e('Lifetime updates included', 'square'); ?></li>
        </ul>

        <a href="<?php echo esc_url(square_upgrade_url('welcome-promo-button', 'square-welcome')); ?>" target="_blank" class="welcome-btn welcome-btn-pro"><?php esc_html_e('Upgrade to Pro', 'square'); ?><span class="dashicons dashicons-arrow-right-alt" aria-hidden="true"></span></a>
    </div>
</div>

<nav class="welcome-nav" aria-label="<?php esc_attr_e('Settings sections', 'square'); ?>">
    <?php foreach ($tabs as $section_id => $tab) { ?>
        <a href="<?php echo esc_url(admin_url('admin.php?page=square-welcome&section=' . $section_id)); ?>" class="welcome-nav-tab<?php echo $section_id === $section ? ' is-active' : ''; ?>"<?php echo $section_id === $section ? ' aria-current="page"' : ''; ?>>
            <span class="dashicons <?php echo esc_attr($tab[1]); ?>" aria-hidden="true"></span><?php echo esc_html($tab[0]); ?>
        </a>
    <?php } ?>
</nav>
