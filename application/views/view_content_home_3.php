  <!-- START SLIDER -->
                <div id="slider" class="elegant group inner">
                    <ul class="group">
                        <li class="first slide-1 group image-content-type">
                            <div class="slider-featured group"><img src="images/slider/elegant/001.jpg" width="960" height="338" alt="interior design" /></div>
                            <div class="slider-caption caption-right">
                                <div class="text">
                                    <!-- TITLE -->
                                    <h2>interior design</h2>
                                    <!-- TEXT -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar turpis velit. Morbi rutrum, neque non pulvinar faucibus, ligula eros viverra ligula, et aliquam libero neque ac nisl. </p>
                                    <p><span class="special-font" style="font-size:24px;">prices from <span style="font-size:42px;">$45</span></span></p>
                                </div>
                            </div>
                        </li>
                        <li class="slide-2 group image-content-type">
                            <div class="slider-featured group"><img src="images/slider/elegant/002.jpg" width="960" height="338" alt="Luxury gold" /></div>
                            <div class="slider-caption caption-right">
                                <div class="text">
                                    <!-- TITLE -->
                                    <h2>Luxury gold</h2>
                                    <!-- TEXT -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar turpis velit. Morbi rutrum, neque non pulvinar faucibus, ligula eros viverra ligula, et aliquam libero neque ac nisl. </p>
                                </div>
                            </div>
                        </li>
                        <li class="slide-3 group image-content-type">
                            <div class="slider-featured group"><img src="images/slider/elegant/003.jpg" width="960" height="338" alt="Beauty SPA" /></div>
                            <div class="slider-caption caption-right">
                                <div class="text">
                                    <!-- TITLE -->
                                    <h2>Beauty SPA</h2>
                                    <!-- TEXT -->
                                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum</p>
                                    <p><span class="special-font" style="font-size:24px;">prices from <span style="font-size:42px;">$37</span></span></p>
                                </div>
                            </div>
                        </li>
                        <li class="last slide-4 group image-content-type">
                            <div class="slider-featured group"><img src="images/slider/elegant/004.jpg" width="960" height="338" alt="Healthy Food" /></div>
                            <div class="slider-caption caption-right">
                                <div class="text">
                                    <!-- TITLE -->
                                    <h2>Healthy Food</h2>
                                    <!-- TEXT -->
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar turpis velit. Morbi rutrum, neque non pulvinar faucibus, ligula eros viverra ligula, et aliquam libero neque ac nisl. </p>
                                    <p><span class="special-font" style="font-size:24px;">prices from <span style="font-size:42px;">$18</span></span></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>                       
                
                <!-- JS SCRIPT --> 
                <script type="text/javascript">  
                    // edit here
                    var 	slider_elegant_easing = null,
            				slider_elegant_fx = 'fade',
            				slider_elegant_speed = 500,
            				slider_elegant_timeout = 5000,
            				slider_elegant_caption_speed = 500; 
                    // end editing    
                            
            		$("#slider ul").cycle({                                                    
            			easing 	: slider_elegant_easing,
            	    	fx 		: slider_elegant_fx,
            			speed 	: slider_elegant_speed,
            			timeout : slider_elegant_timeout,
            			before	: function(currSlideElement, nextSlideElement, options, forwardFlag) {
            				var width = parseInt( $('.slider-caption', currSlideElement).outerWidth() );
            				var height = parseInt( $('.slider-caption', currSlideElement).outerHeight() );
            				
            				$('.caption-top', currSlideElement).animate({top:height*-1}, slider_elegant_caption_speed);
            				$('.caption-bottom', currSlideElement).animate({bottom:height*-1}, slider_elegant_caption_speed);
            				$('.caption-left', currSlideElement).animate({left:width*-1}, slider_elegant_caption_speed);
            				$('.caption-right', currSlideElement).animate({right:width*-1}, slider_elegant_caption_speed);
            			},
            			after	: function(currSlideElement, nextSlideElement, options, forwardFlag) {
            				$('.caption-top', nextSlideElement).animate({top:0}, slider_elegant_caption_speed);
            				$('.caption-bottom', nextSlideElement).animate({bottom:0}, slider_elegant_caption_speed);
            				$('.caption-left', nextSlideElement).animate({left:0}, slider_elegant_caption_speed);
            				$('.caption-right', nextSlideElement).animate({right:0}, slider_elegant_caption_speed);
            			}
            	    });   
                </script>
                <!-- END #slider -->    
                 
                <div id="content" class="gradient layout-sidebar-no group">
                    
                    <!-- START SLOGAN -->
                    <div id="slogan" class="inner">
                        <h1>DI'VERSO <span>IS A CREATIVE AGENCY.</span></h1>
                        <h3>We create a beautiful, original, <span>amazing things.</span></h3>
                    </div>    
                    <!-- END SLOGAN -->
                    
                    <!-- START CONTENT -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                    
                        <div class="one-fourth">
                            <h3>Interior design</h3>
                            <p><img class="alignleft" title="001" src="images/various/00112.jpg" alt="" width="220" height="81" /></a></p>
                            <p>Nunc felis urna, mattis non blandit vitae, porttitor ac enim. Nunc scelerisque sagittis sollicitudin nam gravida.</p>
                        </div>
                        
                        <div class="one-fourth">
                            <h3>Nice accessories</h3>
                            <p><img class="alignleft" title="002" src="images/various/0024.jpg" alt="" width="220" height="81" /></a></p>
                            <p>Nunc felis urna, mattis non blandit vitae, porttitor ac enim. Nunc scelerisque sagittis sollicitudin nam gravida.</p>
                        </div>
                        
                        <div class="one-fourth">
                            <h3>Love this theme?</h3>
                            <p><img class="alignleft" title="003" src="images/various/0036.jpg" alt="" width="220" height="81" /></a></p>
                            <p>Nunc felis urna, mattis non blandit vitae, porttitor ac enim. Nunc scelerisque sagittis sollicitudin nam gravida.</p>
                        </div>
                        
                        <div class="one-fourth last">
                            <h3>Buy it on ThemeForest</h3>
                            <p><img class="alignleft" title="04" src="images/various/04.jpg" alt="" width="220" height="81" /></p>
                            <p>Nunc felis urna, mattis non blandit vitae, porttitor ac enim. Nunc scelerisque sagittis sollicitudin nam gravida.</p>
                        </div>
                        
                    </div>
                    <!-- END CONTENT -->
                    
                </div>
                <!-- END CONTENT -->
        
