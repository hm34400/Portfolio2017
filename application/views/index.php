<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Hicham El Yaagoubi">
    <title>PORTFOLIO</title>
    <link href="<?php echo base_url();?>../ressources/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>../ressources/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>../ressources/template/css/animate.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>../ressources/template/css/lightbox.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>../ressources/template/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url();?>../ressources/template/css/responsive.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="<?php echo base_url();?>../ressources/template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>../ressources/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>../ressources/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>../ressources/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>../ressources/template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<!--
Reseau Sociaux
-->
<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="https://www.facebook.com/profile.php?id=100012291970981"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/hicham-el-yaagoubi-72035713a/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
            <!--
            BarreDeNav
            -->
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1><img src="<?php echo base_url();?>../ressources/template/images/H.png" alt="logo" class="img-responsive" height="125px" width="125px"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="">Home</a></li>
                        <li class="active"><a href="">Projet</a></li>
                        <li class="active"><a href="">Experience</a></li>
                        <li class="active"><a href="">Contact</a></li>                                            
                    </ul>
                </div>

            </div>
        </div>
    </header>
    <!--
    Presentation
    -->

    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>PORTFOLIO</h1>
                        <?php foreach ($textP as $textPres): ?>
                        <p><?php echo $textPres['textIntro']; ?></p>
                        <?php endforeach;?>
                        
                        
                        <?php foreach ($skill1 as $text): ?>
                        <p><?php echo $text['langage']; ?></p>
                        <?php endforeach;?>
                        <?php foreach ($skill2 as $text): ?>
                        <p><?php echo $text['langage']; ?></p>
                        <?php endforeach;?>
                        <?php foreach ($back as $text): ?>
                        <p><?php echo $text['name']; ?></p>
                        <?php endforeach;?>
                    </div>
                    <img src="<?php echo base_url();?>../ressources/template/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="<?php echo base_url();?>../ressources/template/images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="<?php echo base_url();?>../ressources/template/images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="<?php echo base_url();?>../ressources/template/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="<?php echo base_url();?>../ressources/template/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->
    <!--
    Diplome
    -->
    <section id="services">
        <div class="container">
            
                        
                        
            <div class="row">
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="<?php echo base_url();?>../ressources/template/images/home/certificate.png" alt="">
                        </div>
                        <?php foreach ($dip1 as $textPres): ?>
                        <h2><?php echo $textPres['diplome']; ?></h2>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                            <img src="<?php echo base_url();?>../ressources/template/images/home/certificate.png" alt="">
                        </div>
                        <?php foreach ($dip2 as $textPres): ?>
                        <h2><?php echo $textPres['diplome']; ?></h2>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="<?php echo base_url();?>../ressources/template/images/home/certificate.png" alt="">
                        </div>
                        <?php foreach ($dip3 as $textPres): ?>
                        <h2><?php echo $textPres['diplome']; ?></h2>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
                        
        </div>
    </section>
    <!--/#services-->
<!--
Projet
-->
    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Mes Projets</h1>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="<?php echo base_url();?>../ressources/template/images/home/youtube.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <?php foreach ($pro1 as $text): ?>
                        <h2><?php echo $text['detail']; ?>/<?php echo $text['name']; ?></h2>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <?php foreach ($pro2 as $text): ?>
                        <h2><?php echo $text['detail']; ?>/<?php echo $text['name']; ?></h2>
                        <?php endforeach;?>
                        </div>
                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="<?php echo base_url();?>../ressources/template/images/home/web.png" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="single-features">
                    <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <img src="<?php echo base_url();?>../ressources/template/images/home/web.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                        <?php foreach ($pro3 as $text): ?>
                        <h2><?php echo $text['detail']; ?>/<?php echo $text['name']; ?></h2>
                        <?php endforeach;?></div>
                </div>
            </div>
        </div>
    </section>
     <!--/#features-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="<?php echo base_url();?>../ressources/template/images/home/www.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Skills</h1>
                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url();?>../ressources/template/images/home/icons8-Html 5.png" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url();?>../ressources/template/images/home/icons8-CSS3.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url();?>../ressources/template/images/home/icons8-JavaScript.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url();?>../ressources/template/images/home/icons8-MySQL Logo.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url();?>../ressources/template/images/home/icons8-PHP Logo.png" class="img-responsive" alt=""></a>
                        </div>
                         <div class="col-xs-3 col-sm-2">
                            <a href="#"><img src="<?php echo base_url();?>../ressources/template/images/home/icons8-Java-50.png" class="img-responsive" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!--/#clients-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="<?php echo base_url();?>../ressources/template/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contact</h2>
                        <address>
                        E-mail: <a href="mailto:hichamelyaagoubi34@gmail.com">hichamelyaagoubi34@gmail.com</a> <br> 
                        Tèl: 0612345678 <br> 
                        </address>

                        <h2>Adresse</h2>
                        <address>
                        174 avenue général sarrail <br>  
                        34400 Lunel <br> 
                        France <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Envoyer un message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Nom">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Votre texte ici"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="<?php echo base_url();?>../ressources/template/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>../ressources/template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>../ressources/template/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>../ressources/template/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>../ressources/template/js/main.js"></script>   
</body>
</html>