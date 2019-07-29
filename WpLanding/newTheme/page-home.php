<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>" >
    <title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="краткое описание страницы">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
   

    <?
        wp_head();
    ?>

</head>
<body>
    <div class = "progression"></div>

    <header class="header" id="Header">
        <div id="particles-js"></div>
        <div class="header-wrap section section_1 container">
            <div class="row align-items-center header-top">
                <div class="col col-xl-4 col-lg-4 col-md-2  col-sm-6 col-xs-12 logo-wrap"><span class="logo">Mini</span></div>
                <menu class="col col-xl-8 col-lg-8 col-md-10 col-sm-6 col-xs-12 menu-wrap">
                    <ul class="menu">
                        <li class="menu-item"><a class="menu-item-just" href="#About">About</a></li>
                        <li class="menu-item"><a class="menu-item-just" href="#Team">Team</a></li>
                        <li class="menu-item"><a class="menu-item-just" href="#Services">Services</a></li>
                        <li class="menu-item"><a class="menu-item-just" href="#Works">Works</a></li>
                        <li class="menu-item"><a class="menu-item-just" href="#Blog">Blog</a></li>
                        <li class="menu-item"><a class="menu-item-just" href="#Contact">Contact</a></li>
                    </ul>
                </menu>
            </div>
            <div class="title-wrap">
                <h1 class="title title_1">
                    Best Creative Studio<br />
                    <strong class="title-strong">
                        <span class="title-strong-part">Design /</span>
                        <span class="title-strong-part">Branding /</span>
                        <span class="title-strong-part">WordPres</span>
                    </strong><br />
                    We Make Great Ideas Happen
                </h1>
            </div>

            <button class="btn btn_orange">Learn more</button>

            <div class="header-toggle row">
                <div class="toggle toggle_header col">
                    <i data-number="1" class="toggle-item_header toggle-item toggle-item-active fas fa-circle"></i>
                    <i data-number="2" class="toggle-item_header toggle-item fas fa-circle"></i>
                    <i data-number="3" class="toggle-item_header toggle-item fas fa-circle"></i>
                </div>
            </div>
        </div>
    </header>

    <section class="section section_2" id="About">
        <div class="container">
         
            <div class="link link_about">

                <h3 class="link-title link-title_about">
                    <?php the_field('link-title_about'); ?>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                </h3>
                <p class="link-text link-text_about">
                    <?php the_field('link-text_about'); ?>
                </p>
                
            </div>



            <div class="our-wrap our-wrap_story row align-items-center">
                <div class="our our_story col-12 col-xl-7 col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="our-i-wrap"><i class="our-i far fa-lightbulb"></i></div>
                    <div class="our-main">
                        <h4 class="our-title our-title_1">Our Story</h4>
                        <p class="our-desc">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>
                        <p class="our-text">
                            Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                            Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                        </p>
                    </div>
                </div>
                <div class="our-img_story col-12 col-xl-5 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <i class="our-img_story-i fas fa-images"></i>
                </div>
            </div>
            <div class="our-wrap our-wrap_skills row">
                <div class="our-img-wrap col">
                    <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/iPad.jpg" alt="alt" class="our-img our-img_2" />
                    
                </div>
                <div class="our our_skills col">
                    <div class="our-wrapper">
                        <div class="our-i-wrap"><i class="our-i fas fa-sliders-h"></i></div>
                        <div class="our-main">
                            <h4 class="our-title">Our Skills</h4>
                            <p class="our-text">
                                Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
                            </p>
                        </div>
                    </div>
                    <div class="progress-box">
                        <label class="progress-item">
                            Design <span class="progress-per">/ 88%</span><br />
                            <progress class="progress-bar progress-bar_1"></progress>
                        </label>
                        <label class="progress-item">
                            Development <span class="progress-per">/ 76%</span><br />
                            <progress class="progress-bar progress-bar_2"></progress>
                        </label>
                        <label class="progress-item">
                            WordPress <span class="progress-per">/ 81%</span><br />
                            <progress class="progress-bar progress-bar_3"></progress>
                        </label>
                        <label class="progress-item">
                            Drupal <span class="progress-per">/ 71%</span><br />
                            <progress class="progress-bar progress-bar_4"></progress>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="blockquote-outer">
            <div class="container">
                <blockquote class="blockquote">
                    <i class="blockquote-i fas fa-quote-left"></i>
                    Simplicity is about subtracting the obvious
                    and adding the meaningful
                    <i class="blockquote-i fas fa-quote-right"></i>
                </blockquote>
                <cite class="blockquote-cite">
                    John Maeda
                </cite>
            </div>
        </div>
        
    </section>


    <section class="section section_3" id="Team">
        <div class="container container_team">
            <div class="link link_team">
                <h3 class="link-title">Team
                <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                </h3>
                <p class="link-text">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                </p>
            </div>


            <div class="row folk-outer">

            <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 folk">
           
           
            <?php foreach(getReviews() as $review): ?>
            
            
                    <div class="folk-img"><i class="folk-i fas fa-user-tie"></i></div>
                    <div class="folk-name"><?php echo $review['name'] ?></div>
                    <div class="folk-profession"><?php echo $review['job'] ?></div>
                    <div class="folk-desc"><?php echo $review['text'] ?></div>
                    <div class="feature">
                        <i class="feature-item fab fa-twitter"></i>
                        <i class="feature-item fab fa-facebook-f"></i>
                        <i class="feature-item fab fa-dribbble"></i>
                        <i class="feature-item fab fa-google-plus-g"></i>
                        <i class="feature-item fab fa-linkedin-in"></i>
                    </div>


                <?php endforeach ?>
            
            

                    



                </div>



                
                <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 folk">
                    <div class="folk-img"><i class="folk-i fas fa-user-tie"></i></div>
                    <div class="folk-name">Jesmine Doe</div>
                    <div class="folk-profession">Designer</div>
                    <div class="folk-desc">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </div>
                    <div class="feature">
                        <i class="feature-item fab fa-twitter"></i>
                        <i class="feature-item fab fa-facebook-f"></i>
                        <i class="feature-item fab fa-dribbble"></i>
                        <i class="feature-item fab fa-google-plus-g"></i>
                        <i class="feature-item fab fa-linkedin-in"></i>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 folk">
                    <div class="folk-img"><i class="folk-i fas fa-user-tie"></i></div>
                    <div class="folk-name">Martin Doe</div>
                    <div class="folk-profession">Developer</div>
                    <div class="folk-desc">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </div>
                    <div class="feature">
                        <i class="feature-item fab fa-twitter"></i>
                        <i class="feature-item fab fa-facebook-f"></i>
                        <i class="feature-item fab fa-dribbble"></i>
                        <i class="feature-item fab fa-google-plus-g"></i>
                        <i class="feature-item fab fa-linkedin-in"></i>
                    </div>
                </div>
                <div class="col-12 col-xl-3 col-lg-3 col-md-6 col-sm-6 folk">
                    <div class="folk-img"><i class="folk-i fas fa-user-tie"></i></div>
                    <div class="folk-name">Anthony Doe</div>
                    <div class="folk-profession">Photographer</div>
                    <div class="folk-desc">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </div>
                    <div class="feature">
                        <i class="feature-item fab fa-twitter"></i>
                        <i class="feature-item fab fa-facebook-f"></i>
                        <i class="feature-item fab fa-dribbble"></i>
                        <i class="feature-item fab fa-google-plus-g"></i>
                        <i class="feature-item fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>

        </div>



       
        <div class="merit-outer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 col-sm-6 merit">
                        <div><i class="merit-i fas fa-coffee"></i></div>
                        <div class="merit-sum">
                            <span class="merit-sum-strong merit-quantity ">6</span>
                            <span class="merit-sum-strong">K+</span><br />
                            Coffees
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-sm-6 merit">
                        <div><i class="merit-i fas fa-network-wired"></i></div>
                        <div class="merit-sum">
                            <span class="merit-sum-strong merit-quantity ">543</span><br />
                            Projects
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-sm-6 merit">
                        <div><i class="merit-i far fa-user"></i></div>
                        <div class="merit-sum">
                            <span class="merit-sum-strong merit-quantity ">335</span><br />
                            Clients
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-sm-6 merit">
                        <div><i class="merit-i far fa-thumbs-up"></i></div>
                        <div class="merit-sum">
                            <span class="merit-sum-strong merit-quantity ">225</span><br />
                            Awards
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <main class="section section_4" id="Services">
        <div class="container">
            <div class="link link_service">
                <h3 class="link-title">Service
                <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                </h3>
                <p class="link-text">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                </p>
            </div>
            <div class="row service-outer">
                <div class="col-12 col-xl-4 col-md-4 service">
                    <div>
                        <i class="service-i far fa-star"></i>
                    </div>
                    <h4 class="service-title">Designing</h4>
                    <div class="service-desc">Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per</div>
                </div>
                <div class="col-12 col-xl-4 col-md-4 service">
                    <div>
                        <i class="service-i fas fa-flask"></i>
                    </div>
                    <h4 class="service-title">Designing</h4>
                    <div class="service-desc">Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per</div>
                </div>
                <div class="col-12 col-xl-4 col-md-4  service">
                    <div>
                        <i class="service-i fas fa-globe"></i>
                    </div>
                    <h4 class="service-title">Designing</h4>
                    <div class="service-desc">Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per</div>
                </div>
            </div>

            <div class="row align-items-center price-wrap">
                <div class="col-12 col-xl-4 col-lg-3 col-md-12 service service_price">
                    <div>
                        <i class="service-i fas fa-money-bill-wave"></i>
                    </div>
                    <h4 class="service-title">Packege Pricing</h4>
                    <div class="service-desc">
                        Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec
                        sagittis sem nibh id elit.
                    </div>
                </div>
                <div class="col-12 col-xl-8 col-lg-9 col-md-12 price-outer">
                    

                <?php foreach(getPricing() as $review): ?>
                    
                    <div class="price">
                        <div class="price-title">
                            <span><?php echo $review['title'] ?></span><br />
                            $<span><?php echo $review['price'] ?></span>
                        </div>
                        <div class="price-desc"><?php echo $review['desc-first'] ?></div>
                        <div class="price-desc"><?php echo $review['desc-second'] ?></div>
                        <div class="price-desc"><?php echo $review['desc-third'] ?></div>
                        <div class="price-desc"><?php echo $review['desc-fourth'] ?></div>
                        <div class="price-desc price-desc-btn"><button class="btn btn_white">Purchase</button></div>
                    </div>

                <?php endforeach ?>

                   
                    <div class="price ">
                        <div class="price-title">
                            <span>Gold</span><br />
                            $99
                        </div>
                        <div class="price-desc">First Description</div>
                        <div class="price-desc">Second Description</div>
                        <div class="price-desc">Third Description</div>
                        <div class="price-desc">Fourth Description</div>
                        <div class="price-desc price-desc-btn"><button class="btn btn_white">Purchase</button></div>
                    </div>
                    <div class="price">
                        <div class="price-title">
                            <span>Silver</span><br />
                            $65
                        </div>
                        <div class="price-desc">First Description</div>
                        <div class="price-desc">Second Description</div>
                        <div class="price-desc">Third Description</div>
                        <div class="price-desc">Fourth Description</div>
                        <div class="price-desc price-desc-btn"><button class="btn btn_white">Purchase</button></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="quote">
            <div class="container">
                <div class="quote-slider">

                    <div class="quote-slide">
                        <cite class="quote-name">Maria Jones</cite>
                        <blockquote class="quote-text">
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                            auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”
                        </blockquote>
                        <div class="quote-img-wrap"><img class="quote-img" src="<?php echo NEWTHEME_IMG_DIR; ?>people/Layer_15.jpg" alt="Alternate Text" /></div>
                    </div>
                    <div class="quote-slide">
                        <cite class="quote-name">Maria Jones</cite>
                        <blockquote class="quote-text">
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                            auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”
                        </blockquote>
                        <div class="quote-img-wrap"><img class="quote-img" src="<?php echo NEWTHEME_IMG_DIR; ?>people/Layer_15.jpg" alt="Alternate Text" /></div>
                    </div>
                    <div class="quote-slide">
                        <cite class="quote-name">Maria Jones</cite>
                        <blockquote class="quote-text">
                            “Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                            auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.”
                        </blockquote>
                        <div class="quote-img-wrap"><img class="quote-img" src="<?php echo NEWTHEME_IMG_DIR; ?>people/Layer_15.jpg" alt="Alternate Text" /></div>
                    </div>

                <?php foreach(getQuote() as $reviews): ?>
                    <div class="quote-slide">
                        <cite class="quote-name"><?php echo $reviews['title'] ?></cite>
                        <blockquote class="quote-text">
                        <?php echo $reviews['content'] ?>
                        </blockquote>
                        <div class="quote-img-wrap"><img class="quote-img" src="<?php echo $reviews['thumbnail'] ?>" alt="Alternate Text" /></div>
                    </div>
                <?php endforeach ?>
                </div>
                
            </div>
        </div>
    </main>

    <section class="section section_5" id="Works">
        <div class="container">
            <div class="link link_portfolio">
                <h3 class="link-title">Portfolio
                <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                </h3>
                <p class="link-text">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                </p>
            </div>
            <?php 
                echo do_shortcode('[slick-slider design="design-1" image_fit="true" image_size="large" autoplay="false"]');
                ?>

            <div class="card-outer">
                <ul class="menu menu_works row">
                    <li class="menu-item menu-item_works"><a class="menu-item-just menu-item-just_works" href="#">All Work</a></li>
                    <li class="menu-item menu-item_works"><a class="menu-item-just menu-item-just_works" href="#">Graphics</a></li>
                    <li class="menu-item menu-item_works"><a class="menu-item-just menu-item-just_works" href="#">WebDesign</a></li>
                    <li class="menu-item menu-item_works"><a class="menu-item-just menu-item-just_works" href="#">Branding</a></li>
                    <li class="menu-item menu-item_works"><a class="menu-item-just menu-item-just_works" href="#">Video</a></li>
                    <li class="menu-item menu-item_works"><a class="menu-item-just menu-item-just_works" href="#">Photography</a></li>
                </ul>

                <div class="card-wrap row">

                <?php foreach(getPortfolio() as $portfolio): ?>
            
                <div class="card col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card-img-wrap">
                        <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_7.jpg" alt="alt" class="card-img" />
                        </div>
                        <div class="card-title"><?php echo $portfolio['title'] ?></div>
                        <div class="card-desc"><?php echo $portfolio['job'] ?></div>
                    </div>

                <?php endforeach ?>
                    



                    <div class="card col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card-img-wrap">
                            <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_7.jpg" alt="alt" class="card-img" />
                        </div>                        <div class="card-title">Project Title Here</div>
                        <div class="card-desc">Photography</div>
                    </div>
                    <div class="card col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card-img-wrap">
                            <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_7.jpg" alt="alt" class="card-img" />
                        </div>                        <div class="card-title">Project Title Here</div>
                        <div class="card-desc">Branding</div>
                    </div>
                    <div class="card col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card-img-wrap">
                            <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_7.jpg" alt="alt" class="card-img" />
                        </div>                        <div class="card-title">Project Title Here</div>
                        <div class="card-desc">Graphics</div>
                    </div>
                    <div class="card col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card-img-wrap">
                            <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_7.jpg" alt="alt" class="card-img" />
                        </div>                        <div class="card-title">Project Title Here</div>
                        <div class="card-desc">Web Design</div>
                    </div>
                    <div class="card col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card-img-wrap">
                            <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_7.jpg" alt="alt" class="card-img" />
                        </div>                        <div class="card-title">Project Title Here</div>
                        <div class="card-desc">Video</div>
                    </div>
                    <div class="card col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card-img-wrap">
                            <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_7.jpg" alt="alt" class="card-img" />
                        </div>                        <div class="card-title">Project Title Here</div>
                        <div class="card-desc">Photography</div>
                    </div>
                    <div class="card col-12 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card-img-wrap">
                            <img src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_7.jpg" alt="alt" class="card-img" />
                        </div>                        <div class="card-title">Project Title Here</div>
                        <div class="card-desc">Branding</div>
                    </div>
                </div>


            </div>

        </div>

        
        <div class="blockquote-outer mark">
            <div class="container ">
            <?php foreach(getMark() as $reviews): ?>
                <i class="mark-i fab fa-twitter"></i>
                <blockquote class="mark-quote">
                <?php echo $reviews['mark-content'] ?>
