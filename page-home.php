<?php
/*
Template Name: Main
*/
?>

<?php get_header(); ?>

<!-- Intro -->

<div class="intro" id="home" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/intro_code.jpg);">
    <div class="briefly-about-me">
        <p class="lang-who-i-am1">Hello, I'm Anton Melnychuk.</p> 
        <p class="lang-who-i-am2">I'm a front-end web developer.</p>
    </div>
</div>

<!-- About -->

<div class="about" id="about">
    <div class="about-title-block">
        <i class="far fa-address-card"></i>
        <h2 class="about-title lang-about-title"> ABOUT ME</h2>
    </div>
    <div class="about-container">
        <div class="cv-photo-container">
            <div class="cv-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cv_photo.jpeg" alt="my_photo">
            </div>
        </div>
    
        <div class="about-me">
            <div class="about-me-container">
                <h3 class="my-name lang-name">My name is Anton Melnychuk</h3>
                <p class="about-me-content lang-about-me-content">
        
                    <!-- I specialize in creating sites from scratch.
                    
                    There are a few examples in my portfolio that I have developed that you may like.
                    
                    I believe that my strengths are my creativity and punctuality.
                    
                    My goal №1 is always to meet your needs and deadlines.
                    
                    Familiar with Adobe Photoshop.
                    
                    I am engaged in adaptive and cross-browser layout.
                    
                    I can implement the layout and put on WordPress. -->

                    Collected and confident in my abilities, I have a creative
                    approach to the implementation of the technical assignment,
                    self-discipline and the ability to work in a team. I am always in
                    touch and never disappear anywhere. Open to learning and
                    continuous development, I have a desire to achieve results,
                    responsible and conscientious in the performance of
                    assigned duties. I'm looking for my first job and good experience.
                    
                </p>
            </div>
        </div>
    </div>

    <h3 class="title-benefits lang-benefits">Benefits</h3>
    <div class="benefits">

        <div class="benefit">
            <h4 class="lang-title-benefit1">MODERN WEBSITE CREATION TECHNIQUE</h4>
            <p class="lang-text-benefit1">When coding I use HTML5, I create effects using CSS3, and give the website dynamics using pure Javascript and jQuery.</p>
        </div>
        <div class="benefit">
            <h4 class="lang-title-benefit2">CLEAN CODE AND ADAPTIVE CREATION</h4>
            <p class="lang-text-benefit2">HTML code without anything superfluous, clear class names and indents. Adaptive layout allows you to view the site both on a computer and on mobile devices.</p>
        </div>

    </div>
</div>

<!-- CV -->

