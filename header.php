
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
    <meta name="google-site-verification" content="" />
    <meta name="description" content="Portfolio Anton Melnychuk">
    <meta name="keywords" content="portfolio">

    <meta property="og:title" content="Portfolio Anton Melnychuk" >
    <meta property="og:description" content="Portfolio Anton Melnychuk" >
    <meta property="og:image" content="./assets/img/about.png" >

    <title>Portfolio_Anton_Melnychuk</title>


    <?php wp_head(); ?>
    
</head>
<body>

<!-- Header --> 

<header class="header">

    <ul class="header-nav">
        <li><a class="header-nav-link lang-home" href="#home">Home</a></li>
        <li><a class="header-nav-link lang-about" href="#about">About</a></li>
        <li><a class="header-nav-link lang-cv" href="#cv">My CV</a></li>
        <li><a class="header-nav-link lang-portfolio" href="#portfolio">Portfolio</a></li>
        <li><a class="header-nav-link lang-contact" href="#contact">Contact</a></li>
    </ul>

    <div class="container-lang">
        <i class="fas fa-globe"></i>
        <select class="change-lang" name="change-lang">
            <option value="en" selected>EN</option>
            <option value="pl">PL</option>
            <option value="ua">UA</option>
            <option value="ru">RU</option>
        </select>
    </div>
    
    <div class="burger-menu">
        <a href="" class="burger-menu_button">
          <span class="burger-menu_lines"></span>
        </a>
        <nav class="burger-menu_nav">
            <a class="burger-menu_link lang-home-burger" href="#home">Home</a>
            <a class="burger-menu_link lang-about-burger" href="#about">About</a>
            <a class="burger-menu_link lang-cv-burger" href="#cv">My CV</a>
            <a class="burger-menu_link lang-portfolio-burger" href="#portfolio">Portfolio</a>
            <a class="burger-menu_link lang-contact-burger" href="#contact">Contact</a>
        </nav>
        <div class="burger-menu_overlay"></div>
    </div>

</header>