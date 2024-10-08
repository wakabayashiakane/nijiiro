<?php
// スタイルとスクリプトの読み込み
add_action('wp_enqueue_scripts', 'add_styles_and_scripts');
function add_styles_and_scripts()
{
    // CSSの読み込み
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    // googleフォントを登録
    wp_register_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Hina+Mincho&family=Nanum+Gothic:wght@400;700;800&family=Zen+Maru+Gothic:wght@300;400;500;700;900&family=Kiwi+Maru:wght@300;400;500&family=Zen+Kurenaido&display=swap',
        array(),
        null
    );

    // フォントオーサムの登録
    wp_register_style(
        'font-awesome',
        'https://.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        array(),
        null
    );




    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'google-fonts', 'font-awesome'),
        '1.0'
    );


    // JSの読み込み
    wp_deregister_script('jquery');
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '1.0'
    );
    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('jquery_script'),
        '1.0',
        true
    );
}

// パンくずリスト
function breadcrumb()
{
    $home = '<li><a href="' . get_bloginfo('url') . '" >ホーム</a></li>';
    echo '<ul>';
    if (is_front_page()) {
        // トップページの場合は表示させない
    } else if (is_single()) {
        $cat = get_the_category();
        if (isset($cat[0]->cat_ID)) {
            $cat_id = $cat[0]->cat_ID;
            $cat_list = array();
            while ($cat_id != 0) {
                $cat = get_category($cat_id);
                $cat_link = get_category_link($cat_id);
                array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>');
                $cat_id = $cat->parent;
            }
            foreach ($cat_list as $value) {
                echo $value;
            }
            the_title('<li>', '</li>');
        }
    } else if (is_page()) {
        echo $home;
        the_title('<li>', '</li>');
    }
}




// カスタム投稿タイプ「news」を登録
function create_news_post_type()
{
    register_post_type(
        'news',
        // register_post_type は、カスタム投稿タイプを登録するためのWordPressの
        // 関数です。第一引数 'product' は、投稿タイプの内部名（スラッグ）です。これが、データベース内やURLで使われる投稿タイプの識別子になります。第二引数の array はオプションの設定です。
        array(
            'labels' => array(
                'name' => __('News'),
                // 管理画面のメニューなどに表示されます。__() は国際化対応の関数で、翻訳に対応できるようにしています。
                'singular_name' => __('News')
                // 単数形の名前です。個別の投稿を扱うときに使用されます。
            ),
            'public' => true,
            // public は、この投稿タイプが公開されているかどうかを指定します。true に設定すると、カスタム投稿はフロントエンド（ウェブサイトのユーザーが見える部分）にも表示されます。false にすると、管理画面にしか表示されません。
            'has_archive' => true,
            // この投稿タイプにアーカイブページを持たせるかどうかを指定します。true にすると、example.com/menu/ のようなURLで「menu」投稿のアーカイブが自動生成されます。
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            // 投稿のタイトル。投稿内容を編集するテキストエディター。稿のアイキャッチ画像（サムネイル）抜粋（概要）機能。をサポートする機能として指示
            'menu_position' => 5,
            // 管理画面のメニュー内でこのカスタム投稿タイプが表示される位置を指定します。ここでは、通常の「投稿」の下に表示されます。
            'rewrite' => array('slug' => 'news'),
            // このカスタム投稿タイプのURLの構造を指定します。この例では、'slug' => 'product' によって、投稿のパーマリンクが example.com/product/post-name/ のように設定されます。
        )
    );
}
add_action('init', 'create_news_post_type');
// これにより、WordPressの初期化時にカスタム投稿タイプ「news」が登録されます。


// カスタムタクソノミー「news_category」を登録
function create_news_taxonomy()
{
    register_taxonomy(
        'news_category',
        'news',
        array(
            'label' => __('News Categories'),
            'rewrite' => array('slug' => 'news-category'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'create_news_taxonomy');



// デフォルトの【投稿】の表示を消す
function remove_menus()
{
    remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_menus');




add_theme_support('post-thumbnails');
