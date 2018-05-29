<!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
                
                    <!-- START PRIMARY -->
                    <?php

                        if($article_details != null){
                            foreach($article_details as $row){
                                
                                $user_id = $row->user_id;
                                
                                //loading user model
                                
                                $this->load->model("model_users");
                                
                                $user = $this->model_users->get_user_data($user_id);
                                
                                foreach($user as $fetch){
                                
                                    $username = $fetch->username;
                                                                    
                                }
                                
                                $post_id = $row->post_id;
                                
                                $views = $row->views;
                                
                                $new_views = $views+1; 
                                
                                //updating views
                                
                                $parsed_post_id = array(
                                                        "post_id"=> "$post_id",
                                                        "views" =>  $new_views 
                                                       
                                                       );
                                
                                $this->model_users->increase_views($parsed_post_id);// increase post views
                                
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
                        
                                if($type=="Movies" || $type=="Series"){
                                
                                    $review = "News";
                                    
                                } else $review = "Series";
                                
                                $category= $row->category;
                                $date = $row->date;
                                $sources = $row->sources;
                                
                                if($sources==""){
                                    $sources = "none listed";
                                }
                                
                                $video_link = $row->video_link;
                                $video_type = $row->video_type;
                                
                                                            
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
                    echo "<div id=\"primary\" class=\"group\">
                        <div class=\"hentry hentry-post group blog-big\">
                        
                            <div class=\"thumbnail\"><h3>$review</h3>
                                <img src=\"".base_url()."$banner\" class=\"aligncenter wp-post-image\" alt=\"glasses\" title=\"glasses\" />                            
                                <h1><a href=\"#\">$title $rating</a></h1>
                                <p class=\"date\">
                                    <span class=\"month\">$month</span>
                                    <span class=\"day\">$day</span>
                                </p>
                            </div>
                            
                            <div class=\"meta group\">
                                <p class=\"author\"><span>by <a href=\"".base_url()."site/profile/".$user_id."\" title=\"Posts by $username\" rel=\"author\">$username</a></span></p>
                                <p class=\"categories\"><span>In: ";
                                
                                for($i=0;$i<$count;$i++){
                                    echo"<a href=\"".base_url()."site/search/".trim($tags_exp[$i])."\" title=\"View all posts in ".$tags_exp[$i]."\" rel=\"category tag\">".$tags_exp[$i]."</a>,";
                                }
                                echo"</span></p><p class=\"comments\"><span><a href=\"#comment\" title=\"Comment on $title: do u like it?\">$comments_num</a></span></p>
                            </div>
                            
                            <div class=\"the-content\">
                                <p >
                                    $content
                                </p>
                                
                                <p><span id=\"more-987\"></span></p>
                                
                                <p>
                                    
                                </p>
                                
                                <p>
                                   
                                </p>
                            </div>
                            
                            
                                <p>
                                    SOURCES: <a>$sources</a>   
                                </p><p> TAGS: ";
                            
                            for($i=0;$i<$count_tags;$i++){
                                    echo"<a href=\"".base_url()."site/search/".trim($tags_exp[$i])."\" title=\"View all posts in ".$tags_exp[$i]."\" rel=\"category tag\">".$tags_exp[$i]."</a>,";
                                }
                        echo"</p></div><br/>";
                                
                                if($video_link!=""){
                                    
                                    if($video_type=="Youtube"){
                                    
                                        echo"<div class=\"post_video youtube\">
                                            <object width=\"640\" height=\"385\">
                                                <param name=\"movie\" value=\"$video_link\" />
                                                <param name=\"allowFullScreen\" value=\"true\" />
                                                <param name=\"allowscriptaccess\" value=\"always\" />
                                                <embed src=\"$video_link\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"640\" height=\"385\"></embed>
                                            </object>
                                            </div>";
                                        
                                    }else if($video_type=="Vimeo"){ // check vimeo url samples
                                        echo"<div class=\"post_video vimeo\">
                                                <object width=\"640\" height=\"360\">
                                                    <param name=\"allowfullscreen\" value=\"true\" />
                                                    <param name=\"allowscriptaccess\" value=\"always\" />
                                                    <param name=\"movie\" value=\"$video_link&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1&amp;autoplay=0&amp;loop=0\" />
                                                    <embed src=\"$video_link&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1&amp;autoplay=0&amp;loop=0\" type=\"application/x-shockwave-flash\" allowfullscreen=\"true\" allowscriptaccess=\"always\" width=\"640\" height=\"360\"></embed>
                                                </object>
                                        </div>";
                                        
                                    }else if($video_type=="Daily Motion"){
                                        
                                        echo"<div class=\"post_video dailymotion\">
                                                <object width=\"640\" height=\"360\">
                                <param name=\"movie\" value=\"$video_link?width=640&amp;theme=none&amp;foreground=%23F7FFFD&amp;highlight=%23FFC300&amp;background=%23171D1B&amp;additionalInfos=1&amp;hideInfos=1&amp;start=&amp;animatedTitle=&amp;iframe=0&amp;autoPlay=0\" />
                                <param name=\"allowFullScreen\" value=\"true\" />
                                <param name=\"allowScriptAccess\" value=\"always\" />
                                <embed type=\"application/x-shockwave-flash\" src=\"$video_link?width=640&amp;theme=none&amp;foreground=%23F7FFFD&amp;highlight=%23FFC300&amp;background=%23171D1B&amp;additionalInfos=1&amp;hideInfos=1&amp;start=&amp;animatedTitle=&amp;iframe=0&amp;autoPlay=0\" width=\"640\" height=\"360\" allowfullscreen=\"true\" allowscriptaccess=\"always\"></embed>
                            </object>
                        </div>";                                    
                                    }else{
                                    
                                    } 
                                }
                            }
                        }    
                        ?>
                        
                        <!-- COMMENTS -->
                        <div id="comments">
                            <?php echo validation_errors();?>
                            <!-- RESPOND FORM -->
                            <div id="respond">
                                <h3 id="reply-title">Leave a <span>Reply</span> <small><a rel="nofollow" id="cancel-comment-reply-link" <?php echo "href=\"".base_url()."site/article/$post_id\"";?> style="display:none;">Cancel reply</a></small></h3>
                                <form action="<?php echo "".base_url()."site/comment/".$post_id ?>" method="post" id="commentform">
                                    <p class="comment-form-author"><label for="author">Comment title</label> <input id="title" name="title" type="text" value="" aria-required="true" required="required"/></p>
                                    <p class="comment-form-comment"><label for="comment">Your comment</label><textarea id="comment" name="comment" cols="45" rows="8" required="required"></textarea></p>
                                    <div class="clear"></div>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" value="Post Comment" />
                                    </p>
                                    <p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="e17697af93" /></p>
                                </form>
                            </div>
                            <!-- #respond -->
                            <h3 id="comments-title">
                                <?php echo"$comments_num";?>			
                            </h3>                            
                        </div>
                        <!-- #comments -->
                        <?php 
                        if($article_comments != null){
                        foreach($article_comments as $row){
                            
                        $user_id = $row->user_id;
                        
                        if($user_id!=0){    
                        $user = $this->model_users->get_user_data($user_id);
                                                                        
                                foreach($user as $fetch){
                                
                                    $username = $fetch->username;
                                                                    
                                }    
                        }else $username = 'Anonymous';     
                        $title = $row->title;
                        $comment = $row->comment;
                            
                        echo"<div class=\"toggle\">
                            <p class=\"tab-index tab-closed\"><a href=\"#\" title=\"Close\">*$username: $title</a></p>
                            <div class=\"content-tab closed\">
                                <div class=\"arrow\">&nbsp;</div>
                                <p>
                                    $comment
                                </p>
                            </div>
                        </div>";
                        
                        }
                        }    
                        ?>
                    </div>
                    <!-- END PRIMARY -->
                    
                    <!-- START SIDEBAR -->
                    <div id="sidebar" class="group">
                        
                        <!-- START WIDGET -->
                        <div class="widget-first widget recent-posts">
                            <h3>From the blog</h3>
                            
                            <div class="last-news group">
                            
                                <div class="box-post group thumbnail">
                                    <div class="box-post-thumb sphere"><img src="images/various/glasses-86x86.jpg" alt="glasses" title="glasses" /></div>
                                    <div class="box-post-body group">
                                        <div class="news_title"><a href="#" title="A fresh and nice blog layout: do u like it?" class="title">A fresh and nice blog layout: do u like it?</a></div>
                                        <p class="meta"><span class="date">December 13, 2011</span></p>
                                    </div>
                                </div>
                                
                                <div class="box-post group thumbnail">
                                    <div class="box-post-thumb sphere"><img src="images/various/sushi1-86x86.jpg" alt="sushi" title="sushi" /></div>
                                    <div class="box-post-body group">
                                        <div class="news_title"><a href="#" title="50% off on our products for the month of August" class="title">50% off on our products for the month of August</a></div>
                                        <p class="meta"><span class="date">December 7, 2011</span></p>
                                    </div>
                                </div>
                                
                                <div class="box-post group thumbnail">
                                    <div class="box-post-thumb sphere"><img src="images/no_image_recentposts.jpg" alt="No Image" /></div>
                                    <div class="box-post-body group">
                                        <div class="news_title"><a href="#" title="Di&rsquo;verso, a fresh WordPress Theme" class="title">Di&#8217;verso, a fresh WordPress Theme</a></div>
                                        <p class="meta"><span class="date">December 7, 2011</span></p>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>          
                        <!-- END WIDGET -->
                        
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
                            <h3>Recent Tags</h3>
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
                <!-- END CONTENT -->