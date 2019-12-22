<?php if(get_theme_mod('ems-shapes-display') == 'YES') {?>

<img 
    class="triangle1 shape" 
    id="shape1" 
    src="<?php echo wp_get_attachment_url(get_theme_mod('ems-shapes-image1')) ?>"
    alt="triangle1">
<img 
    class="triangle2 shape" 
    id="shape2" 
    src="<?php echo wp_get_attachment_url(get_theme_mod('ems-shapes-image2')) ?>"
    alt="triangle2">
<img 
    class="triangle3 shape" 
    id="shape3" 
    src="<?php echo wp_get_attachment_url(get_theme_mod('ems-shapes-image3')) ?>"
    alt="triangle2">
<img 
    class="circle shape" 
    id="shape4" 
    src="<?php echo wp_get_attachment_url(get_theme_mod('ems-shapes-image4')) ?>" 
    alt="circle">
<img    
    class="triangle4 shape" 
    id="shape5" 
    src="<?php echo wp_get_attachment_url(get_theme_mod('ems-shapes-image5')) ?>"
    alt="triangle1">
<div class="top-button">
    <a class="top-button-container anchor" href="#home">
        <img 
            src="<?php bloginfo('template_directory') ?>/images/top-button.svg" 
            alt="top">
        <span>Наверх</span>
    </a>
</div>

<?php }?>