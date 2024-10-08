<?php
get_header(); ?>

<main class="contact-page">
    <div class="mainvisual">
        <p>お問い合わせ</p>
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
                <span itemprop="name">お問い合わせ</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
    </ol>
    <section class="contact wrapper">
        <h2 class="page-section-title">お問い合わせはこちらから</h2>
        <p>ご相談、また見学のご希望など、どのようなことでもお気軽にお問い合わせください。<br>私たちは、お子さま一人ひとりに最適なサポートを提供するために、<br>丁寧にお話をお伺いし、真心を込めて対応いたします。</p>
        <?
        if (have_posts()):
            while (have_posts()):
                the_post();

                // 本文の内容を表示
                the_content();
            endwhile;
        endif; ?>
</main>
<button type="button" id="top-to-btn"></button>
</section>
<?php get_footer();
?>