<div class="cv" id="cv" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bgr.jpg);">

    <div class="title-cv-block">
        <div class="cv-title">
            <h2><i class="fas fa-briefcase"></i></h2>
            <h2 class="lang-cv-title">MY CV</h2>
        </div>
        <div class="btn-print">
            <button class="print-buttom" id="printButtom"><i class="fas fa-print"></i><h6>PDF</h6></button>
        </div>
    </div>

    <div class="cv-container">

        <div class="cv-position status">
            <div class="line1 status-title lang-status-title">Status:</div>
            <div class="line2 status-text lang-status-text">Web developer</div>
        </div>

        <div class="cv-position name">
            <div class="line1 name-title lang-name-title">Name:</div>
            <div class="line2 name-text lang-name-text">Anton Melnychuk</div>
        </div>

        <div class="cv-position specialization">
            <div class="line1 specialization-title lang-specialization-title">Specialization:</div>
            <div class="line2 specialization-text lang-specialization-text">Business card site, online store, catalog site, promo site, landing page, turnkey site, finalization of site functionality.</div>
        </div>

        <div class=" cv-position skills">
            <div class="line1 skills-title lang-skills-title">Tech Skills:</div>
            <div class="line2 skills-text">
                <div>
                    <i class="fab fa-html5"></i> HTML / <i class="fab fa-css3-alt"></i> CSS(SCSS)
                    <div class="progress">
                        <progress class="prog" style="width: 85%; height: 12px;" max="100" value="75"> 75% </progress> 75%
                    </div>
                    <i class="fab fa-js-square"></i> Javascript
                    <div class="progress">
                        <progress class="prog" style="width: 85%; height: 12px;" max="100" value="50"> 50% </progress> 50%
                    </div>
                    <i class="fab fa-php"></i> PHP
                    <div class="progress">
                        <progress class="prog" style="width: 85%; height: 12px;" max="100" value="20"> 20% </progress> 20%
                    </div>
                    <!-- <i class="far fa-image"></i> Photoshop 
                    <div class="progress">
                        <progress class="prog" style="width: 85%; height: 12px;" max="100" value="50"> 50% </progress> 50%
                    </div> -->
                    <i class="fab fa-react"></i> React.js <!-- <i class="fab fa-node-js"></i> Node.js -->
                    <div class="progress">
                        <progress class="prog" style="width: 85%; height: 12px;" max="100" value="20"> 20% </progress> 20%
                    </div>
                </div>          
            </div>
        </div>

        <div class=" cv-position education">
            <div class="line1 education-title lang-education-title">Education:</div>
            <div class="line2 education-text">

                <div class="school">
                    <div class="year">
                        10.2015-
                        <br>
                        04.2019</div>
                    <div class="school-info">
                        <p class="lang-school-a1">University of Economics and Innovation in Lublin, Poland</p>  
                        <p class="lang-school-a2">Logistics</p> 
                        <p class="lang-school-a3">Spec. Logistics systems engineering</p> 
                        <p class="lang-school-a4">Educational level: engineer</p> 
                    </div>
                </div>

                <div class="school">
                    <div class="year">
                        10.2019-
                        <br>
                        10.2021</div>
                    <div class="school-info">
                        <p class="lang-school-b1">WSB University in Warsaw, Poland</p>  
                        <p class="lang-school-b2">Economics</p> 
                        <p class="lang-school-b3">Spec. National and international logistics management</p> 
                        <p class="lang-school-b4">Educational level: master</p> 
                    </div>
                </div>

                <div class="school">
                    <div class="year">
                        06.2021-
                        <br>
                        09.2021
                    </div>
                    <div class="school-info"><p class="lang-school-c1">Web Academy</p>  
                        <p class="lang-school-c2">Spec. Frontend Development</p> 
                    </div>
                </div>

            </div>
        </div>

        <div class=" cv-position qualities">
            <div class="line1 qualities-title lang-qualities-title">Business and personal qualities:</div>
            <div class="line2 qualities-text lang-qualities-text">Collected and confident in my abilities, I have a creative approach to the implementation of the technical assignment, self-discipline and the ability to work in a team. I am always in touch and never disappear anywhere.</div>
        </div>

        <div class=" cv-position cv-contact">
            <div class="line1 contact-title lang-contact-title">Contact:</div>
            <div class="line2 contact-text">
                <p><a class="cv-tel" href="tel:+48530883095">Tel.: +48 530 883 095</a></p>
                <p><a class="cv-email" target="_blank" href="mailto:antonmelnychuk1@gmail.com">Email: antonmelnychuk1@gmail.com</a></p>
            </div>
        </div>
          
    </div>
</div>

<!-- CV Print -->

