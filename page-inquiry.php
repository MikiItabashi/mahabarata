<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>


    <!-- inquiry -->
    <section class="inquiry wow fadeInUp">
        <h2 class="title">INQUIRY</h2>
        <div class="container">
            <div class="inquiry-box">
                <p class="inquiry-text">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
                   <?php the_content(); ?>
            </div>
        </div>
    </section>
    <!-- /inquiry -->

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>
</body>

</html>