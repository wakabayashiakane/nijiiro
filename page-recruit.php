<?php
/*
Template Name: Recruit Page
*/
get_header();
?>
    <main class="recruit-page">
        <div class="mainvisual">
            <p>採用情報</p>
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
                    <span itemprop="name">採用情報</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
        <section class="recruit wrapper">
            <h2 class="page-section-title">募集要項</h2>
            <div class="tab-inner">
                <!-- タブメニュー -->
                <ul class="tabs">
                    <li class="tab active" data-tab="fulltime">正社員</li>
                    <li class="tab" data-tab="parttime">パート</li>
                </ul>

                <!-- 正社員の募集要項 -->
                <div class="tab-content active" id="fulltime">
                    <h3>正社員募集要項</h3>
                    <dl>
                        <dt>勤務時間:</dt>
                        <dd>9:00〜18:00</dd>
                    </dl>
                    <dl>
                        <dt>給与: </dt>
                        <dd>月給 240,000円〜</dd>
                    </dl>
                    <dl>
                        <dt>福利厚生:</dt>
                        <dd>社会保険完備、交通費支給</dd>
                    </dl>
                </div>

                <!-- パートの募集要項 -->
                <div class="tab-content" id="parttime">
                    <h3>パート募集要項</h3>
                    <dl>
                        <dt>勤務時間:</dt>
                        <dd>週3日〜、1日4時間〜</dd>
                    </dl>
                    <dl>
                        <dt>時給:</dt>
                        <dd>1,200円〜</dd>
                    </dl>
                    <dl>
                        <dt>福利厚生:</dt>
                        <dd>交通費支給、昇給制度あり</dd>
                    </dl>
                </div>
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
    <?php get_footer();?>