<!--                 Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh
 -->                <cite class="mark-cite">
                        <?php echo $reviews['mark-href'] ?>
                        <!-- ow.ly/ttlwd -->
                    </cite>
                </blockquote>
                
                <div class="mark-time">
                Опубликовано: 
                <?php echo $reviews['time'] ?>
                    <!-- 3 hours ago -->
                </div>
                <?php endforeach ?>
            </div>
        </div>

    </section>

    <section class="section section_6" id="Blog">
        <div class="container">
            <div class="link link_blog">
                <h3 class="link-title">Blog
                <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                </h3>
                <p class="link-text">
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                </p>
            </div>
            <div class="elem-outer row">


            <?php foreach(getBlogPost() as $review): ?>
            
            
                <div class="elem col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="elem-work">
                    <img class ='elem-work-img' src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_4.jpg" alt="alt">
                        <h5 class="elem-title"><?php echo $review['title'] ?></h5>
                    </div>
                    <div class="elem-wrap">
                        <div class="elem-desc">
                            <span>21 Feb ‘14</span><br />
                            <span>John Doe</span><br />
                            <span>24 Comments</span>
                        </div>
                        <div class="elem-wrapper">
                            <div class="elem-text"><?php echo $review['content'] ?></div>
                            <button class="btn btn_white elem-btn">Read On</button>
                        </div>
                    </div>
                </div>



        <?php endforeach ?>



                



                <div class="elem col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="elem-work">
                        <img class ='elem-work-img' src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_4.jpg" alt="alt">
                        <h5 class="elem-title">Awesome Blog Post Title Goes Here</h5>
                    </div>
                    <div class="elem-wrap">
                        <div class="elem-desc">
                            21 Feb ‘14<br />
                            John Doe<br />
                            24 Comments
                        </div>
                        <div class="elem-wrapper">
                            <div class="elem-text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</div>
                            <button class="btn btn_white elem-btn">Read On</button>
                        </div>
                    </div>
                </div>
                <div class="elem col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="elem-work">
                        <img class ='elem-work-img' src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_4.jpg" alt="alt"> 
                        <h5 class="elem-title">Awesome Blog Post Title Goes Here</h5>
                    </div>
                    <div class="elem-wrap">
                        <div class="elem-desc">
                            21 Feb ‘14<br />
                            John Doe<br />
                            24 Comments
                        </div>
                        <div class="elem-wrapper">
                            <div class="elem-text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</div>
                            <button class="btn btn_white elem-btn">Read On</button>
                        </div>
                    </div>
                </div>
                <div class="elem col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="elem-work">
                        <img class ='elem-work-img' src="<?php echo NEWTHEME_IMG_DIR; ?>img/Layer_4.jpg" alt="alt">
                        <h5 class="elem-title">Awesome Blog Post Title Goes Here</h5>
                    </div>
                    <div class="elem-wrap">
                        <div class="elem-desc">
                            21 Feb ‘14<br />
                            John Doe<br />
                            24 Comments
                        </div>
                        <div class="elem-wrapper">
                            <div class="elem-text">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit.</div>
                            <button class="btn btn_white elem-btn">Read On</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="blockquote-outer client-outer">
            <div class="container">
                <div class="client-title">Our Clients</div>
                <div class="row client-wrap">

                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-3 client client-color">
                        <svg class="color-svg">
                            <circle class="color-circle color-circle_green" cx="40" cy="100" r="25" />
                            <circle class="color-circle color-circle_blue" cx="55" cy="125" r="25" />
                            <circle class="color-circle color-circle_red" cx="70" cy="100" r="25" />
                        </svg>
                        <div class="client-color-text"><span class="client-color-green">Co</span>lor</div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section section_7" id="Contact">
    <div class="container">
        <div class="link link_contact">
            <h3 class="link-title link-title_contact"><?php the_field('link_contact'); ?><!-- Contact -->
            <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
                    <span class="move-border"></span>
            </h3>
            <p class="link-text link_contact-text">
            <?php the_field('link_contact-text'); ?>
