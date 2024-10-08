<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">


    <!-- CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <h1 class="header-logo">
            <a href="index.html"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/logo.png'); ?>" alt=""></a>
        </h1>
        <nav class="header-nav" id="js-nav">
            <ul class="header-nav-list">
                <li>
                    <a href="<?php echo esc_url(home_url("/flow")); ?>"class="icon-text ">
                        <i class="fa-solid fa-house-chimney fa-2x"></i>
                        <span>ご利用の流れ</span>
                    </a>
                </li>
                <li><a href="<?php echo esc_url(home_url("/schedule")); ?>"class="icon-text ">
                        <i class="fa-solid fa-clock fa-2x"></i>
                        <span>にじいろの１日</span>
                    </a></li>
                <li><a href="<?php echo esc_url(home_url("/activity")); ?>"class="icon-text ">
                        <i class="fa-solid fa-heart fa-2x"></i>
                        <span>活動内容</span>
                    </a></li>
                <li><a href=" <?php echo esc_url(home_url("/recruit")); ?>"class="icon-text ">
                        <i class="fa-solid fa-pen-nib fa-2x"></i>
                        <span>採用情報</span>
                    </a></li>
                <li><a href="<?php echo esc_url(home_url("/contact")); ?>"class="icon-text ">
                        <i class="fa-solid fa-envelope fa-2x"></i>
                        <span>お問い合わせ</span>
                    </a></li>
            </ul>
            <button class="top-page btn">
                <a href="index.html">トップページ</a>
            </button>
        </nav>
        <button class="toggle-btn" id="js-toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </header>