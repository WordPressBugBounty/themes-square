<?php
$square_pro_demos = array(
    array('Main Demo', 'main-demo.jpg', 'https://demo.hashthemes.com/square-plus/main-demo/'),
    array('Original', 'original.jpg', 'https://demo.hashthemes.com/square-plus/original/'),
    array('Business', 'business.jpg', 'https://demo.hashthemes.com/square-plus/business/'),
    array('Fitness', 'fitness.jpg', 'https://demo.hashthemes.com/square-plus/gym/'),
);
?>
<div class="welcome-pro-demos">
    <div class="welcome-pro-demos-head">
        <span class="welcome-kicker"><?php esc_html_e('Premium Demos', 'square'); ?></span>
        <h3><?php esc_html_e('Launch Faster with a Square Plus Demo', 'square'); ?></h3>
        <p><?php esc_html_e('Square Plus comes with professionally designed demos, each in a Customizer and an Elementor version. Import one in a single click and have a complete website ready in minutes.', 'square'); ?></p>
    </div>

    <div class="welcome-demo-grid">
        <?php foreach ($square_pro_demos as $square_demo) { ?>
            <a class="welcome-demo" href="<?php echo esc_url($square_demo[2]); ?>" target="_blank">
                <span class="welcome-demo-shot">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/welcome/css/' . $square_demo[1]); ?>" alt="" loading="lazy">
                </span>
                <span class="welcome-demo-name">
                    <?php echo esc_html($square_demo[0]); ?>
                    <span class="welcome-demo-preview"><?php echo esc_html__('Preview', 'square'); ?> <span aria-hidden="true">&rarr;</span></span>
                </span>
            </a>
        <?php } ?>
    </div>
</div>

<div class="welcome-upgrade-box">
    <div class="welcome-guarantee" aria-hidden="true">
        <strong>7</strong>
        <span><?php esc_html_e('Day money back', 'square'); ?></span>
    </div>
    <div class="upgrade-box-text">
        <h3><?php echo esc_html__('Upgrade to Square Plus, Risk Free', 'square'); ?></h3>
        <p><?php echo esc_html__('Square Plus adds 19 home page sections with multiple styles, section reordering, video and parallax backgrounds, 6 header layouts, a mega menu, 4 blog layouts, 15 custom widgets and 4 more one-click demos.', 'square'); ?></p>
        <p><?php echo esc_html__('Try it with peace of mind: if it is not right for you, ask within 7 days and we will refund your payment.', 'square'); ?></p>
    </div>
    <a class="welcome-btn welcome-btn-pro" href="<?php echo esc_url(square_upgrade_url('welcome-footer', 'square-footer')); ?>" target="_blank"><?php esc_html_e('Upgrade Now', 'square'); ?><span class="dashicons dashicons-arrow-right-alt" aria-hidden="true"></span></a>
</div>
