<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>

    <!-- news-single -->
    <section class="news-single wow fadeInUp">
        <h2 class="title">NEWS</h2>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <div class="container">
                    <div class="news-single-body">
                        <?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば大サイズで表示
                            the_post_thumbnail('large');
                        } else {
                            // なければnoimage画像をデフォルトで表示
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/maha-ba-rata.png" alt="maha-ba-rata">';
                        }
                        ?>
                        <div class="news-single-info">
                            <p class="news-single-date"><?php the_time('Y.m.d'); ?></p>
                            <p class="news-single-title"><?php the_title(); ?></p>
                        </div>
                        <div class="news-single-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>

        <div class="container paging">
            <?php
            $previous_post = get_previous_post(true);
            $previous_id = $previous_post->ID;
            $previous_date = mysql2date('Y.m.d', $previous_post->post_date);
            $next_post = get_next_post(true);
            $next_id = $next_post->ID;
            $next_date = mysql2date('Y.m.d', $next_post->post_date);
            ?>
            <div>
            <?php if (get_previous_post()) : ?>
                <!-- 前の記事がある場合にリンクを表示 -->
                <div class="prev">
                    <p><?php previous_post_link('%link', '%date', TRUE); ?></p>
                    <p><?php previous_post_link('%link', '%title', TRUE); ?></p>
                </div>
            <?php endif; ?>
            </div>
            <div>
            <?php if (get_next_post()) : ?>
                <!-- 次の記事がある場合にリンクを表示 -->
                <div class="next">
                    <p><?php next_post_link('%link', '%date', TRUE); ?></p>
                    <p><?php next_post_link('%link', '%title', TRUE); ?></p>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- /news-single -->

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>

</body>

</html>