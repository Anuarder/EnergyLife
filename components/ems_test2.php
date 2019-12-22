<?php if(get_theme_mod('ems-test2-display') == 'YES') {?>

<div 
    class="ems-test ems-test2"  
    style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-test2-background')) ?>')">
    <div class="ems-test__container ems-test2__container container">
        <h1 class="wow fadeInLeft">
            <?php echo get_theme_mod('ems-test2-title') ?>
        </h1>
        <div class="ems-test2__text">
            <a 
                href="<?php echo get_theme_mod('ems-test2-button-link') ?>"
                target="blank" role="button" class="wow pulse link-button">
                <?php echo get_theme_mod('ems-test2-button') ?>
            </a>
        </div>
    </div>
</div>

<?php }?>