<div class="cv-section" id="cv-section">

    <div class="cv-section-flex">

         <!--Sidebar section-->
        <aside class="sidebar-section">

            <img class="cv-print-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/cv_photo.jpeg" width="300" height="460" alt="my-photo">

            <!--Contacts section-->
            <div class="contacts-section">
                <h3 class="sidebar-title">Contact</h3>

                <div class="contact-item">
                    <span class="contacts-section-type"><i class="fas fa-house-user"></i></span>
                    <a class="contacts-section-link">02-698 Warsaw</a> 
                </div>

                <div class="contact-item">
                    <span class="contacts-section-type">C:</span>
                    <a class="contacts-section-link" href="tel:+48530883095">+48530883095</a> 
                </div>

                <div class="contact-item">
                    <span class="contacts-section-type">E:</span>
                    <a class="contacts-section-link" href="mailto:antonmelnychuk1@gmail.com">antonmelnychuk1@gmail.com</a> 
                </div>

                <div class="contact-item">
                    <span class="contacts-section-type"><i class="fab fa-github"></i></span>
                    <a class="contacts-section-link" href="https://github.com/antonmelnychuk1">github.com/antonmelnychuk1</a> 
                </div>
            </div>

            <!--Tech skills section-->
            <div class="tech-skills-section">
                <h3 class="sidebar-title">Tech Skills</h3>

                <ul class="tech-skills-list">
                    <li class="tech-skills-item"><i class="fab fa-html5"></i><span class="tech-skills-item-text"> HTML5</span></li> 
                    <li class="tech-skills-item"><i class="fab fa-css3-alt"></i><span class="tech-skills-item-text"> CSS3(SCSS)</span></li> 
                    <li class="tech-skills-item"><i class="fab fa-js-square"></i><span class="tech-skills-item-text"> JavaScript</span></li> 
                    <li class="tech-skills-item"><i class="fab fa-react"></i><span class="tech-skills-item-text"> React.js</span></li> 
                    <li class="tech-skills-item"><i class="fab fa-github"></i><span class="tech-skills-item-text"> GIT</span></li> 
                    <li class="tech-skills-item"><i class="fas fa-cube"></i><span class="tech-skills-item-text"> WebPack</span></li> 
                    <!-- <li class="tech-skills-item"> <span class="tech-skills-item-text">Node.js</span></li>  -->
                </ul>
            </div>

            <!--Soft skills section-->
            <div class="soft-skills-section">
                <h3 class="sidebar-title">Soft Skills</h3>

                <ul class="soft-skills-list">
                    <li class="soft-skills-item"> <span class="soft-skills-item-text">Communicativeness</span></li> 
                    <li class="soft-skills-item"> <span class="soft-skills-item-text">Emotional intelligence</span></li> 
                    <li class="soft-skills-item"> <span class="soft-skills-item-text">GTD</span></li> 
                    <li class="soft-skills-item"> <span class="soft-skills-item-text">Teamwork</span></li> 
                    <li class="soft-skills-item"> <span class="soft-skills-item-text">Scrupulousness</span></li> 
                </ul>
            </div>

            <div class="languages-skills-section">
                <h3 class="sidebar-title">Languages</h3>

                <ul class="languages-skills-list">
                    <li class="language-skills-item"> 
                        <span class="language-skills-item-text">English</span>
                        <span class="level-lang">B1</span>
                    </li> 
                    <li class="language-skills-item"> 
                        <span class="language-skills-item-text">Polish</span>
                        <span class="level-lang">C1</span>
                    </li> 
                    <li class="language-skills-item"> 
                        <span class="language-skills-item-text">Ukrainian</span>
                        <span class="level-lang">C2</span>
                    </li> 
                    <li class="language-skills-item"> 
                        <span class="language-skills-item-text">Russian</span>
                        <span class="level-lang">C2</span>
                    </li> 
                </ul>
            </div>

        </aside>

        <!--CV content section-->
        <div class="main-content-section">

            <!--about me section-->  
            <div class="about-me-section">
                <h2 class="about-me-profession">Front-End Developer</h2>
                <h1 class="about-me-name">Anton Melnychuk</h1>  

                <p class="about-me-description">Collected and confident
                    in my abilities, I have a creative approach to the 
                    implementation of the technical assignment, self-discipline and the 
                    ability to work in a team. I am always in touch 
                    and never disappear anywhere. Open to learning 
                    and continuous development, I have a desire to 
                    achieve results, responsible and
                    conscientious in the performance of assigned duties.
                    I'm looking for my first job and experience.
                </p> 
            </div>

            <!--my projects section-->
            <div class="my-project-section">
                <h3 class="main-content-title">Projects</h3>

                <ol class="my-project-list">
                
                    <li class="my-project-item">
                        <span class="my-project-text">
                            <a href="https://www.max-car.com.ua" class="my-project-link" >https://www.max-car.com.ua</a>
                            ........
                            <span class="my-project-brackets" >[</span> HTML5, CSS3, JavaScript <span class="my-project-brackets">]</span> 
                        </span>
                    </li>

                    <li class="my-project-item">
                        <span class="my-project-text">
                            <a href="https://antonmelnychuk.com" class="my-project-link" >https://antonmelnychuk.com</a>
                            .......
                            <span class="my-project-brackets" >[</span> HTML5, CSS3, JavaScript <span class="my-project-brackets">]</span> 
                        </span>
                    </li>
                    
                     <li class="my-project-item"> 
                        <span class="my-project-text">
                        <a href="https://guitar-shop-site.web.app" class="my-project-link">https://guitar-shop-site.web.app</a>
                        ...
                        <span class="my-project-brackets" >[</span> HTML5, CSS3, JS, JSON <span class="my-project-brackets"> ]</span>
                        </span>
                    </li>
                    
                    <li class="my-project-item">
                        <span class="my-project-text">
                        <a href="https://react-site-a.firebaseapp.com" class="my-project-link">https://react-site-a.firebaseapp.com</a>
                        ................................
                        <span class="my-project-brackets">[ </span> React.js <span class="my-project-brackets"> ]</span> 
                        </span>
                    </li> 

                </ol>

            </div>

            <!--my work experience-->
            <div class="my-work-experience">
                <h3 class="main-content-title">Work experience</h3>

                <!--Company 3-->
                <div class="my-work-experience-company-block">
                    <h4 class="my-work-experience-position">Front-End Developer <span class="my-work-experience-company"> Freelance </span></h4>
                    <p class="my-work-experience-period">September 2028 - up to now <span class="divider">|</span>  Country</p>

                    <ul class="my-work-experience-duties">
                        <li class="my-work-experience-duty">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li> 
                        <li class="my-work-experience-duty">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li class="my-work-experience-duty">Risus commodo viverra maecenas.</li> 
                        <li class="my-work-experience-duty">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li> 
                    </ul>
                </div>

                <!--Company 2-->
                <div class="my-work-experience-company-block">
                    <h4 class="my-work-experience-position">Manager <span class="my-work-experience-company"> xxxxxxxxxxx </span></h4>
                    <p class="my-work-experience-period">March 2024 - October 2028   <span class="divider">|</span>   Country</p>

                    <ul class="my-work-experience-duties">
                        <li class="my-work-experience-duty">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod labore et dolore magna aliqua. </li> 
                        <li class="my-work-experience-duty">Quis ipsum suspendisse ultrices gravida.</li>
                        <li class="my-work-experience-duty">Risus commodo viverra maecenas.</li>        
                    </ul>
                </div>

                <!--Company 1-->
                <div class="my-work-experience-company-block">
                    <h4 class="my-work-experience-position">Manager <span class="my-work-experience-company"> xxxxxxxxxxx </span> </h4>
                    <p class="my-work-experience-period">June 2021 - February 2024   <span class="divider">|</span>   Country</p>

                    <ul class="my-work-experience-duties">
                    <li class="my-work-experience-duty">Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </li> 
                    <li class="my-work-experience-duty">Quis ipsum suspendisse ultrices gravida.</li>
                    <li class="my-work-experience-duty">Risus commodo viverra maecenas.</li>     
                    </ul>
                </div>

            </div>

            <!--Education-->
            <div class="my-education">
                <h3 class="main-content-title">Education</h3>

                <div class="edu1">
                    <h4 span class="my-education-company">University of Economics and Innovation in Lublin</span></h4>
                    <h4>Logistics</h4>
                    <h4 class="edu-text">Spec. Logistics systems engineering</h4>
                    <h4 class="edu-text">Educational level: engineer</h4>
                    <p class="my-work-experience-period">October 2015 - April 2019   <span class="divider">|</span>   Poland</p>
                </div>
                <div class="edu2">
                    <h4 span class="my-education-company">WSB University in Warsaw</span></h4>
                    <h4>Economics</h4>
                    <h4 class="edu-text">Spec. National and international logistics management</h4>
                    <h4 class="edu-text">Educational level: master</h4>
                    <p class="my-work-experience-period">October 2019 - October 2021   <span class="divider">|</span>   Poland</p>
                </div>
                <div class="edu3">
                    <h4 span class="my-education-company">Web Academy</span></h4>
                    <h4>Frontend Development</h4>
                    <p class="my-work-experience-period">June 2021 - August 2021   <span class="divider">|</span>   Ukraine</p>
                </div>

            </div>

        </div>

    </div>

    <div class="clause">
        <p>
            I agree to the processing of personal data provided in this document for realising the recruitment process pursuant to the Personal Data
            Protection Act of 10 May 2018 (Journal of Laws 2018, item 1000) and in agreement with Regulation (EU) 2016/679 of the European
            Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on
            the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation).
        </p>
    </div>

