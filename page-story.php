<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_template_part('template_parts/header'); ?>

    <div class="story-contents">
        <!-- story-content -->
        <?php
        $field_group = SCF::get('story');
        $field_group = array_slice($field_group, 1);
        foreach ($field_group as $field) {
        ?>
            <?php
            $img = wp_get_attachment_image_src($field['story_img'], 'large');
            ?>
            <div class="story-items story1" style="background-image: url('<?php echo $img[0]; ?>')">
                <div class="container">
                    <p class="story-item-text left"><?php echo $field['story_text']; ?></p>
                </div>
            </div>
        <?php } ?>
        <!-- /story-content -->

    </div>

    <?php get_template_part('template_parts/schedule'); ?>

    <?php get_footer(); ?>
</body>

</html>