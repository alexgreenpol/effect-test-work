<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header__container header__container--fullwidth">
            <a href="#" class="header__logo">
                <img
                    src="./assets/images/logo.svg"
                    alt="logo"
                    class="header__logo-img" />
            </a>

            <nav class="header__nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'header__nav-list',
                    'container' => false,
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    'item_class' => 'header__nav-item',
                    'link_class' => 'header__nav-link',
                ));
                ?>
            </nav>

            <div class="header__toggle-menu">
                <div class="header__toggle-line header__toggle-line--first"></div>
                <div class="header__toggle-line header__toggle-line--second"></div>
                <div class="header__toggle-line header__toggle-line--third"></div>
            </div>

            <button class="header__lang-btn">EN</button>
        </div>
    </header>