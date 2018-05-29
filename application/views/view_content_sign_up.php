                <!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
                
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                        <div id="sign_up">
                        <h2>Sign Up</h2>

                            <!-- The feedback message is here -->
                        	<div class="usermessagea"><?php 
                                                            echo validation_errors();
                                                            if(isset($error_message)){
                                                                echo "<p>".$error_message."</p>";
                                                            }
                                                        ?></div>
                        	
                            <?php
                                
                                // loading form helper
                                $this->load->helper("form");
            
                                // opening form
                                echo form_open("site/send_signup");
                                
                                // Username Data

                                echo form_label("Username: ","username")."<br/>";
                                
                                $data = array(
                                
                                    'name' => 'username',
                                    'id' => 'username',
                                    'value' => $this->input->post('username'),
                                    'type' => 'text',
                                    'required' => 'required',
                                    'maxlength' => '20'
                                    
                                );
                                

                               
                                echo form_input($data);

                                echo"<div class=\"msg-error\"></div>";
                                
                                 // Email Data
                                echo form_label("Email: ","email")."<br/>";

                                $data = array(
                                
                                    'name' => 'email',
                                    'id' => 'email',
                                    'value' => $this->input->post('email'),
                                    'type' => 'text',
                                    'required' => 'required',
                                    'maxlength' => '30'
                                    
                                );

                                echo form_input($data);
                                echo"<div class=\"msg-error\"></div>";
                                
                                // Password Data
                                echo form_label("Password: ","password")."<br/>";

                                $data = array(
                                
                                    'name' => 'password',
                                    'id' => 'password',
                                    'value' => '',
                                    'type' => 'password',
                                    'required' => 'required',
                                    'maxlength' => '12'
                                );

                                echo form_input($data);
                                echo"<div class=\"msg-error\"></div>";

                                // Confirm Password Data
                                echo form_label("Confirm Password: ","cpassword")."<br/>";

                                $data = array(
                                
                                    'name' => 'cpassword',
                                    'id' => 'cpassword',
                                    'value' => '',
                                    'type' => 'password',
                                    'required' => 'required',
                                    'maxlength' => '12'
                                    
                                );

                                echo form_input($data);
                                
                                echo"<div class=\"msg-error\"></div>";

                                echo form_label("Bio: ","bio")."<br/>";

                                $data = array(
                                
                                    'name' => 'bio',
                                    'id' => 'bio',
                                    'value' => $this->input->post('bio'),
                                    'type' => 'text',
                                    'required' => 'required',
                                    'maxlength' => '250',
                                    'cols' => '23',
                                    'rows' => '8'
                                    
                                );
                                echo form_textarea($data);

                                echo"<div class=\"msg-error\"></div>";

                                // closing the form

                                echo form_submit('sign_up','Sign Up');

                                echo form_close();

                            
                            ?>
                        
                        </div>
                    </div>
                    <!-- END PRIMARY -->
                                        <!-- START SIDEBAR -->
                    <div id="sidebar" class="group">
                    
                        <div class="widget-first widget text-image">
                            <h3>Customer support</h3>
                            <div class="text-image" style="text-align:left"><img src="images/callus3.gif" alt="Customer support" /></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing blandit enim libero,</p>
                        </div>
                        
                        <div class="widget-last widget text-image">
                            <div class="text-image" style="text-align:left"><img src="images/arsk9hjn11.jpg" alt="" /></div>
                        </div>
                        
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END CONTENT -->