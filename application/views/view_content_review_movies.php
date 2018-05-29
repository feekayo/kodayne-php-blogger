                <!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
                
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                        <!-- SLOGAN --> 
                        <div id="slogan" class="inner">
                            <h1 class="only">Review <span>Movies</span></h1>
                        </div>         
                    <!-- END SLOGAN --> 
                        <!-- The feedback message is here -->
                        <div id="sign_up">
                        <div class="usermessagea"><?php echo validation_errors();?></div>
                         <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                        <div id="sign_up">
                        	
                        <?php
                            //loading the form helper    
                            $this->load->helper('form');
                            
                            // opening form
                            echo form_open_multipart("site/publish_movie_review");
                            
                            // Email Data
                            echo form_label("Movie Title: <label style=\"color:red;text-transform:none;\"><small>*do not include release year</small></label>","title")."<br/>";
                                
                            $data = array(
                                    'name' => 'title',
                                    'id' => 'title',
                                    'value' => $this->input->post('title'),
                                    'type' => 'text',
                                    'required' => 'required',
                                    'maxlength' => '100',
                                    'class' => 'bigfield'
                                );

                            echo form_input($data);
                            echo"<div class=\"msg-error\"></div>";
                            

                            echo form_label("Release Year: ","year")."<br/>";
                            if($this->input->post('year')==""){    
                                $date = date("d-m-Y");
                                $exp = explode('-',$date);
                                $year = $exp[2];
                            }else $year = $this->input->post('year');    
                            $data = array(
                                
                                    'name' => 'year',
                                    'id' => 'year',
                                    'value' => $year,
                                    'type' => 'number',
                                    'required' => 'required',
                                    'maxlength' => '4',
                                    'max' => $year,
                                    'min' =>1900,
                                    );

                            echo form_input($data);
                            echo"<div class=\"msg-error\"></div>";
                            // tags
                            echo form_label("Tags: <label style=\"color:red;text-transform:none;\"><small>*Use commas to seperate tags</small>*Optional</label>","tags")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'tags',
                                    'id' => 'tags',
                                    'value' => $this->input->post('tags'),
                                    'type' => 'text',
                                    'required' => 'required',
                                    'maxlength' => '300',
                                    'class' => 'bigfield'
                                );

                            echo form_input($data);
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Critic Score ","rating")."<br/>";

                            $data = array(
                                
                                    'name' => 'rating',
                                    'id' => 'rating',
                                    'value' => $this->input->post('rating'),
                                    'type' => 'number',
                                    'required' => 'required',
                                    'maxlength' => '3',
                                    'max' => '100',
                                    'min' => '0'
                                    );

                            echo form_input($data)."<big> % </big>";
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Review: ","content")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'content',
                                    'id' => 'content',
                                    'value' => $this->input->post('content'),
                                    'type' => 'text',
                                    'required' => 'required',
                                    'maxlength' => '1500',
                                    'class' => 'bigfield',
                                );

                            echo form_textarea($data);
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Video Link: <label style=\"color:red;text-transform:none;\"><small> *Optional *Acceptable sources are in the Video Type Below</small></label>","video")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'video',
                                    'id' => 'video',
                                    'value' => $this->input->post('video'),
                                    'type' => 'url',
                                    'maxlength' => '300',
                                    'class' => 'bigfield'
                                );

                            echo form_input($data);
                            echo"<div class=\"msg-error\"></div>";
                            echo form_label("Video Type: ","video_type")."<br/>";

                            $selected = array($this->input->post('video_type'));

                            $data = array(
                                    
                                    '' => 'Video Type',
                                    'Youtube'=> 'Youtube',
                                    'Vimeo' => 'Vimeo',
                                    'Daily Motion' => 'Daily Motion'  
                            
                                    );

                            echo form_dropdown('video_type',$data,$selected);
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Movie Banner: <label style=\"color:red;text-transform:none;\"><small> *Not more than 3MB </small></label>","sources")."<br/>";

                            $data = array(
                            
                                        'name' => 'banner',
                                        'id' => 'banner',                            
                                        'value' => $this->input->post('banner')
                                    );
                            
                            echo form_upload($data);
                            echo"<div class=\"msg-error\"></div><br/>";
                            // closing the form

                            echo form_submit('publish','PUBLISH REVIEW');

                            echo form_close();

                        ?>
                        
                        </div>
                    </div>
                    <!-- END PRIMARY -->
                        </div>
                        
                        
                       
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