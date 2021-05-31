<!-- header -->
<header>
    <nav class="header-nav sp-none">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'place_global',
                'container' => false,
            )
        );
        ?>
    </nav>
</header>
<!-- /header -->

<!-- ドロワー -->
<div class="drawer-icon">
    <div class="drawer-icon_bars">
        <div class="drawer-icon_bar1"></div>
        <div class="drawer-icon_bar2"></div>
        <div class="drawer-icon_bar3"></div>
    </div>
</div>
<div class="drawer-content">
    <div class="drawer-content_items">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'place_global',
                'container' => false,
            )
        );
        ?> </div>
</div>
<div class="drawer-background"></div>
<!-- /ドロワー -->


<?php if (is_front_page()) : ?>
    <!-- トップページのhero -->
    <section class="hero">
        <div class="hero-top">
            <div class="hero-title">
                <img src="<?php echo get_template_directory_uri() ?>/img/hero-title.png" alt="マハーバーラタ完全版|世界最長の叙事詩をピーター・ブルック以来の全編舞台化">
            </div>
        </div>
        <div class="hero-info">
            <img src="<?php echo get_template_directory_uri() ?>/img/hero-info.png" alt="2020年7月4日～7日なかのZERO大ホール">
            <p class="hero-text">小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！</p>
            <p class="hero-text" style="padding-top: 10px;">アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
        </div>
        <a href="" class="button button-light big hero-button">
            チケット予約サイトへ
        </a>
    </section>
    <!-- /トップページのhero -->

<?php else : ?>
    <!-- トップページ以外のhero -->

    <?php if (is_page(149)) : ?>
        <!-- ストーリーのみ -->
        <?php
        $field_group = SCF::get('story');
        $field_group = array_slice($field_group, 0, 1);
        foreach ($field_group as $field) {
            $img = wp_get_attachment_image_src($field['story_img'], 'large');
        ?>
            <section class="hero-story" style="background-image: url('<?php echo $img[0]; ?>')">
            <?php } ?>
        <?php else : ?>
            <!-- ストーリー以外 -->
            <section class="hero">
            <?php endif; ?>

            <div class="container">
                <div class="hero-common">
                    <img class="hero-common-title" src="<?php echo get_template_directory_uri() ?>/img/hero-title.png" alt="マハーバーラタ完全版|世界最長の叙事詩をピーター・ブルック以来の全編舞台化">
                    <img class="hero-common-info" src="<?php echo get_template_directory_uri() ?>/img/hero-info.png" alt="2020年7月4日～7日なかのZERO大ホール">
                    <a href="" class="button button-light hero-common-button">
                        チケット予約サイトへ
                    </a>
                </div>

                <?php if (is_page(149)) : ?>
                    <!-- ストーリーのみ -->
                    <h2 class="title story-title">STORY</h2>
                    <div class="story-items">
                        <?php
                        $field_group = SCF::get('story');
                        $field_group = array_slice($field_group, 0, 1);
                        foreach ($field_group as $field) {
                        ?>
                            <p class="story-item-text right"><?php echo $field['story_text']; ?></p>
                        <?php } ?>
                    </div>
                <?php endif; ?>

            </div>
            </section>
            <?php if (!is_page(149)) : ?>
                <!-- ストーリー以外 -->
                <!-- パンくずリスト -->
                <div class="container">
                    <div class="breadcrumb">
                        <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 
                        ?>
                    </div>
                </div>
                <!-- /パンくずリスト -->
            <?php endif; ?>

            <!-- /トップページ以外のhero -->
        <?php endif; ?>