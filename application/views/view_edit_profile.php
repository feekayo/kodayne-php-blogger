                <!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
                
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                        <?php
                            foreach($user_data as $row){
                                
                                    $bio =$row->bio;
                                    $user_id = $row->user_id;
                                
                            }
                            echo " <h2>Edit Profile</h2>"
                        ?>
                       
                        <div id="sign_up">
                        <div class="usermessagea"><?php echo validation_errors();?></div>
                        <?php
                            //loading the form helper

                            

                            $this->load->helper('form');
                            
                            // opening form
                            echo form_open_multipart("site/update_profile_action/$user_id");

                            echo form_label("Display Picture: <label style=\"color:red;text-transform:none;\"><small> *Not more than 500KB </small></label>","sources")."<br/>";

                            $data = array(
                            
                                        'name' => 'dp',
                                        'id' => 'dp',                            
                                        'value' => $this->input->post('dp')
                                    );
                            
                            echo form_upload($data)."<br/>";
                    echo form_label("Bio:","bio")."<br/>";
                                    $tit = $this->input->post('bio');
                                    if($tit!=""){
                                    
                                        $bio = $this->input->post('bio');
                                    
                                    }

                                    $data = array(
                            
                                        'name'=>'bio',
                                        'id'=>'bio',
                                        'value'=>$bio,
                                        'class' => 'bigfield',
                                        'required'=>'required',
                                        'type' => 'text',
                                        'maxlength' => '250',
                                        'cols' => '23',
                                        'rows' => '8'
                                    );
                            echo form_textarea($data)."<br/><br/>";
                            echo form_submit('edit',"edit profile");    
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