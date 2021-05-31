<?php
// CSSとJSを読み込む処理を追加
function my_enqueue_scripts()
{
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array());
    wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array());
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'));
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array());
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array());
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
        array( //HTML5でマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );
}
add_action('after_setup_theme', 'my_setup');

// メニューのフリガナ表示
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);

function description_in_nav_menu($item_output, $item)
{
    return preg_replace('/(<a.*?>[^<]*?)</',  "<br /><span>{$item->attr_title}</span><br>$1<", $item_output);
}

// メニュー表示
register_nav_menus(
    array(
        'place_global' => 'グローバル',
        // 'my-drawer' => 'ドロワー',
    )
);

// お問い合わせのサンクスページ
add_action('wp_footer', 'add_thanks_page');
function add_thanks_page()
{
    echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = '../thanks/'; /* 遷移先のURL */
}, false );
</script>
EOD;
}
