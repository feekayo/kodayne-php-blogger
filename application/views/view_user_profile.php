                <!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
                    
                    
                    <?php
                        //loading user data

                        foreach($user_data as $row){
                        
                            $user_id = $row->user_id;
                            $username = $row->username;
                            $bio = $row->bio;
                            $dp = $row->dp;
                        
                        }
                    
                    ?>
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                    
                        <div class="testimonials-list group">
                            <div class="thumb-testimonial group">
                                <div class="sphere">
                                    <?php
                                    if($dp == ""){
                                        echo"<img src=\"".base_url()."/images/temp_dp.jpg\" alt=\"$username\" title=\"$username\" />";
                                    }else echo"<img src=\"".base_url()."$dp\" alt=\"$username\" title=\"$username\" />";
                                    ?>
                                </div>
                                <p class="name-testimonial group">
                                    <span class="title special-font"><?php 
                                                                        // displaying username
                                                                        echo $username;
                                                                        ?></span>
                                </p>
                            </div>
                            <div class="the-post group">
                                <p>
                                    <?php 

                                        //displaying user bio
                                        echo $bio;
                                        if($this->session->userdata("is_logged_in")){
                                        $session_id = $this->session->userdata("user_id");
                                            if($session_id==$user_id) echo " <a class=\"edit\" href=\"".base_url()."site/edit_profile/".$user_id."\">Edit</a>"; 
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--END PRIMARY-->
                    <!-- START SIDEBAR -->
                    <div id="sidebar" class="group">
                    
                        <div class="widget-first widget text-image">
                            <h4><?php echo $username;?> stats</h4>
                             <p>Posts: <?php echo $user_posts_num; ?> | Noted By: <?php echo $user_noted_num?> | Notes: <?php echo $user_notes_num;?></p>
                             
                        </div>
                        
                        <div class="widget-last widget text-image">
                            <div class="text-image" style="text-align:left"><iframe src=<?php echo base_url()."site/note/".$user_id?> style="overflow:hidden" scrolling="no" width="200" height="30"></iframe></div>
                        </div>
                        
                    <div class="widget-last widget text-image">    
                    </div>
                        
                    </div>
                    <!-- END SIDEBAR -->
                    <!-- SLOGAN --> 
                    <div id="slogan" class="inner">
                        <h1 class="only">Posts By <span><?php 
                                                                        // displaying username
                                                                        echo $username;
                                                                        ?></span></span></h1>
                    </div>         
                    <!-- END SLOGAN --> 
                
            <div class="tabs-container">
                                <ul class="tabs">
                                    <li>
                                        <h4><a href="#latest" title="Latest">Fresh</a></h4>
                                    </li>
                                    <li>
                                        <h4><a href="#best" title="Best">Best</a></h4>
                                    </li>

                                </ul>
                <!--- START FIRST TAB ---->
                
                <div class="border-box group">  
                    <div id="latest" class="panel group">

                    <!-- START PRIMARY -->
                    <div id="primary" class="group" style="width:70%">
                    
                    <?php

                        if($user_latest_posts != null){
                            foreach($user_latest_posts as $row){
                                
                                $user_id = $row->user_id;
                                
                                //loading user model
                                
                                $this->load->model("model_users");
                                
                                $user = $this->model_users->get_user_data($user_id);
                                                                        
                                foreach($user as $fetch){
                                
                                    $username = $fetch->username;
                                                                    
                                }
                                
                                $post_id = $row->post_id;                                
                                
                               // fetching number of comments
                                $comments_num = $this->model_users->get_comments_num($post_id);
                                
                                if($comments_num==0){
                                    
                                    $comments_num = "No comments";
                                
                                }else $comments_num = $comments_num." comments";
                                
                                
                                $banner = $row->banner;
                                $title = $row->title;
                                $tags = $row->tags;
                                $content = $row->content;
                                $type = $row->type;
                                $category= $row->category;
                                $date = $row->date;
                                
                                if($category=="" && $type==""){
                                
                                    $edit = "movie";
                                    
                                }else if($category=="" && $type!=""){
                                
                                    $edit = "series";
                                    
                                }else if($category!="" && $type!=""){
                                
                                    
                                    $edit = "news"; 
                                    
                                }
                                
                                if($type=="Movies" || $type=="Series"){
                                
                                    $review = "News";
                                    
                                } else $review = "Review";
                                
                                $rating = $row->rating;
                                if($rating != 0){
                                    $rating = $rating."%";
                                } else $rating = "";
                                
                                $tags_exp = explode(",",$tags); 
                                $count_tags =  count($tags_exp);
                                
                                if($count_tags<2){
                                    $count = $count_tags;
                                }else $count = 2;
                                    
                                $place_content = substr($content,0,400);
                                
                                $date_str = date("F j Y", strtotime($date));
                                
                                $date_exp = explode(" ", $date_str);
                                
                                $month = substr($date_exp[0],0,3);
                                $day = $date[1];
                                

                        echo"<div class=\"hentry hentry-post group blog-big\">
                            <div class=\"thumbnail\"><h3>$review";
                                if($this->session->userdata("is_logged_in")){
                                        $session_id = $this->session->userdata("user_id");
                                        if($session_id==$user_id) echo " <a class=\"edit\"  href=\"".base_url()."site/edit_$edit/".$post_id."\">Edit</a>"; 
                                        }                                
                        echo"</h3>
                                <img src=\"".base_url()."$banner\" class=\"aligncenter wp-post-image\" alt=\"glasses\" title=\"$title\" />                            
                                <h2><a href=\"".base_url()."site/article/$post_id\">$title $rating</a></h2>
                                <p class=\"date\">
                                    <span class=\"month\">$month</span>
                                    <span class=\"day\">$day</span>
                                </p>
                            </div>
                            <div class=\"meta group\">
                                <p class=\"author\"><span>by <a href=\"".base_url()."site/profile/".$user_id."\" title=\"Posts by $username\" rel=\"author\">$username</a></span></p>
                                <p class=\"categories\"><span>In: ";
                                
                                for($i=0;$i<$count;$i++){
                                    echo"<a href=\"".base_url()."site/search/".$tags_exp[$i]."\" title=\"View all posts in ".$tags_exp[$i]."\" rel=\"category tag\">".$tags_exp[$i]."</a>,";
                                }
                                echo"</span></p><p class=\"comments\"><span><a href=\"".base_url()."site/article/$post_id#comment\" title=\"Comment on $title: do u like it?\">$comments_num</a></span></p>
                            </div>
                            <div class=\"the-content\">
                                <p>
                                  $place_content.......... <a>$date_str</a>
                                </p>
                                
                                <p> 
                                    <a href=\"".base_url()."site/article/$post_id\" class=\"more-link\">Read More</a>
                                </p>
                            </div>
                        </div>";
                            }
                            
                                
                        echo "<div class=\"general-pagination group\">
                            <a href=\"#\" class=\"selected\">1</a>
                            <a href=\"#\">2</a>
                            <a href=\"#\">&rsaquo;</a>
                        </div>";
                            
                        }else echo"<center><h3 style=\"color:#A6A4A4;border-top: 1px solid #E5E5E5;border-bottom: 1px solid #E5E5E5;padding:10px\">No <span>Posts</span></h3></center>";
                        ?>
                        
                    
                        
                    </div>
                    <!-- END PRIMARY -->
                        
                        
                        
                     <!-- START SIDEBAR -->
                    <div id="sidebar" class="group">
                        
                        <div class="widget-first widget more_projects">
                            <h4>Favorite Movies </h4>
                            <div class="more-projects-widget">
                            
                                <div class="top"><a class="prev" href="#">Prev</a></div>
                                
                                <div class="sliderWrap">
                                    <ul>
                                    <?php
                        $num = 0;
                        $session_id = $this->session->userdata('user_id');
                        if($user_favorite_movies != null){
                                          
                           foreach($user_favorite_movies as $row){
                                
                                $fav_id = $row->fav_id;
                                $thumbnail = $row->thumbnail;
                                $title = $row->title;
                                $type = $row-> type;
                                $num = $num + 1;
                               if($session_id==$user_id) echo "<a class=\"edit\" href=\"".base_url()."site/edit_favs/".$fav_id."\">Edit</a>"; 
                                        echo"<li class=\"work-item group\">";                
                                        echo"<a class=\"work-thumb\" href=\"#\"><img src=\"".base_url()."$thumbnail\" alt=\"0016\" title=\"0016\" /></a>
                                            <a class=\"meta work-title\" href=\"".base_url()."site/search/$title\">$title</a>
                                            <p class=\"meta categories\"><a href=\"#\">$type</a></p>
                                        </li>";
                            }
                        }else echo "<li class=\"work-item group\"><center><h4>No Favorite Movies</h4></center></li>";    
                        
                        if($num<6){
                            if($session_id==$user_id) echo "<li class=\"work-item group\"><a href=\"".base_url()."site/add_fav_movie\" class=\"add\">Add New</a></li>";
                        }
                                    ?>
                                    </ul>
                                </div>
                                <div class="controls"><a class="next" href="#">Next</a></div>
                            </div>
                        </div>
                        
                         <div class="widget-first widget more_projects">
                            <h4>Favorite Series</h4>
                            <div class="more-projects-widget">
                            
                                <div class="top"><a class="prev" href="#">Prev</a></div>
                                
                                <div class="sliderWrap">
                                    <ul>
                                 <?php
                        
                        $num = 0;
                        $session_id = $this->session->userdata('user_id');
                        if($user_favorite_series != null){
                            
                            foreach($user_favorite_series as $row){
                                
                                $fav_id = $row->fav_id;
                                $thumbnail = $row->thumbnail;
                                $title = $row->title;
                                $type = $row-> type;
                                $num = $num + 1;
                                if($session_id==$user_id) echo "<a class=\"edit\" href=\"".base_url()."site/edit_favs/".$fav_id."\">Edit</a>"; 
                                        echo"<li class=\"work-item group\">";                
                                        echo"<a class=\"work-thumb\" href=\"#\"><img src=\"".base_url()."$thumbnail\" alt=\"0016\" title=\"0016\" /></a>
                                            <a class=\"meta work-title\" href=\"".base_url()."site/search/$title\">$title</a>
                                            <p class=\"meta categories\"><a href=\"#\">$type</a></p>
                                        </li>";
                            }
                        }else echo "<li class=\"work-item group\"><center><h4>No Favorite Series</h4></center></li>";    
                        if($num<6){
                            if($session_id==$user_id) echo "<li class=\"work-item group\"><a href=\"".base_url()."site/add_fav_series\" class=\"add\">Add New</a></li>";
                        }                                                
                                    ?>
                                    </ul>
                                </div>
                                <div class="controls"><a class="next" href="#">Next</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR -->    
                    </div>
                                                                                                            
                </div>
                <!--END FIRST TAB -->
                                                                                            
                <!-- START SECOND TAB -->
                    <div class="border-box group">    
                     <div id="best" class="panel group">

                    <!-- START PRIMARY -->
                    <div id="primary" class="group" style="width:70%">
                    
                    <?php

                        if($user_best_posts != null){
                            foreach($user_best_posts as $row){
                                
                                $user_id = $row->user_id;
                                
                                //loading user model
                                
                                $this->load->model("model_users");
                                
                                $user = $this->model_users->get_user_data($user_id);
                                
                                foreach($user as $fetch){
                                
                                    $username = $fetch->username;
                                                                    
                                }
                                
                                $post_id = $row->post_id;
                                
                                $comments_num = $this->model_users->get_comments_num($post_id);
                                
                                if($comments_num==0){
                                    
                                    $comments_num = "No comments";
                                
                                }else $comments_num = $comments_num." comments";
                                
                                $banner = $row->banner;
                                $title = $row->title;
                                $tags = $row->tags;
                                $content = $row->content;
                                $type = $row->type;
                                $category= $row->category;
                                $date = $row->date;
                                if($type=="Movies" || $type=="Series"){
                                
                                    $review = "News";
                                    
                                } else $review = "Review";
                                
                                
                                $rating = $row->rating;
                                if($rating != 0){
                                    $rating = $rating."%";
                                } else $rating = "";
                                
                                $tags_exp = explode(",",$tags); 
                                $count_tags =  count($tags_exp);
                                
                                if($count_tags<2){
                                    $count = $count_tags;
                                }else $count = 2;
                                    
                                $place_content = substr($content,0,400);
                                
                                $date_str = date("F j Y", strtotime($date));
                                
                                $date_exp = explode(" ", $date_str);
                                
                                $month = substr($date_exp[0],0,3);
                                $day = $date[1];
                                

                        echo"<div class=\"hentry hentry-post group blog-big\">
                            <div class=\"thumbnail\"><h3>$review</h3>
                                <img src=\"".base_url()."$banner\" class=\"aligncenter wp-post-image\" alt=\"glasses\" title=\"$title\" />                            
                                <h2><a href=\"".base_url()."site/article/$post_id\">$title $rating</a></h2>
                                <p class=\"date\">
                                    <span class=\"month\">$month</span>
                                    <span class=\"day\">$day</span>
                                </p>
                            </div>
                            <div class=\"meta group\">
                                <p class=\"author\"><span>by <a href=\"".base_url()."site/profile/".$user_id."\" title=\"Posts by $username\" rel=\"author\">$username</a></span></p>
                                <p class=\"categories\"><span>Tags: ";
                                
                                for($i=0;$i<$count;$i++){
                                    echo"<a href=\"".base_url()."site/search/".$tags_exp[$i]."\" title=\"View all posts in ".$tags_exp[$i]."\" rel=\"category tag\">".$tags_exp[$i]."</a>,";
                                }
                                echo"</span></p><p class=\"comments\"><span><a href=\"".base_url()."site/article/$post_id#comment\" title=\"Comment on $title: do u like it?\">$comments_num</a></span></p>
                            </div>
                            <div class=\"the-content\">
                                <p>
                                  $place_content.......... <a>$date_str</a>
                                </p>
                                
                                <p> 
                                    <a href=\"".base_url()."site/article/$post_id\" class=\"more-link\">Read More</a>
                                </p>
                            </div>
                        </div>";
                            }
                            
                                
                        echo "<div class=\"general-pagination group\">
                            <a href=\"#\" class=\"selected\">1</a>
                            <a href=\"#\">2</a>
                            <a href=\"#\">&rsaquo;</a>
                        </div>";
                            
                        }else echo"<center><h3 style=\"color:#A6A4A4;border-top: 1px solid #E5E5E5;border-bottom: 1px solid #E5E5E5;padding:10px\">No <span>Posts</span></h3></center>";
                        ?>
                        
                    
                        
                    </div>
                    <!-- END PRIMARY -->
                        
                        
                        
 <!-- START SIDEBAR -->
                    <div id="sidebar" class="group">
                        

                        
<!-- START WIDGET -->
                        <div class="widget-last widget almost-all-categories">
                            <h3>Recent Searches</h3>
                            <ul>
                                <?php
                                if($recent_searches != null){
                                    foreach($recent_searches as $row){
                                        
                                        $search = $row->search;
                                        
                                        echo "<a  href=\"".base_url()."site/search/".trim($search)."\" title=\"View all posts on $search\">$search</a>,";
                                    }
                                }else{
                                
                                echo "<li>None</li>";
                                }
                                ?>
                            </ul>
                        </div> 
                        <!-- END WIDGET -->

                                                                                            
                        <!-- START WIDGET -->
                        <div class="widget-last widget almost-all-categories">
                            <h3>Recent Post Tags</h3>
                            <ul>
                            <?php
                                if($recent_tags != null){
                                    
                                    foreach($recent_tags as $row){
                                           
                                        $tags = $row->tags;
                                        
                                        $tags_exp = explode(',',$tags);
                                        
                                        $count_tags = count($tags_exp);
                                        
                                        for($i=0;$i<$count_tags;$i++){
                                            echo "<a  href=\"".base_url()."site/search/".trim($tags_exp[$i])."\" title=\"View all posts on ".trim($tags_exp[$i])."\">".trim($tags_exp[$i])."</a>,";
                                        }
                                            
                                    }
                                    
                                    
                                }else echo"<li>None</li>";
                            ?>
                            </ul>
                        </div> 
                        <!-- END WIDGET -->
                                                                                            
                                                                                            
                                                                                            
                    </div>
                    <!-- END SIDEBAR -->    
                    
                </div>
                <!-- END SECOND TAB -->
                </div>
                
                </div>
                <!-- END CONTENT -->
    </div>