<!--                 
    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
 -->            </p>
        </div>
        <div class="form-outer row">
        <?php 
            echo do_shortcode('[contact-form-7 id="8" title="Контактная форма 1"]');
            ?>
            
            <div class="info col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="form-title">Contact Info</div>
                <p class="info-item info-item_text info-text">
                    <?php the_field('info-item_text'); ?>
                    <!-- 
                    Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat
                    -->
                </p>
                <div class="info-item info-item_addres">
                    <i class="info-item-i fas fa-map-marker-alt"></i><?php the_field('info-item_addres'); ?>
                    <!-- 13/2 Elizabeth St, Melbourne VIC 3000, Australia -->
                </div>
                <div class="info-item info-item_tel"><i class="info-item-i fas fa-phone"></i><?php the_field('info-item_tel'); ?>
                <!-- +61 3146 8728, +61 0987 6543 -->
                </div>
                <div class="info-item info-item_email"><i class="info-item-i fas fa-envelope"></i><?php the_field('info-item_email'); ?>
                <!-- support@envato.net -->
                </div>
            
            </div>
        </div>
    </div>

    </section>

    <footer class="footer"></footer>

    <div class="up" id="back-top">Up <i class="up-i fas fa-arrow-up"></i></div>

    <div id="page-preloader"><div class="contpre"><span class="spinner"></span><br>Подождите<br><small>идет загрузка</small></div></div>
        

    <?
        wp_footer();
    ?>        
</body>
</html>
