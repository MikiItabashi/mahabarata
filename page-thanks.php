<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>

    <!-- thanks -->
    <section class="inquiry wow fadeInUp">
        <h2 class="title">INQUIRY</h2>
        <div class="container">
            <div class="inquiry-box thanks">
                   <?php the_content(); ?>
            </div>
        </div>
    </section>
    <!-- /thanks -->

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>
</body>

</html>