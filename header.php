<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header_nav">
            <div class="header_logo">
                <a href="https://daichaaan.github.io/MySite/index">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.jpeg" alt="潮崎会・神奈川県">
                </a>
                <div class="header_name">
                    <h2>神奈川県バドミントンチーム</h2>
                    <h1>潮崎会</h1>
                </div>
            </div>
            <!-- right 側 -->
            <div class="header_right">
                <div class="header_search">
                    <?php get_search_form(); ?>
                </div>
                <div class="contact">
                    <a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a>
                </div>
            </div>
        </div>
        <script>
        document.addEventListener('wpcf7mailsent', function(event) {
            location = 'http://localhost:8888/wordpress/contact_thanks/';
        }, false);
        </script>
    </header>