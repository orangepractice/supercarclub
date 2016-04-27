<?php
/*
Template Name:Ferrari
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Supercar Club!　Ferrari</title>
	
	<!-- core CSS -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/animate.min.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_directory' ); ?>/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/responsive.css" rel="stylesheet">
	
	z
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_directory' ); ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php bloginfo( 'template_directory' ); ?>/index.html">Home</a></li>
                        <li><a href="/ferrari">Ferrari</a></li>
                        <li><a href="<?php bloginfo( 'template_directory' ); ?>/lamborghini">Lamborghini</a></li>
                        <li><a href="<?php bloginfo( 'template_directory' ); ?>/mclaren">McLaren</a></li>
                        <li><a href="<?php bloginfo( 'template_directory' ); ?>/contactus">お問い合わせ</a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Ferrari</h2>
               <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Creative</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Photography</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Web Development</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/Ferrari/item1.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">488GTB</a></h3>
                                    <p>新車価格:3070万円</p>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/Ferrari/item2.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">458イタリア</a></h3>
                                    <p>新車価格:2920万円</p>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/Ferrari/item3.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">ラ フェラーリ</a></h3>
                                    <p>世界限定499台　価格:1億6000万円</p>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/Ferrari/item4.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">F12ベルリネッタ</a></h3>
                                    <p>新車価格:3730万円</p>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item joomla html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/Ferrari/item5.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">F40</a></h3>
                                    <p>新車価格:4500万円　最高価格:2億円超</p>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/Ferrari/item6.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">テスタロッサ</a></h3>
                                    <p>新車価格:2400万円　現在価値:5000万円超</p>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/Ferrari/item7.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">ディーノ246GT</a></h3>
                                    <p>72年当時の新車価格:900万円　現在価値:約5000万 </p>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item wordpress html bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/Ferrari/item8.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">125S</a></h3>
                                    <p>不明</p>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 Orangeアカデミー
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li class="active"><a href="<?php bloginfo( 'template_directory' ); ?>/index.html">Home</a></li>
                        <li><a href="/ferrari">Ferrari</a></li>
                        <li><a href="<?php bloginfo( 'template_directory' ); ?>/lamborghini">Lamborghini</a></li>
                        <li><a href="<?php bloginfo( 'template_directory' ); ?>/mclaren">McLaren</a></li>
                        <li><a href="<?php bloginfo( 'template_directory' ); ?>/contactus">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/wow.min.js"></script>
</body>
</html>