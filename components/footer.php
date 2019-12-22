<?php if(get_theme_mod('ems-footer-display') == 'YES') {?>

<footer class="footer">
    <div class="wow fadeIn footer__container container">
        <div class="footer__logo">
            <a href="#home" class="anchor">
                <img 
                    src="<?php echo wp_get_attachment_url(get_theme_mod('ems-footer-logo')) ?>"
                    alt="logo">
            </a>
        </div>
        <div class="footer__socials">
            <a href="<?php echo get_theme_mod('ems-footer-youtube-link') ?>" target="blank">
                <img src="<?php bloginfo('template_directory') ?>/images/footer/youtube.svg" alt="youtube">
            </a>
            <a href="<?php echo get_theme_mod('ems-footer-instagram-link') ?>" target="blank">
                <img src="<?php bloginfo('template_directory') ?>/images/footer/instagram.svg" alt="instagram">
            </a>
            <a href="<?php echo get_theme_mod('ems-footer-facebook-link') ?>" target="blank">
                <img src="<?php bloginfo('template_directory') ?>/images/footer/facebook.svg" alt="facebook">
            </a>
        </div>
        <div class="footer__button">
            <a href="tel:+7 (775) 232 44 88" role="button">
                Позвонить
            </a>
        </div>
    </div>
</footer>


<?php }?>
