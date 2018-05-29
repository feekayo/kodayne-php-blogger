                <!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
                
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                        <!-- SLOGAN --> 
                        <div id="slogan" class="inner">
                            <h1 class="only">Report Series and <span>Movie</span> News</h1>
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
                            echo form_open_multipart("site/publish_news");
                            
                            // Email Data
                            echo form_label("Headline: ","title")."<br/>";
                                
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
                            // Tags Data
                            echo form_label("Tags: <label style=\"color:red;text-transform:none;\"><small>*Use commas to seperate tags *Optional</small></label>","tags")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'tags',
                                    'id' => 'tags',
                                    'value' => $this->input->post('tags'),
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

                            echo form_dropdown('category',$data);
                            echo"<div class=\"msg-error\"></div>";
                            
                            echo form_label("Media: ","type")."<br/>";

                            $data = array(
                                    
                                    '' => 'Type',
                                    'TV series' => 'Tv Series',
                                    'Movies' => 'Movies'                           
                            
                                    );

                            echo form_dropdown('type',$data);
                            echo"<div class=\"msg-error\"></div>";

                            echo form_label("Content: ","content")."<br/>";
                                
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

                            echo form_label("Sources: <label style=\"color:red;text-transform:none;\"><small>*Optional *Use commas to seperate sources </small></label>","sources")."<br/>";
                                
                            $data = array(
                                
                                    'name' => 'sources',
                                    'id' => 'sources',
                                    'value' => $this->input->post('sources'),
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

                            echo form_submit('publish','PUBLISH NEWS');

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