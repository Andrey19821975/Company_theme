<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9 col-lg-5 col-9">
                    <div class="logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <div class="logo__text">
                            <?php the_field('slogan_text'); ?>
                        </div>
                    </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-7 col-3">
                    <?php wp_nav_menu(array('theme_location'=>'primary',
                    'container'=>'nav',
                    'container_class'=>'menu',
                    'menu_class'=>'menu__block'));?>
                    <div class="hamburger-menu">
                        <input id="menu__toggle" type="checkbox" />
                        <label class="menu__btn" for="menu__toggle">
                            <span></span>
                        </label>
                        <?php wp_nav_menu(array('theme_location'=>'mobile',
                            'container'=>'',
                            'menu_class'=>'menu__box'));?>
                    </div>
                </div>
            </div>
        </div>
    </header>