                <!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
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
                                
                                
                                $banner = $row->banner;
                                $title = $row->title;
                                $tags = $row->tags;
                                $content = $row->content;
                                $type = $row->type;
                                
                                $category= $row->category;
                                $date = $row->date;
                                $sources = $row->sources;
                                
                                $video_link = $row->video_link;
                                $video_type = $row->video_type;
                                
                                                            
                                $rating = $row->rating;
                                
                                if($this->input->post('title') != ""){
                                    $title = $this->post('title');
                                }else if($this->input->post('tags') != ""){
                                    $tags = $this->post('tags');
                                }else if($this->input->post('category') != ""){
                                    $category = $this->post('category');
                                }else if($this->input->post('type') != ""){
                                    $type = $this->post('type');
                                }else if($this->input->post('content') != ""){
                                    $content = $this->post('content');
                                }else if($this->input->post('video_link') != ""){
                                    $video_link = $this->post('video_link');
                                }else if($this->input->post('video_type') != ""){
                                    $video_type = $this->post('video_type');
                                }else if($this->input->post('sources') != ""){
                                    $sources = $this->post('sources');
                                }
                                
                            }
                        }
                                    
                                
                            ?>
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                        <!-- SLOGAN --> 
                        <div id="slogan" class="inner">
                            <h1 class="only">Edit <span>News</span></h1>
                        </div>         
                    <!-- END SLOGAN --> 
                        <!-- The feedback message is here -->
                         <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                        <div id="sign_up">

                            <!-- The feedback message is here -->
                        	<div class="usermessagea"><?php 
                                                            echo validation_errors();
                                                            if(isset($error)){
                                                            
                                                                echo "<p>".$error."</p>";
                                                                
                                                            }
                                                        
                                
                                                        ?></div>
                        	
                        <?php
                            //loading the form helper    
                            $this->load->helper('form');
                            
                            // opening form
                            echo form_open_multipart("site/edit_news_article/".$post_id);
                            
                            // Email Data
                            echo form_label("Headline: ","title")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'title',
                                    'id' => 'title',
                                    'value' => $title,
                                    'type' => 'text',
                                    'required' => 'required',
                                    'maxlength' => '100',
                                    'class' => 'bigfield'
                                );

                            echo form_input($data);
                            echo"<div class=\"msg-error\"></div>";
                            // Tags Data
                            echo form_label("Tags: <label style=\"color:red;text-transform:none;\"><small>*Use commas to seperate tags *Optional</small></label>","tags")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'tags',
                                    'id' => 'tags',
                                    'value' => $tags,
                                    'type' => 'text',
                                    'maxlength' => '300',
                                    'class' => 'bigfield'
                                );

                            echo form_input($data);
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Category: ","category")."<br/>";

                            $data = array(
                                    
                                    '' => 'Select Category',
                                    'General Information' => 'General Information',
                                    'Awards' => 'Awards',
                                    'Box Office' => 'Box Office News',
                                    'Premiers' => 'Latest On Premiers',
                                    'Casting' => 'Casting News',
                                    'New Production' => 'New Production',
                                    'Movie Release' => 'Movie Release',
                                    'Behind The Scenes' => 'Behind The Scenes',
                                    'Franchise Information' => 'Franchise Information'                            
                            
                                    );

                            echo form_dropdown('category',$data,$category);
                            echo"<div class=\"msg-error\"></div>";
                            
                            echo form_label("Media: ","type")."<br/>";

                            $data = array(
                                    
                                    '' => 'Type',
                                    'TV series' => 'Tv Series',
                                    'Movies' => 'Movies'                           
                            
                                    );

                            echo form_dropdown('type',$data,$type);
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Content: ","content")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'content',
                                    'id' => 'content',
                                    'value' => $content,
                                    'type' => 'text',
                                    'required' => 'required',
                                    'maxlength' => '1600',
                                    'class' => 'bigfield',
                                );

                            echo form_textarea($data);
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Video Link: <label style=\"color:red;text-transform:none;\"><small> *Optional *Acceptable sources are in the Video Type Below</small></label>","video")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'video',
                                    'id' => 'video',
                                    'value' => $video_link,
                                    'type' => 'url',
                                    'maxlength' => '300',
                                    'class' => 'bigfield'
                                );

                            echo form_input($data);
                            echo"<div class=\"msg-error\"></div>";
                            echo form_label("Video Type: ","video_type")."<br/>";

                            $data = array(
                                    
                                    '' => 'Video Type',
                                    'Youtube'=> 'Youtube',
                                    'Vimeo' => 'Vimeo',
                                    'Daily Motion' => 'Daily Motion'  
                            
                                    );

                            echo form_dropdown('video_type',$data,$video_type);
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Sources: <label style=\"color:red;text-transform:none;\"><small>*Optional *Use commas to seperate sources </small></label>","sources")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'sources',
                                    'id' => 'sources',
                                    'value' => $sources,
                                    'type' => 'text',
                                    'maxlength' => '300',
                                    'class' => 'bigfield'
                                );

                            echo form_input($data);
                            echo"<div class=\"msg-error\"></div><br/>";

                            echo form_label("Movie Banner: <label style=\"color:red;text-transform:none;\"><small> *Not more than 3MB </small></label>","sources")."<br/>";

                            $data = array(
                            
                                        'name' => 'banner',
                                        'id' => 'banner',                            
                                        'value' => $this->input->post('banner')
                                    );
                            
                            echo form_upload($data);
                            echo"<div class=\"msg-error\"></div><br/>";
                            // closing the form

                            echo form_submit('edit','Edit NEWS');

                            echo form_close();
                        ?>
                        
                        </div>
                    </div>
                    <!-- END PRIMARY -->
                        
                        
                       
                    </div>
                    <!-- END CONTENT -->
                    
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
                <!-- END CONTENT -->