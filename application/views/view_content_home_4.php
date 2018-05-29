<!-- START SLIDER -->
                <div id="slider" class="cycle group">
                    <div class="slides_container">
                        
                        <!-- START PANEL -->
                        <div class="first slide align-center image-content-type">
                            <!-- HENTRY -->
                            <div class="hentry">
                                <h2>We want do <br /> something <span>of different</span>.</h2>
                            </div>
                            <!-- END HENTRY -->
                            <!-- IMAGE / VIDEO -->
                            <div class="featured-image"><img src="images/slider/cycle/slide16.png" width="802" height="276" alt="We want do  something of different." /></div>
                            <!-- END IMAGE / VIDEO -->
                            <div class="clear"></div>
                        </div>
                        <!-- END PANEL -->
                        
                        <!-- START PANEL -->
                        <div class="slide align-left image-content-type">
                            <!-- HENTRY -->
                            <div class="hentry">
                                <h2>Another amazing theme</h2>
                                <p>
                                <p>Nullam suscipit tincidunt gravida. Aliquam erat ligula, auctor ut pretium eget, volutpat a diam. Sed tincidunt, magna sed suscipit condimentum, turpis nunc cursus erat, ac lobortis <a href="#">dui sem a sapien. </a>Pellentesque a enim sapien, ac rutrum massa. </p>
                                <p>Nulla facilisi. Mauris id nibh augue. Phasellus ultricies convallis hendrerit. <strong>Etiam rutrum tempus</strong> faucibus. </p>
                                </p>   
                            </div>
                            <!-- END HENTRY -->
                            <!-- IMAGE / VIDEO -->
                            <div class="featured-image"><img src="images/slider/cycle/0026.png" width="603" height="273" alt="Another amazing theme" /></div>
                            <!-- END IMAGE / VIDEO -->
                            <div class="clear"></div>
                        </div>
                        <!-- END PANEL -->
                        
                        <!-- START PANEL -->
                        <div class="last slide align-right video-content-type">
                            <!-- HENTRY -->
                            <div class="hentry">
                                <h2>Also a video in your slider</h2>
                                <p>
                                <p>Praesent pretium accumsan nunc a aliquet. Vivamus est est, suscipit nec accumsan vel, <strong>tincidunt at nulla</strong>. Vestibulum posuere dictum risus, in pharetra magna rhoncus vel. Aliquam eleifend rhoncus dui, sit amet consequat <a href="#">mauris porttitor</a> eu. </p>
                                </p>   
                            </div>
                            <!-- END HENTRY -->
                            <!-- IMAGE / VIDEO -->
                            <div class="video-container">
                                <!-- change the ID of this class to change the video -->
                                <!-- leave this format: video-VIDEOSOURCE-IDVIDEO -->
                                <!-- for example the video is: http://www.youtube.com/watch?v=hyMqnJc1z9E -->
                                <!-- the new class will be: video-youtube-hyMqnJc1z9E -->
                                <div id="video-vimeo-30507832"></div>
                            </div>
                            <!-- END IMAGE / VIDEO -->
                            <div class="clear"></div>
                        </div>
                        <!-- END PANEL -->
                        
                    </div>
                    <div class="shadow"></div>
                </div>                 
                
                <!-- JS SCRIPT --> 
                <script type="text/javascript">  
                    // edit here
                    var 	slider_cycle_fx = 'slide',
                            slider_cycle_speed = 400,
                            slider_cycle_timeout = 5000,
                            slider_cycle_autoplay = true; 
                    // end editing    
                            
            		$('#slider.cycle').css({ display : 'block' });
            		$('#slider.cycle .slide').css({ width : $('#slider.cycle').width() });
            		
                    slider_cycle_timeout = slider_cycle_autoplay ? slider_cycle_timeout : 0;
                    
                    var adjust_height = function (current) { 
                        var total = $('#slider .slides_control').children().size();
                        var next = current + 1;
                        // if last slide, set next to first slide
        				next = total === next ? 0 : next;
                        
                        var nextSlide = $('#slider .slides_control .slide:eq('+ current +')'); 
        				
        				var slideHeight = nextSlide.height();
        				var height = slideHeight;
        				//var contentHeight = 0;                
        				                    
        				var changeHeight = function( contentHeight, slideHeight ) {
                            if ( contentHeight > slideHeight )
        				       nextSlide.height( contentHeight );
        				}      
        				
        				if ( $('.featured-image', nextSlide).length > 0 ) {
        				   
        				    var newImg = new Image();
        				    var height;
        
                            newImg.onload = function() {
                                if ( newImg.width > 500 )
                                    height = ( 500 * newImg.height ) / newImg.width;
                                else
                                    height = newImg.height;
                                                            
                                changeHeight( height, slideHeight );
                            }
                            
                            newImg.src = $('.featured-image img', nextSlide).attr('src'); // this must be done AFTER setting onload
        				   
        				} else if ( $('.video-container', nextSlide).length > 0 ) {
        				    var height = $('.video-container', nextSlide).height();
        				    changeHeight( height, slideHeight );
        				}
                    };
            		
            		$("#slider.cycle").slides({  
            			play: slider_cycle_timeout,
            			width: 960,
            			effect: slider_cycle_fx,
            			generatePagination: false,
            			slideSpeed: slider_cycle_speed,
            			fadeSpeed: slider_cycle_speed,
            			autoHeight: true,      
                        slidesLoaded: function () { 
                            adjust_height(0);
                        },           
                        animationStart: adjust_height,     
            			generateNextPrev: true
            		});	 
                </script>
                <!-- END #slider -->    
                                          
                <!-- START CONTENT -->
                <div id="content" class="gradient layout-sidebar-right group"> 
                    
                    <!-- START SLOGAN -->
                    <div id="slogan" class="inner">
                        <h1>DIVERSO. MAKE IT YOURSELF.</h1>
                        <h3>custom post types, widgets, home composer: <span>make your site</span></h3>
                    </div>
                    <!-- END SLOGAN -->
                    
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                    
                        <p>
                            Sed nec risus ut lectus pretium dapibus ullamcorper vel justo. 
                            Integer sit amet lorem mauris. <a href="#">Vestibulum ante ipsum</a> primis 
                            in faucibus orci luctus et ultrices posuere cubilia Curae;
                        </p>
                        
                        <p>
                            Pellentesque justo nulla, fringilla ac consequat in, tempor in turpis. 
                            In ut velit nulla. Maecenas sed felis est, sed auctor lectus. <strong>Sed 
                            est magna, dapibus non</strong> venenatis eu, aliquam eu enim. Donec ut ipsum 
                            interdum augue faucibus pretium ut nec orci. Aliquam erat volutpat. Aliquam 
                            quam est, posuere mollis convallis at, sollicitudin rutrum ipsum. Suspendisse 
                            quis mi quam.
                        </p>
                        
                        <p>Donec nulla turpis, gravida sit amet vulputate ut, sodales id lacus.</p>
                        <p>&nbsp;</p>
                    </div>
                    <!-- END PRIMARY -->
                    
                    <!-- START SIDEBAR -->
                    <div id="sidebar" class="group">
                    
                        <div class="widget-first widget icon-text group">
                            <img src="images/icons/widget/call.png" alt="" />
                            <h3>Call us</h3>
                            <p>phone to our staff: + 39 095 7683</p>
                        </div>
                        
                        <div class="widget icon-text group">
                            <img src="images/icons/widget/email.png" alt="" />
                            <h3>Send us a message</h3>
                            <p>using the contact form  
                                <a href="contact.html">here</a>
                            </p>
                        </div>
                        
                        <div class="widget-last widget icon-text group">
                            <img src="images/icons/widget/smile.png" alt="" />
                            <h3>We will help you</h3>
                            <p>we will find a great solution for you.</p>
                        </div>
                        
                    </div>
                    <!-- END SIDEBAR -->   
                    
                </div>
                <!-- END CONTENT -->