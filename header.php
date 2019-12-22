<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/images/favicon.png" type="image/png">
    <title>EnergyLife</title>
    <?php wp_head(); ?>
    <style>
        @media (max-width: 1100px) {
            .ems-plus__content {
                background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('ems-plus-girl-opacity')) ?>');
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
            }
        }
    </style>
</head>
<body>