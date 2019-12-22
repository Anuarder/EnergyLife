<?php if(get_theme_mod('ems-navigation-display') == 'YES') {?>

<nav class="wow pulse navigation">
    <div class="navigation__container container d-flex-between">
        <div class="navigation__logo">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-navigation-image')) ?>" alt="logo">
        </div>
        <div class="navigation__links">
            <a class="anchor" href="#about">
                <?php echo get_theme_mod('ems-navigation-link2') ?>
            </a>
            <a class="anchor" href="#types">
                <?php echo get_theme_mod('ems-navigation-link3') ?>
            </a>
            <a class="anchor" href="#franchise">
                <?php echo get_theme_mod('ems-navigation-link4') ?>
            </a>
            <a class="anchor" href="#reviews">
                <?php echo get_theme_mod('ems-navigation-link5') ?>
            </a>
            <a class="anchor" href="#contacts">
                <?php echo get_theme_mod('ems-navigation-link6') ?>
            </a>
        </div>
        <div class="navigation__contacts">
            <a href="tel:<?php echo get_theme_mod('ems-navigation-phone') ?>">
                <?php echo get_theme_mod('ems-navigation-phone') ?>
            </a>
        </div>
        <div class="navigation__sidebar-btn in-mobile">
            <img src="<?php bloginfo('template_directory') ?>/images/sidebar.svg" alt="sidebar">
        </div>
    </div>
</nav>
<div class="sidebar">
    <div class="sidebar-header">
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ems-navigation-image')) ?>" alt="logo">
        <img class="sidebar-close" src="<?php bloginfo('template_directory') ?>/images/close.png" alt="close">
    </div>
    <div class="sidebar-body">
        <div class="sidebar-links">
            <a class="sidebar-link anchor" href="#home">
                <span>01.</span>
                <?php echo get_theme_mod('ems-navigation-link1') ?>
            </a>
            <a class="sidebar-link anchor" href="#about">
                <span>02.</span>
                <?php echo get_theme_mod('ems-navigation-link2') ?>
            </a>
            <a class="sidebar-link anchor" href="#types">
                <span>03.</span>
                <?php echo get_theme_mod('ems-navigation-link3') ?>
            </a>
            <a class="sidebar-link anchor" href="#franchise">
                <span>04.</span>
                <?php echo get_theme_mod('ems-navigation-link4') ?>
            </a>
            <a class="sidebar-link anchor" href="#reviews">
                <span>05.</span>
                <?php echo get_theme_mod('ems-navigation-link5') ?>
            </a>
            <a class="sidebar-link anchor" href="#contacts">
                <span>06.</span>
                <?php echo get_theme_mod('ems-navigation-link6') ?>
            </a>
        </div>
        <div class="sidebar-contacts">
            <hr>
            <a href="tel:<?php echo get_theme_mod('ems-navigation-phone') ?>">
                <?php echo get_theme_mod('ems-navigation-phone') ?>
            </a>
        </div>
    </div>
</div>

<?php }?>