<?php
/*
Template Name: Portfolio
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
    <meta property="og:image" content="./assets/img/about.png" >

    <title>All_Projects_Anton_Melnychuk</title>


    <?php wp_head(); ?>
    
</head>
<body>

<!-- Header --> 

<header class="header-portfolio">

    <div class="header-nav-home">
        <div class="link"><a class="header-nav-link-home lang-home" href="https://antonmelnychuk.com">Home</a></div> 
    </div>

    <div class="container-lang">
        <span class="icon-lang"><i class="fas fa-globe"></i></span>
        <select class="change-lang-portfolio select-portfolio" name="change-lang-portfolio">
            <option value="en" selected>EN</option>
            <option value="pl">PL</option>
            <option value="ua">UA</option>
            <option value="ru">RU</option>
        </select>
    </div>

</header>

<div class="main-portfolio">
    <h1 class="lang-portfolio-page-title">PORTFOLIO</h1>
    <div class="portfolio-content">

        <div class="portfolio-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/www.max-car.com.ua.jpg" alt="img">
            <div class="gallery-text">
                <div class="flex">
                    <div class="flex-main">
                        <h3 class="gallety-title lang-gallery-title ">Car sales site</h3>
                        <p>2021</p>
                    </div>
                    <div class="gallery-text-info">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Javascript</span>
                        <span>Jquery</span>
                    </div>
                </div>
                <div class="but">
                    <a href="https://www.max-car.com.ua" target="_blank" class="gallery-button "><i class="fas fa-door-open"></i><p class="visit lang-gallery-button1">VISIT</p></a>
                </div>
                
            </div>
        </div>
    
        <div class="portfolio-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/react-note-app.png" alt="img">
            <div class="gallery-text">
                <div class="flex">
                    <div class="flex-main">
                        <h3 class="gallety-title">Note App</h3>
                        <p>2021</p>
                    </div>
                    <div class="gallery-text-info">
                        <span>React</span>
                        <span>SCSS</span>
                        <span>Bootstrap</span>
                        <span>Realtime Database</span>
                    </div>
                </div>
                <div class="but">
                    <a href="https://react-hooks-note-app-6707b.web.app" target="_blank" class="gallery-button "><i class="fas fa-door-open"></i><p class="visit lang-gallery-button2">VISIT</p></a>
                </div>
            </div>
        </div>

        <div class="portfolio-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/react-site.png" alt="img">
            <div class="gallery-text">
                <div class="flex">
                    <div class="flex-main">
                        <h3 class="gallety-title">React Site</h3>
                        <p>2021</p>
                    </div>
                    <div class="gallery-text-info">
                        <span>React</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                    </div>
                </div>
                <div class="but">
                    <a href="https://react-site-a.firebaseapp.com" target="_blank" class="gallery-button "><i class="fas fa-door-open"></i><p class="visit lang-gallery-button3">VISIT</p></a>
                </div>
            </div>
        </div>

        <div class="portfolio-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Guitar-Shop.png" alt="img">
            <div class="gallery-text">
                <div class="flex">
                    <div class="flex-main">
                        <h3 class="gallety-title">Guitar Shop</h3>
                        <p>2022</p>
                    </div>
                    <div class="gallery-text-info">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>JSON</span>
                    </div>
                </div>
                <div class="but">
                    <a href="https://guitar-shop-site.web.app" target="_blank" class="gallery-button "><i class="fas fa-door-open"></i><p class="visit lang-gallery-button4">VISIT</p></a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Preloader -->

<div id="preloader" class="preloader">
    <div class="loader"></div>
</div>

<!-- Footer -->

<footer>
    <div>
        <p><i class="far fa-copyright"></i> 2021 Anton Melnychuk</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>