                <!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
                
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                    
                        <h2>Add Favorite Movie</h2>
                        <div id="sign_up">
                        <div class="usermessagea"><?php echo validation_errors();?></div>
                        <?php
                            //loading the form helper    
                            $this->load->helper('form');
                            
                            // opening form
                            echo form_open_multipart("site/add_fav_action");
                            $data = array(
                            
                                        'type'=>'movies'
                            
                                    );

                            echo form_hidden($data);

                            echo form_label("Thumbnail: <label style=\"color:red;text-transform:none;\"><small> *Not more than 200KB </small></label>","sources")."<br/>";

                            $data = array(
                            
                                        'name' => 'thumbnail',
                                        'id' => 'thumbnail',                            
                                        'value' => $this->input->post('thumbnail')
                                    );
                            
                            echo form_upload($data)."<br/>";
                    echo form_label("Movie Title:","sources")."<br/>";
                            $data = array(
                            
                                        'name'=>'title',
                                        'id'=>'title',
                                        'value'=>$this->input->post('title'),
                                        'class' => 'bigfield',
                                        'required'=>'required'
                                    );
                            echo form_input($data)."<br/><br/>";
                            echo form_submit('add','add movie');    
                            echo form_close();
                        ?>
                                                
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