<div class="cast-items">
    <?php
    $field_group = SCF::get('cast', 118);
    foreach ($field_group as $field) {
    ?>
        <div class="cast-item">
            <div class="cast-img">
                <?php
                $img = wp_get_attachment_image_src($field['cast_picture'], 'large');
                ?>
                <img src="<?php echo $img[0]; ?>" alt="">
            </div>
            <div class="cast-person">
                <p class="cast-role"><?php echo $field['cast_title']; ?></p>
                <p class="cast-name"><?php echo $field['cast_name']; ?></p>
                <p class="cast-add"><?php echo $field['cast_national']; ?></p>
            </div>
            <p class="cast-text"><?php echo nl2br($field['cast_introduction']); ?></p>
        </div>
    <?php } ?>
</div>