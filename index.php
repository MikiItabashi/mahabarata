<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>

    <!-- introduction -->
    <section class="introduction wow fadeInUp">
        <div class="container">
            <div class="introduction-box">
                <h2 class="introduction-title title">INTRODUCTION</h2>
                <p class="introduction-lead">なぜ今「マハーバーラタ」なのか？</p>
                <div class="introduction-text">
                    <p class="introduction-left">「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？ それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。 平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</p>
                    <p class="introduction-right">現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。 神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。 非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /introduction -->

    <!-- news -->
    <section class="news wow fadeInUp">
        <div class="container news-container">
            <h2 class="title news-title">NEWS</h2>
            <a href="news" class="button button-light small news-button">
                ニュース一覧へ
            </a>
            <div class="news-block1">
                <?php
                if (have_posts()) :
                    $count = 0;
                    while (have_posts() && $count < 3) : the_post();
                        $count++;
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
                                <p class="news-head"><?php the_title(); ?></p>
                            </div>
                        </a>

                    <?php endwhile; ?>
            </div>
            <div class="news-block2">
                <?php
                    while (have_posts() && $count >= 3 && $count < 5) : the_post();
                        $count++;
                ?>
                    <a href="<?php the_permalink(); ?>" class="news-block2-item">
                        <?php
                        if (has_post_thumbnail()) {
                            // アイキャッチ画像が設定されてれば大サイズで表示
                            the_post_thumbnail('large');
                        } else {
                            // なければnoimage画像をデフォルトで表示
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/maha-ba-rata.png" alt="maha-ba-rata">';
                        }
                        ?>
                        <div class="news-block2-body">
                            <p class="news-date"><?php the_time('Y.m.d'); ?></p>
                            <p class="news-head"> <?php the_title(); ?></p>
                        </div>
                    </a>
            <?php
                    endwhile;
                endif;
            ?>
            </div>
        </div>
    </section>
    <!-- /news -->

    <!-- story -->
    <?php
    $field_group = SCF::get('story', 149);
    $field_group = array_slice($field_group, 0, 1);
    foreach ($field_group as $field) {
        $img = wp_get_attachment_image_src($field['story_img'], 'large');
    ?>
        <section class="story wow fadeInUp" style="background-image: url('<?php echo $img[0]; ?>')">
            <div class="container">
                <h2 class="title">STORY</h2>
                <div class="story-body">
                    <p class="story-text"><?php echo $field['story_text']; ?></p>
                    <a href="story" class="button button-light small story-button">もっと詳しく</a>
                </div>
            </div>
        </section>
    <?php } ?>
    <!-- /story -->

    <!-- comments -->
    <section class="comments wow fadeInUp">
        <div class="container">
            <?php get_template_part('template_parts/comments-top'); ?>
        </div>
    </section>
    <!-- /comments -->

    <!-- cast -->
    <section class="cast wow fadeInUp">
        <div class="cast-back">
            <div class="container">
                <div class="cast-body">
                    <h2 class="title cast-title">CAST</h2>
                    <?php get_template_part('template_parts/casts'); ?>
                    <div class="cast-button-wrap">
                        <a href="cast" class="button cast-button">もっと見る</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /cast -->

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>
</body>

</html>