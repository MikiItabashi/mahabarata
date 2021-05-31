<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>

    <p class="message-404">ページが見つかりませんでした</p>

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>

</body>

</html>