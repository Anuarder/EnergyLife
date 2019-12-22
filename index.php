<?php get_header(); ?>
<div class="page-wrapper" id="app" @mouseover="tweenShapes">
    <?php include(get_template_directory() . '/components/shapes.php') ?>
    <header class="header">
        <?php include(get_template_directory() . '/components/navigation.php') ?>
        <?php include(get_template_directory() . '/components/header.php') ?>
    </header>
    <main class="main">
        <?php include(get_template_directory() . '/components/result_counter.php') ?>
        <?php include(get_template_directory() . '/components/ems_about.php') ?>
        <?php include(get_template_directory() . '/components/ems_plus.php') ?>
        <?php include(get_template_directory() . '/components/ems_types.php') ?>
        <?php include(get_template_directory() . '/components/ems_test.php') ?>
        <?php include(get_template_directory() . '/components/ems_reviews.php') ?>
        <?php include(get_template_directory() . '/components/ems_test2.php') ?>
        <?php include(get_template_directory() . '/components/ems_food.php') ?>
        <?php include(get_template_directory() . '/components/ems_questions.php') ?>
        <?php include(get_template_directory() . '/components/ems_franchise.php') ?>
        <?php include(get_template_directory() . '/components/ems_contacts.php') ?>
    </main>
    <?php include(get_template_directory() . '/components/footer.php') ?>
</div>
<?php get_footer(); ?>