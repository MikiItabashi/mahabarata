<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>

    <!-- news -->
    <section class="news wow fadeInUp">
        <div class="container">
            <h2 class="title news-title">NEWS</h2>
            <div class="news-block1">
                <?php
                global $post;
                $args = array(
                    'posts_per_page' => 9,
                    'post_type' => 'post',
                    'paged' => $paged,
                );
                $myposts = new WP_Query($args);
                if ($myposts->have_posts()) :
                    while ($myposts->have_posts()) : $myposts->the_post();
                        // foreach ($myposts as $post) :
                        //     setup_postdata($post);
                ?>
                        <a href="<?php the_permalink(); ?>" class="news-block1-item">
                            <?php
                            if (has_post_thumbnail()) {
                                // アイキャッチ画像が設定されてれば大サイズで表示
                                the_post_thumbnail('large');
                            } else {
                                // なければnoimage画像をデフォルトで表示
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/maha-ba-rata.png" alt="maha-ba-rata">';
                            }
                            ?>
                            <div class="news-block1-body">
                                <p class="news-date"><?php the_time('Y.m.d'); ?></p>
                                <p class="news-title"><?php the_title(); ?></p>
                            </div>
                        </a>
                <?php
                    endwhile;
                    // endforeach;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            <!-- ページナビ -->
            <?php if (function_exists('wp_pagenavi')) :
                wp_pagenavi(array('query' => $myposts));
            endif;
            ?>

        </div>
    </section>
    <!-- /news -->

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>
</body>

</html>