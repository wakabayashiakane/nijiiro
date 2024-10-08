
<?php
/*
Template Name: Activity Page
*/
get_header();
?>
    <main class="activity-page">
        <div class="mainvisual">
            <p>活動内容</p>
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
                    <span itemprop="name">活動内容</span>
                </a>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
        <section class="activity container">
            <h2 class="page-section-title">お子さまを見守るすべての方々と
                連携・役割分担しながら支援します</h2>
            <ul class="activity-list">
                <li >
                    <div class="img fadein">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/activity1.jpg'); ?>" alt="">
                    </div>
                    <div class="description">
                        <p class="title">学習支援</p>
                        <p class="text">
                            私たちの施設では、お子さま一人ひとりの学びのスタイルやペースに合わせた学習支援を提供しています。発達障害を持つお子さまは、それぞれ異なる強みや挑戦を抱えています。私たちは、その個々のニーズに応じた学習環境を整え、将来に役立つスキルを楽しく身に付けていくサポートを行います。</p>
                    </div>
                </li>
                <li>
                    <div class="description">
                        <p class="title">運動療育</p>
                        <p class="text">
                            発達障害を持つお子さまが身体を動かすことで心身の発達をサポートする「運動療育」に力を入れています。運動は、体力や筋力の向上だけでなく、集中力や協調性、自己表現の力を養うためにも大切な要素です。お子さま一人ひとりの発達段階に合わせた楽しい運動プログラムを通じて、健やかな成長を促します。</p>
                    </div>
                    <div class="img fadein">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/activity2.jpg'); ?>" alt="">
                    </div>
                </li>
                <li>
                    <div class="img fadein">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/activity3.jpg'); ?>" alt="">
                    </div>
                    <div class="description">
                        <p class="title">コミュニケーション
                        </p>
                        <p class="text">
                            お子さまが運動を通して身体的な成長だけでなく、感覚統合や自己調整力、社会性を育むことを目的としています。楽しみながら運動に取り組める環境を提供し、心と体のバランスを整えながら、自信と喜びを引き出すサポートを行います。</p>
                    </div>
                </li>
                <li>
                    <div class="description">
                        <p class="title">創作活動</p>
                        <p class="text">
                            お子さまが創造力や自己表現力を存分に発揮できる「創作活動」を支援しています。アートや音楽、ものづくりなどの創造的な活動を通じて、お子さまが自分の感情や考えを自由に表現し、成功体験を積み重ねていける環境を提供しています。創作活動は、お子さまの内面の成長やコミュニケーション能力の向上にもつながります。

1. アートを通じた自己表現</p>
                    </div>
                    <div class="img fadein">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/activity4.jpg'); ?>" alt="">
                    </div>
                </li>
                <li>
                    <div class="img fadein">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/activity5.jpg'); ?>" alt="">
                    </div>
                    <div class="description">
                        <p class="title">ご家族支援</p>
                        <p class="text">
                            専門のカウンセラーが、ご家族の不安や悩みをお聞きし、一緒に解決策を見つけていきます。子育てに関する相談はもちろん、今後の進路や生活面でのアドバイスも行い、ご家族全体の安心をサポートします。</p>
                    </div>
                </li>
            </ul>
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