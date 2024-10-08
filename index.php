<?php get_header(); ?>
<main class="top-page">
    <div class="loader">
        <div class="loader-item">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/loading.png'); ?>" alt="">
            <p class="txt">ようこそ！にじいろへ</p>
        </div>
    </div>
    <div class="mainvisual">
        <img class="pc-mainvisual" src="<?php echo esc_url(get_template_directory_uri() . '/img/mainvisual.png'); ?>" alt="">
        <img class="sp-mainvisual" src="<?php echo esc_url(get_template_directory_uri() . '/img/sp--mainvisual.png'); ?>" alt="">
        <div class="copy ">
            <p class="eachTextAnime firstText">こどもたちは</p>
            <p class="eachTextAnime secondText">放課後に育つ</p>
        </div>
     
    </div>
    <section class="message wrapper ">
        <h2 class="section-title">
            <span class="en">Message</span>
            <span class="ja">メッセージ</span>
        </h2>
        <p>「子どもの気持ちに耳を傾ける」こと
            子どものさまざまな行動に隠れた<br>「本当の気持ち」を汲み取り
            気持ちに寄り添ったアプローチをすることで<br>日々の楽しい遊びを通し
            「本来持っている力」を引き出すことができる<br>と考えています。
        </p>

        <div class="border">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/tree.png'); ?>" alt="">
        </div>
    </section>
    <section class="about container">
        <h2 class="section-title">
            <span class="en">About</span>
            <span class="ja">私たちについて</span>
        </h2>
        <div class="contents one">
            <div class="sun">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/sun.png'); ?>" alt="">
            </div>
            <div class="text">
                <h3 class="title">将来の自立を目指して</h3>
                <p>私たちの施設では、発達障害を持つお子さま一人ひとりの個性や可能性を大切にし、未来への第一歩を支援しています。日々の生活の中で、社会的なスキルや自己表現の方法を学び、少しずつ自立への道を歩んでいけるよう、専門的な支援と温かな環境を提供しています。私たちは、ご家族とともに、子どもたちの「できる」を広げ、将来の自立に向けた確かなサポートを行います。
                </p>
            </div>
            <div class="img fadein">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about-img1.png'); ?>" alt="">
            </div>
        </div>
        <div class="contents two">
            <div class="img fadein">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/about-img2.png'); ?>" alt="">
            </div>
            <div class="text">
                <h3 class="title">ご家族様支援</h3>
                <p> 私たちの施設では、お子さまだけでなく、ご家族のサポートも大切にしています。発達障害を持つお子さまを育てる中で、ご家族が抱える不安や悩みは多岐にわたります。私たちは、そんなご家族が安心して日々を過ごせるよう、さまざまな形で支援を行っています。
                </p>
            </div>

        </div>
        <div class="bird">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/bird.png'); ?>" alt="">
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
    <section class="news container">
        <h2 class="section-title">
            <span class="en">News</span>
            <span class="ja">新着情報</span>
        </h2>
        <div class="news-inner ">
            <ul class="news-list ">
                <?php
                // カスタム投稿タイプ 'news' を取得するクエリ
                $args = array(
                    'post_type' => 'news',  // カスタム投稿タイプ 'news' を指定
                    'posts_per_page' => 6, // 表示する投稿数
                    'order' => 'DESC',      // 降順で表示
                    'orderby' => 'date',    // 日付で並べ替え
                );

                $news_query = new WP_Query($args);

                if ($news_query->have_posts()) : ?>
                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                        <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'news-thumbnail')); ?>
                                <?php endif; ?>
                                <div class="overlay">読む</div> <!-- オーバーレイ部分 -->
                            </div>
                            <div class="text">
                                <p class="title"><?php the_title(); ?></p>
                                <p class="date"><?php echo get_the_date('Y年n月j日'); ?></p>
                            </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>お知らせがありません。</p>
                <?php endif; ?>

                <?php
                // WP_Query を使用した後は、クエリをリセットする必要があります
                wp_reset_postdata();
                ?>


            </ul>

        </div>
        <button class="readmore btn yureru-j">
            <a href="<?php echo get_post_type_archive_link('news'); ?>">お知らせ一覧へ</a>
        </button>

    </section>

    <section class="access container ">
        <h2 class="section-title">
            <span class="en">Access </span>
            <span class="ja">アクセス</span>
        </h2>
        <div class="access-inner">
            <div class="info">
                <dl class="access-list">
                    <dt>住所</dt>
                    <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキス</dd>
                </dl>
                <dl class="access-list">
                    <dt>電話</dt>
                    <dd>００００－００００－００００</dd>
                </dl>
                <dl class="access-list">
                    <dt>FAX</dt>
                    <dd>００００－００００－００００</dd>
                </dl>
            </div>
            <div class="map-img">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/map.png'); ?> " alt="">
            </div>
        </div>
    </section>
</main>
<button type="button" id="top-to-btn"></button>
<?php get_footer(); ?>