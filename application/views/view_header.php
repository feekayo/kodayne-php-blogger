<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html dir="ltr" lang="en-US">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        
        <title>For the love of movies</title>
        
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>style.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="<?php echo base_url(); ?>css/lessthen800.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="<?php echo base_url(); ?>css/lessthen600.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="<?php echo base_url(); ?>css/lessthen480.css" />
                                   
        <!-- CUSTOM STYLE -->                                                                        
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>css/custom-style.css" />
        
        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico" />
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico" />
        <!-- [favicon] end -->  
        
        <!-- MAIN FONT STYLE -->  
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz%3A400&amp;subset=latin%2Ccyrillic%2Cgreek" type="text/css" media="all" />      
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans" type="text/css" media="all" />    
	    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald" type="text/css" media="all" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz%3A200%2C400" type="text/css" media="all" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed%3A300%7CPlayfair+Display%3A400italic" type="text/css" media="all" />
        <!-- END MAIN FONT STYLE -->  
        
        <link rel="stylesheet" id="prettyPhoto-css" href="<?php echo base_url(); ?>css/prettyPhoto.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jquery-tipsy-css" href="<?php echo base_url(); ?>css/tipsy.css" type="text/css" media="all" />
        
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.tweetable.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.nivo.slider.pack.js"></script>  
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.flexslider.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.cycle.min.js"></script>  
        
        <!-- for accordion slider in staff page -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.hrzAccordion.js"></script>  
        
        <!-- for filterable effect in gallery and portfolio filterable page -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.quicksand.js"></script>  
        
        <!-- for portfolio slider -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.jcarousel.min.js"></script> 
        
        <!-- for the contact page -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/contact.js"></script>  
        
        <!-- SLIDER ELASTIC -->                                                               
        <link rel="stylesheet" id="slider-elastic-css" href="<?php echo base_url(); ?>css/slider-elastic.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.eislideshow.js"></script>
        
        <!-- SLIDER CYCLE -->                                                               
        <link rel="stylesheet" id="slider-cycle-css" href="<?php echo base_url(); ?>css/slider-cycle.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.slides.min.js"></script>
        
        <!-- SLIDER THUMBNAILS -->                                                               
        <link rel="stylesheet" id="slider-thumbnails-css" href="<?php echo base_url(); ?>css/slider-thumbnails.css" type="text/css" media="all" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.aw-showcase.js"></script>
        
        <!-- SLIDER FLASH -->                                                               
        <script type="text/javascript" src="<?php echo base_url(); ?>js/swfobject.js"></script>      
        
        <!-- SLIDER ELEGANT -->                                                               
        <link rel="stylesheet" id="slider-elegant-css" href="<?php echo base_url(); ?>css/slider-elegant.css" type="text/css" media="all" />
        
        <!-- SLIDER NIVO -->                                                               
        <link rel="stylesheet" id="slider-nivo-css" href="<?php echo base_url(); ?>css/slider-nivo.css" type="text/css" media="all" />     
        
        <!-- CUSTOM JAVASCRIPT -->                           
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.custom.js"></script>
    </head>
    
    <body class="image-sphere-style responsive">
    
        <!-- START SHADOW WRAPPER -->
        <div class="shadowBg group">
            
            <!-- START WRAPPER -->
            <div class="wrapper group">
                
                <!-- START TOPBAR -->
                <div id="topbar">
                    <div class="inner">
                        <ul class="topbar_searchbar">
                            <!--<form action=<?php echo base_url()."site/search";?> method="post">
                                    <input type="text" name="search" id="search" class="topbar_search" placeholder="explore public opinion..."/>
                                        <span class="topbar_arrow">
                                            <input type="submit" class="topbar_button" value="Search">
                                        </span>
                                </form>-->
                        </ul>
                        <ul class="topbar_links">
                        <?php    
                            
                          // checking if user is logged in
                          if($this->session->userdata('is_logged_in')){
                          
                              echo "<li>
                                    <a href=\"".base_url()."site/logout\">Logout</a>  
                                </li>";
                          
                          }else{
                              echo "<li>
                                      <a href=\"".base_url()."site/login\">Login</a>  
                                    </li>
                                        
                                    <li> |
                                      <a href=\"".base_url()."site/sign_up\">Sign Up</a>  
                                    </li>";
                          }
                        ?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <!-- end.inner -->
                </div>
                <!-- END TOPBAR -->   
                 
                <!-- START HEADER -->
                <div id="header" class="group">
                
                    <!-- START LOGO -->
                    <div id="logo" class="group">
                        <a href="#" title="Diverso"> 
                        <img src="<?php echo base_url(); ?>images/logo.png" alt="Logo Diverso" />
                        </a>              
                    </div>
                    <!-- END LOGO -->   
                    
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <ul class="level-1 white">
                            <li class="home">
                                <a href="<?php echo base_url(); ?>">HOME</a>
                            </li>
                            <li class="bookmark">
                                <a href="#">News</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo base_url(); ?>site/movie_news">Movie News</a></li>
                                    <li><a href="<?php echo base_url(); ?>site/tv_series_news"> TV Series News</a></li>
                                </ul>
                            </li>
                            <li class="burst">
                                <a href="<?php echo base_url(); ?>site/movies">Movies</a>
                            </li>
                            <li class="diap">
                                <a href="<?php echo base_url(); ?>site/series">Series</a>        
                            </li>
                                <?php    
                            
                                    // checking if user is logged in
                                    if($this->session->userdata('is_logged_in')){
                          
                                        echo "<li class=\"people\">
                                            <a href=\"".base_url()."site/profile/".$this->session->userdata('user_id')."\">Profile</a>  
                                            </li>";
                          
                                    }else{
                                        echo "<li class=\"people\">
                                                <a href=\"#\">Discover</a>
                                                <ul class=\"sub-menu\"><li>
                                            <a href=\"".base_url()."site/login\">Login</a>  
                                            </li>
                                        
                                            <li>
                                            <a href=\"".base_url()."site/sign_up\">Sign Up</a>  
                                            </li>
                                            </ul>
                                            </li>";
                                    }
                                ?>
                                
            
                            <?php
                                // checking if user is logged in
                                if($this->session->userdata('is_logged_in')){
                                    echo "<li class=\"folder\">
                                        <a href=\"#\">Create Content</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"".base_url()."site/create_news\">Report news</a></li>
                                                <li><a href=\"".base_url()."site/review_movies\">Review a movie</a></li>
                                                <li><a href=\"".base_url()."site/review_series\">Review tv Series</a></li>
                                            </ul>
                                    </li>";
                                }
                            ?>
                            <li class="email"><a href="<?php echo base_url(); ?>site/contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- END NAV -->   
                </div>
                <!-- END HEADER --> 