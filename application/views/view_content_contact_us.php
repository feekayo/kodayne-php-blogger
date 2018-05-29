                <!-- START CONTENT -->
                <div id="content" class="layout-sidebar-right group">
                
                    <!-- START PRIMARY -->
                    <div id="primary" class="hentry group wrapper-content" role="main">
                    
                        <h2>Contact</h2>
                    
                        <form class="contact-form" method="post" action="sendmail.php" enctype="multipart/form-data">

                            <!-- The feedback message is here -->
                        	<div class="usermessagea"></div>
                        	
                        	<fieldset>
                        
                        		<ul>
                        
                                    <!-- NAME FIELD -->
                        			<li class="text-field">
                        				<label for="name-main">
                        					<span class="label">What's your <span class="highlight-text">name</span>?</span>
                        				</label>
                        				
                        				<input type="text" name="name" id="name-form" class="required" value="" />                   
                        				<div class="msg-error"></div>
                        			</li>            
                                    <!-- END NAME FIELD -->
                                    
                                    <!-- EMAIL FIELD -->
                        			<li class="text-field">
                        				<label for="email-main">
                        					<span class="label">What's your <span class="highlight-text">e-mail</span>?</span> 
                        				</label>
                        
                        				<input type="text" name="email" id="email-form" class="required email-validate" value="" />
                        				<div class="msg-error"></div>
                        			</li>   
                                    <!-- END EMAIL FIELD -->
                                    
                                    <!-- MESSAGE FIELD -->
                        			<li class="textarea-field">
                        				<label for="message-main">
                        					<span class="label">How can I <span class="highlight-text">help</span> you?</span>
                        				</label>
                        				
                        				<textarea name="message" id="message-form" rows="8" cols="30" class="required"></textarea>
                        				<div class="msg-error"></div>
                        			</li>      
                                    <!-- END MESSAGE FIELD -->
                                    
                                    <!-- SUBMIT FIELD -->
                        			<li class="submit-button">
                        				<input type="hidden" name="action" value="sendmail" id="action" />
                        				<input type="submit" name="sendmail" value="send message" class="sendmail alignleft" />			
                                    </li>
                        		</ul>
                        
                        	</fieldset>
                        </form>
                        
                        <script type="text/javascript">
                            // specif here the message for each field of contact form, by ID of field
                        	var error_messages = {
                        		name: "It's required a valid name.",
                        		email: "Write a valid email.",
                        		message: "Insert the message."
                        	};
                        </script>
                        
                    </div>
                    <!-- END CONTENT -->
                    
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