</div>

<!-- Portfolio -->

<div class="portfolio" id="portfolio">
    <div class="portfolio-title">
        <h2><i class="far fa-images"></i></h2>
        <h2 class="lang-portfolio-title">RECENTLY DEVELOPED</h2>
    </div>
    <div class="portfolio-container">
        <div class="gallery mySwiper">
            <div class="gallery-list swiper-wrapper">

                <div class="gallery-item swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/www.max-car.com.ua.jpg" alt="img">
                    <div class="gallery-text">
                        <div class="flex">
                            <div class="flex-main">
                                <h3 class="gallery-title lang-gallery-title">Car sales site</h3>
                                <p>2021</p>
                            </div>
                            <div class="gallery-text-info">
                                <div><span>HTML</span></div>
                                <div><span>CSS</span></div>
                                <div><span>Javascript</span></div>
                                <div><span>Jquery</span></div>
                            </div>
                        </div>
                        <a href="https://www.max-car.com.ua" target="_blank" class="gallery-button lang-gallery-button"><i class="fas fa-door-open"></i> VISIT</a>
                    </div>
                </div>

                <div class="gallery-item swiper-slide">
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
                                <br>
                                <span>Realtime Database</span>
                            </div>
                        </div>
                        <a href="https://react-hooks-note-app-6707b.web.app" target="_blank" class="gallery-button"><i class="fas fa-door-open"></i> VISIT</a>
                    </div>
                </div>

                <div class="gallery-item swiper-slide">
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
                        <a href="https://react-site-a.firebaseapp.com" target="_blank" class="gallery-button"><i class="fas fa-door-open"></i> VISIT</a>
                    </div>
                </div>

                <div class="gallery-item swiper-slide">
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
                        <a href="https://guitar-shop-site.web.app" target="_blank" class="gallery-button"><i class="fas fa-door-open"></i> VISIT</a>
                    </div>
                </div>

            </div>
        </div>
        
        <a href="<?php echo get_site_url() . '/portfolio'; ?>" class="button-portfolio lang-button-portfolio" target="_blank">Open portfolio</a>

    </div>
