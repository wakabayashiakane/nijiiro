<?php
/*
Template Name: Flow Page
*/
get_header();
?>
    <main class="flow-page">
        <div class="mainvisual">
            <p>ご利用開始までの流れ</p>
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
                    <span itemprop="name">ご利用の流れ</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
        <section class="flow">
            <h2 class="page-section-title">お問い合わせから<br>ご利用開始までの流れ</h2>
            <ul class="flow-list container ">
                <li class="fadein">
                    <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/flow0.jpg'); ?>" alt="">
                        <span>step.1</span>
                    </div>
                    <div class="text">
                        <p class="title">お問い合わせ</p>
                        <p class="description">
                            お子さまのサポートやプログラム内容についてのご質問、ご相談、また見学のご希望など、どのようなことでもお気軽にお問い合わせください。私たちは、お子さま一人ひとりに最適なサポートを提供するために、丁寧にお話をお伺いし、真心を込めて対応いたします。
                        </p>
                    </div>
                </li>
                <li class="fadein">
                    <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/flow1.jpg'); ?>" alt="">
                        <span>step.2</span>
                    </div>
                    <div class="text">
                        <p class="title">ご見学</p>
                        <p class="description">
                            見学をご希望の方は、事前にご予約をお願いいたします。お電話やメール、またはお問い合わせフォームからご連絡ください。
                            予約の際、お子さまに関する簡単なご質問や、ご見学時に確認したいことがあればお知らせください。</p>
                    </div>
                </li>
                <li class="fadein">
                    <div class="img">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/flow2.jpg'); ?>" alt="">
                        <span>step.3</span>
                    </div>
                    <div class="text">
                        <p class="title">ご契約</p>
                        <p class="description">
                            支援内容や利用料金、契約条件にご納得いただいた後、正式にご契約の手続きを行います。契約書を作成し、施設利用の詳細やスケジュールについてもご案内いたします。</p>
                    </div>
                </li>
            </ul>
        </section>
        <section class="pricing-table container">
            <h2 class="page-section-title ">料金表</h2>
            <table class="wrapper">
                <thead>
                    <tr>
                        <th>所得区分</th>
                        <th>自己負担額</th>
                        <th>所得区分の認定方法</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>生活保護</td>
                        <td>ｘｘｘ円</td>
                        <td>生活保護受給世帯</td>
                    </tr>
                    <tr>
                        <td>一般1</td>
                        <td>ｘｘｘ円</td>
                        <td>市区町村民税非課税世帯
                            （概ね890万円/年以下の世帯）</td>
                    </tr>
                    <tr>
                        <td>一般2</td>
                        <td>ｘｘｘ円</td>
                        <td>上記以外</td>
                    </tr>
                </tbody>
            </table>
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