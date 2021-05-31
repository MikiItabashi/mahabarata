<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>

    <!-- comments-page -->
    <section class="comments-page wow fadeInUp">
        <!-- comments -->
        <section class="comments-archive">
            <div class="container">
                <?php get_template_part('template_parts/comments-top'); ?>
            </div>
        </section>
        <!-- /comments -->

        <?php if (have_posts()) : ?>
            <div class="container">
                <div class="comments-page-items">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="comments-page-item">
                            <p class="comments-page-name"><?php the_field('name'); ?></p>
                            <p class="comments-page-title"><?php the_field('title'); ?></p>
                            <p class="comments-page-text"><?php the_field('comment'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        <?php else : ?>
            <p>記事が見つかりませんでした</p>
        <?php endif; ?>

    </section>
    <!-- /comments-page -->

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>
</body>

</html>