</div>

<!-- Contacts -->

<div class="contact" id="contact">
    <div class="contact-title">
        <h2><i class="fas fa-address-book"></i></h2>
        <h2 class="lang-contact-title2">CONTACT ME</h2>
    </div>
    <div class="contact-container">
        <div class="contact-block">
            <div class="contact-text lang-contact-text">
                <p> If you want to contact me, talk to me about
                    collaborating on the project or have any
                    questions, write to me.
                </p>
            </div>
            <div class="phone-email">
                <a class="phone" href="tel:+48530883095"><i class="fas fa-phone"></i> +48 530 883 095</a>
                <br>
                <a class="email" target="_blank" href="mailto:antonmelnychuk1@gmail.com"><i class="far fa-envelope"></i> antonmelnychuk1@gmail.com</a>
            </div>
        </div>
        
        <div class="icon-container">
            <span class="lang-icon-container">I'm on social media:</span> 
            <div class="social-container">

                <div class="social instagram">
                    <a href="https://www.instagram.com/anton_melnychuk/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <div class="social facebook">
                    <a href="https://www.facebook.com/anton.mel.43" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>    
                </div>

                <div class="social whatsapp">
                    <a href="https://wa.me/+48530883095" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
                </div>

                <div class="social telegram">
                    <a href="https://t.me/MelnychukA" target="_blank"><i class="fab fa-telegram-plane fa-2x"></i></a>
                </div>
                
                <div class="social viber">
                    <a href="viber://chat?number=%2B380959321297" target="_blank"><i class="fab fa-viber fa-2x"></i></a>
                </div>
                
                <div class="social linkedin">
                    <a href="https://www.linkedin.com/in/anton-melnychuk-02817a218" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
                </div>

                <div class="social github">
                    <a href="https://github.com/antonmelnychuk1" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                </div>
                
            </div>
        </div> 
    </div>
</div>

<!-- Preloader -->

<div id="preloader" class="preloader">
    <div class="loader"></div>
</div>


<?php get_footer(); ?>