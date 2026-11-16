<?php
$square_steps = $this->setup_steps();
$square_done = count(wp_list_filter($square_steps, array('done' => true)));
$square_percent = round(100 * $square_done / count($square_steps));
?>
<div class="welcome-grid welcome-grid-start">
    <div class="welcome-card welcome-setup-checklist">
        <div class="welcome-setup-head">
            <div class="welcome-ring" style="--welcome-progress:<?php echo absint($square_percent); ?>" role="progressbar" aria-valuemin="0" aria-valuemax="<?php echo count($square_steps); ?>" aria-valuenow="<?php echo absint($square_done); ?>" aria-label="<?php esc_attr_e('Setup progress', 'square'); ?>">
                <span><?php echo absint($square_percent); ?>%</span>
            </div>
            <div>
                <h3><?php esc_html_e('Set Up Your Website', 'square'); ?></h3>
                <p class="welcome-setup-count"><?php /* translators: 1: steps done, 2: all steps */ printf(esc_html__('%1$d of %2$d done', 'square'), $square_done, count($square_steps)); ?></p>
            </div>
        </div>

        <ol class="welcome-setup-steps">
            <?php foreach ($square_steps as $square_step) { ?>
                <li class="<?php echo $square_step['done'] ? 'is-done' : 'is-todo'; ?>">
                    <span class="welcome-setup-mark dashicons <?php echo $square_step['done'] ? 'dashicons-yes' : ''; ?>" aria-hidden="true"></span>
                    <div class="welcome-setup-text">
                        <strong><?php echo esc_html($square_step['title']); ?></strong>
                        <span class="screen-reader-text"><?php echo $square_step['done'] ? esc_html__('(done)', 'square') : esc_html__('(to do)', 'square'); ?></span>
                        <p><?php echo esc_html($square_step['text']); ?></p>
                    </div>
                    <?php
                    if ($square_step['url']) {
                        echo '<a class="button' . ($square_step['done'] ? '' : ' button-primary') . '" href="' . esc_url($square_step['url']) . '">' . ($square_step['done'] ? esc_html__('Change', 'square') : esc_html__('Set up', 'square')) . '</a>';
                    } elseif (!$square_step['done']) {
                        echo $this->generate_hdi_install_button();
                    }
                    ?>
                </li>
            <?php } ?>
        </ol>
    </div>

    <div class="welcome-card welcome-demo-import">
        <div class="welcome-demo-thumb">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/screenshot.jpg'); ?>" alt="<?php /* translators: %s: theme name */ printf(esc_attr__('%s Demo', 'square'), $this->theme_name); ?>">
            <a href="https://demo.hashthemes.com/square/" target="_blank" class="welcome-demo-view"><span class="dashicons dashicons-external" aria-hidden="true"></span><?php esc_html_e('View Demo', 'square'); ?></a>
        </div>
        <div class="welcome-card-body">
            <h3><?php esc_html_e('Start From a Demo', 'square'); ?></h3>
            <p><?php esc_html_e('Import a complete demo website, with its content and settings, in a single click, then replace the content with your own.', 'square'); ?></p>
            <?php echo $this->generate_hdi_install_button(); ?>
            <p class="welcome-small"><a href="https://hashthemes.com/documentation/square-documentation/#ImportDemoContent" target="_blank"><?php esc_html_e('How the demo importer works', 'square'); ?></a></p>
        </div>
    </div>
</div>

<div class="welcome-block">
    <div class="welcome-block-head">
        <h3><?php esc_html_e('Customize Your Site', 'square'); ?></h3>
        <a href="<?php echo esc_url(admin_url('customize.php')); ?>"><?php esc_html_e('Open the Customizer', 'square'); ?> <span aria-hidden="true">&rarr;</span></a>
    </div>
    <div class="welcome-quick-links">
        <?php foreach ($this->quick_links() as $square_link) { ?>
            <a class="welcome-quick-link" href="<?php echo esc_url($square_link['url']); ?>">
                <span class="dashicons <?php echo esc_attr($square_link['icon']); ?>" aria-hidden="true"></span>
                <?php echo esc_html($square_link['label']); ?>
            </a>
        <?php } ?>
    </div>
</div>

<div class="welcome-block">
    <div class="welcome-block-head">
        <h3><?php esc_html_e('Build Your Home Page', 'square'); ?></h3>
        <a href="https://hashthemes.com/documentation/square-documentation/#HomePageSetup" target="_blank"><?php esc_html_e('Step-by-step guide', 'square'); ?> <span aria-hidden="true">&rarr;</span></a>
    </div>
    <p class="welcome-block-intro"><?php echo esc_html__('Build the home page from the theme\'s ready-made sections in the Customizer, or design it freely with Elementor.', 'square'); ?></p>

    <div class="welcome-grid welcome-grid-2">
        <div class="welcome-card welcome-method">
            <span class="welcome-method-icon dashicons dashicons-admin-customizer" aria-hidden="true"></span>
            <h4><?php esc_html_e('With the Customizer', 'square'); ?></h4>
            <ol>
                <li><?php echo sprintf(esc_html__('Go to Appearance > Customize > %s.', 'square'), '<a href="' . esc_url(admin_url('customize.php?autofocus[section]=static_front_page')) . '">' . esc_html__('Homepage Settings', 'square') . '</a>'); ?></li>
                <li><?php echo esc_html__('Turn on "Enable Home Sections".', 'square'); ?></li>
                <li><?php echo esc_html__('Go back, open "Home Page Sections" and fill in the sections you want to show.', 'square'); ?></li>
            </ol>
        </div>

        <div class="welcome-card welcome-method">
            <span class="welcome-method-icon dashicons dashicons-layout" aria-hidden="true"></span>
            <h4><?php esc_html_e('With Elementor', 'square'); ?></h4>
            <ol>
                <li><?php printf(esc_html__('Install and activate Elementor and Hash Elements from the %s.', 'square'), '<a href="' . esc_url(admin_url('admin.php?page=square-welcome&section=recommended_plugins')) . '">' . esc_html__('Recommended Plugins tab', 'square') . '</a>'); ?></li>
                <li><?php echo esc_html__('Create a new page, edit it with Elementor and drag in the widgets to design your home page.', 'square'); ?></li>
                <li><?php echo sprintf(esc_html__('In Appearance > Customize > %s, choose "A static page", select your new page as the Homepage and turn off "Enable Home Sections".', 'square'), '<a href="' . esc_url(admin_url('customize.php?autofocus[section]=static_front_page')) . '">' . esc_html__('Homepage Settings', 'square') . '</a>'); ?></li>
            </ol>
        </div>
    </div>
</div>
