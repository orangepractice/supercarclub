<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>
  <!-- core CSS -->
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' ); ?>/css/responsive.css" rel="stylesheet">
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

<body class="homepage">
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"></div>
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

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>

            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(<?php bloginfo( 'template_directory' ); ?>/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                <h1 class="animation animated-item-1">Welcome to Supercar Club!
                                    </h1>
                                    <h1 class="animation animated-item-2">Ferrari</h1>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php bloginfo( 'template_directory' ); ?>/images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lamborghini</h1>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(<?php bloginfo( 'template_directory' ); ?>/images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">McLaren</h1>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>List of brands</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/portfolio/recent/item1.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Ferrari</a> </h3>
                                <p>フェラーリは、イタリア、モデナ県マラネッロに本社を置く自動車メーカーである。フィアットグループの傘下で、高級グランツーリスモ及び高級スポーツカーのみを製造している。</p>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/portfolio/recent/item2.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Lamborghini</a></h3>
                                <p>イタリアの自動車ブランド。1999年以降フォルクスワーゲングループに属す。</p>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/portfolio/recent/item3.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">McLaren</a></h3>
                                <p>1963年にブルース・マクラーレンにより設立されたイギリスのレーシング・チーム。レースチームの会社としてのマクラーレン・レーシングの一部であり、マクラーレン・グループの一角を為す。</p>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/portfolio/recent/item4.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Aston Martin</a></h3>
                                <p>1913年に設立された、イギリスの乗用車メーカー・ブランド。
高性能、高級車種を製造しており、映画007シリーズではボンドカーとして登場している。社名としては「アストンマーチン・ラゴンダ」が正式。</p>
                            </div> 
                        </div>
                    </div>
                </div>   
                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/portfolio/recent/item5.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Porsche</a></h3>
                                <p>ポルシェは、ドイツの自動車メーカーである。 本社はドイツ南西部のシュトゥットガルト。</p>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/portfolio/recent/item6.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Bugatti</a></h3>
                                <p>1909年、イタリア出身の自動車技術者、エットーレ・ブガッティがアルザス（当時ドイツ領）に設立した自動車会社。</p>
                            </div> 
                        </div>
                    </div>
                </div> 

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/portfolio/recent/item7.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Pagani Automobili</a></h3>
                                <p>創始者はアルゼンチン出身で、ランボルギーニに在籍していたデザイナーのオラチオ・パガーニ（Horacio Pagani ）。1992年に設立された。</p>
                            </div> 
                        </div>
                    </div>
                </div>   

                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?php bloginfo( 'template_directory' ); ?>/images/portfolio/recent/item8.jpg" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <h3><a href="#">Koenigsegg</a></h3>
                                <p>1994年、1971年生まれの実業家・クリスチャン・フォン・ケーニッグゼグによって設立された。</p>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

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