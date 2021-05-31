<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>

    <!-- cast -->
    <section class="cast-page wow fadeInUp">
        <div class="cast-back">
            <div class="container">
                <div class="cast-body">
                    <h2 class="title cast-title">CAST</h2>
                    <?php get_template_part('template_parts/casts'); ?>
                    <div class="space"></div>
                    <div class="space"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /cast -->

    <div class="cast-content1 wow fadeInUp">
        <div class="container">
            <div class="cast-content1-items">
                <?php
                $field_group = SCF::get('musician');
                foreach ($field_group as $field) {
                ?>
                    <div class="cast-content1-item">
                        <div class="cast-content1-img">
                            <?php
                            $img = wp_get_attachment_image_src($field['musician_picture'], 'large');
                            ?>
                            <img src="<?php echo $img[0]; ?>" alt="">
                        </div>
                        <div class="cast-content1-info">
                            <p class="cast-content1-title"><?php echo $field['musician_title']; ?></p>
                            <p class="cast-content1-name"><?php echo $field['musician_name']; ?></p>
                            <p class="cast-content1-role"><?php echo $field['musician_national']; ?></p>
                            <p class="cast-content1-text"><?php echo nl2br($field['musician_introduction']); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="cast-content2 wow fadeInUp">
        <div class="container">
            <div class="cast-content2-items">
                <?php
                $field_group = SCF::get('staff');
                foreach ($field_group as $field) {
                ?>
                    <div class="cast-content2-item">
                        <p class="cast-content2-title"><?php echo $field['staff_title']; ?></p>
                        <p class="cast-content2-name"><?php echo $field['staff_name']; ?></p>
                        <p class="cast-content2-text"><?php echo $field['staff_national']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>
</body>

</html>