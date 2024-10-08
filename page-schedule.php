<?php
/*
Template Name: Schedule Page
*/
get_header();
?>
    <main class="schedule-page">
        <div class="mainvisual">
            <p>にじいろの１日</p>
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
                    <span itemprop="name">にじいろの1日</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
        <section class="schedule">
            <h2 class="page-section-title">放課後を楽しく過ごしながら<br>豊かな個性を育みます</h2>
            <div class="schedule-container wrapper">
                <div class="schedule-left">
                    <h1 class="title"> 平日</h1>
                    <ul class="schedule-list">
                        <li class="schedule-item">
                            <span class="time">11:30 - 12:30</span>
                            <span class="event">通所</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">13:00 - 14:00</span>
                            <span class="event">創作活動</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">14:00 - 15:00</span>
                            <span class="event">運動遊び</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">15:00 - 15:30</span>
                            <span class="event">おやつ</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">16:00 - 16:30</span>
                            <span class="event">自由あそび</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">16:30 - 17:30</span>
                            <span class="event">帰りの送迎</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">18:00</span>
                            <span class="event">さようなら</span>
                        </li>

                    </ul>
                </div>
                <div class="schedule-right">
                    <h1 class="title"> 土日</h1>
                    <ul class="schedule-list">
                        <li class="schedule-item">
                            <span class="time">9:00 - 9:30</span>
                            <span class="event">随時通所</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">10:00 - 11:00</span>
                            <span class="event">運動あそび</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">11:00 - 11:30</span>
                            <span class="event">おやつ</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">11:30 - 12:30</span>
                            <span class="event">創作活動</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">12:30 - 13:00</span>
                            <span class="event">お昼ごはん</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">13:30 - 14:30</span>
                            <span class="event">自由あそび</span>
                        </li>
                        <li class="schedule-item">
                            <span class="time">15:00</span>
                            <span class="event">さようなら</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="handwash">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/handwash.jpg'); ?>" alt="">
            </div>
            <div class="peint">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/peint.jpg'); ?>" alt="">
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