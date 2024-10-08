<?php
get_header(); // ヘッダーの読み込み
?>
<main class="taxonomy-page">
    <div class="mainvisual">
        <p>記事一覧</p>
    </div>
    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="index.html">
                <span itemprop="name"><i class="fa fa-home fa-fw" aria-hidden="true"></i>ホーム</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>

        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="menu.html">
                <span itemprop="name">記事一覧</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
    </ol>
    <section class="archive container">
        <h2 class="page-section-title">にじいろでの活動記録やお知らせをアップしています</h2>
        <div class="archive-wrapper">
            <ul class="archive-list">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <div class="img">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', array('class' => 'news-thumbnail')); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="description">
                                    <p class="title"><?php the_title(); ?></p>
                                    <p class="date"><?php echo get_the_date('Y年n月j日'); ?></p>
                                    <?php
                                    // 現在の投稿に関連するカスタムタクソノミー「news_category」のタームを取得
                                    $terms = get_the_terms(get_the_ID(), 'news_category');

                                    // 関連するタームがある場合のみ表示
                                    if (!empty($terms) && !is_wp_error($terms)) :
                                        foreach ($terms as $term) :
                                    ?>
                                            <div class="category">
                                                <!-- カテゴリーリンクを get_term_link() で取得して、一覧ページに飛ばすようにします。 -->
                                                <a href="<?php echo esc_url(get_term_link($term)); ?>">カテゴリー：<?php echo esc_html($term->name); ?></a>
                                            </div>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                    <p class="text">
                                    <p class="text">
                                        <?php
                                        if (mb_strlen($post->post_content, 'UTF-8') > 100) {
                                            $content = mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8');
                                            echo $content . '…';
                                        } else {
                                            echo strip_tags($post->post_content);
                                        }
                                        ?>
                                    </p>
                                    </p>
                                </div>
                            </a>

                        </li>
                    <?php
                    endwhile;
                else :
                    ?>
                    <p>お知らせがありません。</p>
                <?php endif; ?>
            </ul>
            <ul class="sidebar-list">
                <!-- カテゴリの動的表示 -->
                <div class="category">
                    <h3>カテゴリ</h3>
                    <ul>
                        <?php
                        // カスタム投稿タイプ 'news' に関連するタクソノミー 'news_category' のカテゴリをリスト表示
                        wp_list_categories(array(
                            'title_li' => '', // 見出しは不要（すでに<h3>で表示）
                            'taxonomy' => 'news_category', // カスタムタクソノミーを指定
                            'show_count' => true, // 投稿数を表示する
                        ));
                        ?>
                    </ul>
                </div>
                <div class="month-archive">
                    <h3>アーカイブ</h3>
                    <ul>
                        <?php
                        $args = array(
                            'post_type' => 'news',
                            'type' => 'monthly',
                            'format' => 'html', // HTML形式で表示
                            'show_count' => true, // 投稿数を表示する
                        );
                        wp_get_archives($args);
                        ?>
                    </ul>
                </div>
            </ul>

        </div>
    </section>
    <section class="info-menu container">
        <ul class="info-item">

            <li><a href="<?php echo esc_url(home_url("/schedule")); ?>">
                    <div class="img">
                        <img class="main-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/30760340_s (1).png"'); ?>" alt="">
                    </div>
                    <div class="text">
                        <p class="title">にじいろの一日</p>
                        <p class="description">登園～の
                            1日のスケジュールです。一人ひとりに合った遊びと学びで個性を育み、お子さまの才能を引き出すお手伝いをいたします。
                        </p>
                    </div>
                    <button class="readmore btn yureru-j">
                        <a href="<?php echo esc_url(home_url("/schedule")); ?>">click!
                        </a>
                    </button>
                </a>
            </li>
            <li><a href="<?php echo esc_url(home_url("/flow")); ?>">
                    <div class="img">
                        <img class="main-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/info2.png'); ?>" alt="">
                    </div>
                    <div class="text">
                        <p class="title">ご利用までの流れ</p>
                        <p class="description">お問い合わせいただいてからの流れです。スタッフ一同、皆さまとお会いできる日を楽しみにしております。</p>
                    </div>
                    <button class="readmore btn yureru-j">
                        <a href="<?php echo esc_url(home_url("/flow")); ?>">click!</a>
                    </button>
                </a>
            </li>
            <li><a href="<?php echo esc_url(home_url("/activity")); ?>">
                    <div class="img">
                        <img class="main-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/info3.png'); ?>" alt="">
                    </div>
                    <div class="text">
                        <p class="title">活動内容</p>
                        <p class="description">にじいろでの活動をまとめました。お子さまの気持ちに寄り添いながら
                            遊びを通し、「本来持っている力」を引き出します。</p>
                    </div>
                    <button class="readmore btn yureru-j">
                        <a href="<?php echo esc_url(home_url("/activity")); ?>">click!</a>
                    </button>
                </a>
            </li>
            <li><a href="<?php echo esc_url(home_url("/contact")); ?>">
                    <div class="img">
                        <img class="main-img" src="<?php echo esc_url(get_template_directory_uri() . '/img/info4.png'); ?>" alt="">
                    </div>
                    <div class="text">
                        <p class="title">お問い合わせ</p>
                        <p class="description">ご見学やご質問などのお問い合わせはこちらからどうぞ。どのようなことでもお気軽にお問い合わせください。</p>
                    </div>
                    <button class="readmore btn yureru-j">
                        <a href="<?php echo esc_url(home_url("/contact")); ?>">click!</a>
                    </button>
                </a>
            </li>
        </ul>
    </section>
</main>
<button type="button" id="top-to-btn"></button>
<?php get_footer(); ?>