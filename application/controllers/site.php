 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
        $this->home() ;
	}
    
    
    /*
    *
    * To allow passing of data into headers and footers
    * create seperate  functions that will allow us pass data 
    * without us having to think about doing that in individual methods
    *
    */
        
    
    /*public*/ function view_header(){
    
         $this->load->view('view_header');
    }
    
    /*public*/ function view_footer_1(){
    
        /*
        * fetch data for footer and pass
        */
        
         $this->load->view('view_footer_1');
    }
    
    /*public*/ function view_footer_2(){
        
        /*
        *fetch data for footer and pass
        */
    
        $this->load->view('view_footer_2');
    }
    
    
    public function home(){
        
        // temp content
        
        //echo "home";
    
        /*
        *
            initialize data from models here
        *
        */
        
         $this->view_header();
        
        
        /*
        *
            choose 1 of the content_homes for homepage content display
        *
        */
        
         
         $this->load->view('view_content_home_3');
        
         $this->load->view('view_content_home_2');
        
         //$this->load->view('view_content_home_1');
        
         $this->load->view('view_content_home_4');
        
         $this->load->view('view_content_home_5');
        
         //$this->load->view('view_content_home_6');
        
        /*
        *
            choose 1 of the footers  for homepage footer
        *
        */
         $this->view_footer_1();
    
        //$this->view_footer_2();
    
    }
    
    
    public function movie_news(){
    
        // temp content
        
        //echo "movie news";
        /*
        *
            initialize data from models here
        *
        */
        
        $this->view_header();
        
        /*
        *
            content for movie news
        *
        */
        
        //loading user model
        $this->load->model('model_users');
        
        //loading latest movie news
        $data['latest_movie_news'] = $this->model_users->get_latest_movie_news();

        
        
        //loading best movie news
        
        $data['best_movie_news'] = $this->model_users->get_best_movie_news();
        
        
        //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();
        
        $this->load->view('view_content_movie_news',$data);
        
        
        /*
        *
            choose 1 of the footers for movie news footer
        *
        */
        // $this->view_footer_1();
    
         $this->view_footer_2();
        
    }

    
     public function tv_series_news(){
    
         // temp content
        
        //echo "series news";
             
        $this->view_header();
        
        /*
        *
            content for movie news
        *
        */
         
        //loading user model
         
        $this->load->model('model_users');
         
        //loading latest movie news
        $data['latest_series_news'] = $this->model_users->get_latest_series_news();

        //loading best movie news
        
        $data['best_series_news'] = $this->model_users->get_best_series_news();
    
        //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();
         
         $this->load->view('view_content_series_news',$data);
        
        
        /*
        *
            choose 1 of the footers for movie news footer
        *
        */
        // $this->load->view('view_footer_1');
    
        $this->load->view('view_footer_2');
        
    }
    
    public function movies(){
    
        // temp content
        
        //echo "movie reviews";
    
        
         $this->view_header();
        
        /*
        *
            content for movie news
        *
        */
        //loading user models
        $this->load->model('model_users');
        
        //loading latest movie reviews
        
        $data['latest_movie_reviews'] = $this->model_users->get_latest_movie_reviews();
        
        //loading best movie reviews
        $data['best_movie_reviews'] = $this->model_users->get_best_movie_reviews();

        //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();        
        
        $this->load->view('view_content_movies',$data);
        
        
        /*
        *
            choose 1 of the footers for movie news footer
        *
        */
        // $this->view_footer_1();
    
        $this->view_footer_2();
        
    }
    
    public function series(){
    
        // temp content
        
        //echo "series reviews";
    
        
        $this->view_header();
        
        /*
        *
            content for series reviews
        *
        */
        //loading user models
        $this->load->model('model_users');
        
        //loading latest movie reviews
        
        $data['latest_series_reviews'] = $this->model_users->get_latest_series_reviews();
        
        //loading best movie reviews
        $data['best_series_reviews'] = $this->model_users->get_best_series_reviews();    
        
        //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();        
        
        $this->load->view('view_content_series',$data);
        
        
        /*
        *
            choose 1 of the footers for movie news footer
        *
        */
         $this->view_footer_1();
    
        // $this->view_footer_2();
        
    }
    
    
    public function contact_us(){
    
    
        $this->view_header();
        
        /*
        *
            content for contact us
        *
        */
        
        $this->load->view('view_content_contact_us');
        
        /*
        *
            choose one of the footers 
        *
        */
        
         $this->view_footer_1();
    
         //$this->view_footer_2();
        
    }
    
    public function sign_up(){
    
            
        $this->view_header();
        
        /*
        *
            content for sign up
        *
        */
        
        
        $this->load->view('view_content_sign_up');
        
        /*
        *
            choose one of the footers 
        *
        */
        
         $this->view_footer_1();
    
         //$this->view_footer_2();
    
    }
    
    //sign up form action
    public function send_signup(){
    
    
        $this->load->library("form_validation");// loading form validation libraries
        
        // setting form validation parameters
        $this->form_validation->set_rules("username","Username","required|alpha|xss_clean|trim|is_unique[users.username]");
        $this->form_validation->set_rules("email","Email","required|valid_email|xss_clean|trim|is_unique[users.email]");
        $this->form_validation->set_rules("password","Password","required|xss_clean|trim");
        $this->form_validation->set_rules("cpassword","Confirm Password","required|xss_clean|trim|matches[password]");
        $this->form_validation->set_rules("bio","Bio","required|xss_clean|trim");
        
        // reported error for when email or username exists on permanent user database 
        $this->form_validation->set_message('is_unique','Username or Email is already in use');
        
        // if validation is okay
        if($this->form_validation->run()){
            
            //generate a random key
            $key = md5(uniqid());
            
            //create email
            $this->load->library('email',array('mailtype'=>'html'));
            $this->load->model('model_users');
            
            $this->email->from('validate@sitename.com','Administrator');
            $this->email->to($this->input->post('email'));
            $this->email->subject("Confirm your account.");
            
            $message = "<p>Thank you for signing up!</p>";
            $message .= "<p><a href='".base_url()."site/confirm_user/$key'>click here</a> to confirm your account; login afterwards</p>";
            
            //send an email to the user
            $this->email->message($message);
        /*
        *
            content for sign up
        *
        */
            
            //load header
            $this->view_header();
            
            
            // add user to temp_users db
            if($this->model_users->add_temp_user($key)){    
                
                if($this->email->send()){
                
                    $data['error_message'] = "Check your Email for Account Confirmation!";
            
                }else{
                
                    $data['error_message'] = "Confirmation Email not sent !";
            
                }

            }else{
            
                $data['error_message'] = "Problem creating user!";
                
            }
            
            $this->load->view('view_content_sign_up',$data); // pass error message into sign up view
            
            $this->view_footer_1(); 
    
            //$this->view_footer_2();

        }else{// if validation is not run
            
            $this->sign_up();
        
        }
        
    }
    
    
    //login page    
    public function login(){
    
            
        $this->view_header();
        
        /*
        *
            content for contact us
        *
        */
        
        $this->load->view('view_content_login');
        
        /*
        *
            choose one of the footers 
        *
        */
        
         //$this->view_footer_1();
    
         $this->view_footer_2();
    
    }
        
    //form action for user login
    public function send_login(){
    
    
        $this->load->library("form_validation");

        $this->form_validation->set_rules("email","Email","required|valid_email|xss_clean|trim|callback_validate_login");
        $this->form_validation->set_rules("password","Password","required|xss_clean|md5|trim");
              
        if( $this->form_validation->run() == FALSE ){
            
            // go back to login page and declare errors
            
            $this->login();
            
        }else{
            
            $this->load->model("model_users");
            
            // fetch user_id from logged in email 
            
            $user_id = $this->model_users->get_user_id($this->input->post('email')); 
    
            // create session variables including session user_id
            $data = array(
                
                    'user_id' => $user_id,
                    'is_logged_in' => 1,
                    'email' => $this->input->post('email') 
            
                    );
            
            //set session variables            
            $this->session->set_userdata($data);
            
            // redirect to user profile page
            redirect('site/profile/'.$user_id);    
        
        }
    }
    
    public function validate_login(){
    
        // load user model
        $this->load->model('model_users');
        
        // check if user email exists and/or matches a password on the database using precreated login method
        if($this->model_users->can_log_in()){
        
            return true;// allow user to login
            
        } else {
            
            // notify user of incorrect login parameters
            $this->form_validation->set_message('validate_login','Incorrect Login Parameters');
            
            return false;// do not allow user to login
        
        }
    
    }
    
    
    // logout page
    public function logout(){
        $this->session->sess_destroy();// destroy session
        
        // redirect to home page
        redirect('site');
    }
    
    // restricted access page
    public function restricted(){
    
        $this->view_header();
        
        /*
        *
            content for restricted page
        *
        */
        
        $this->load->view('view_content_restricted');
        
        /*
        *
            choose one of the footers 
        *
        */
        
         //$this->view_footer_1();
    
         $this->view_footer_2();        
        
    }
    
    // confirm user account page
    public function confirm_user($key){
        
        // check if user sign up key is set else redirect to restricted page
        if(!isset($key)) redirect("site/restricted");
        
        // load model users containing confirmation methods
        $this->load->model('model_users');
        
        // check for validity of key with model method
        if($this->model_users->is_key_valid($key)){
        
          // add user to permanent database and redirect to profile page
          if($this->model_users->add_user($key)){
            
            redirect("site/login"); // if user is added to permanent database redirect to login page            
          
          }else echo " confirmation failed";// notify user of failed confirmation
            
        }else echo "invalid key";// notify user of invalid key
    
    }
    
    
    // user profile page
    public function profile($user_id){
        
        if(!isset($user_id)){ // check if user_id isset else redirect to restricted page
            redirect("site/restricted");
        }
        
        $this->load->model("model_users"); // load user model
        
        // data arrays for user data
        $data["user_data"] = $this->model_users->get_user_data($user_id); // fetch user data from db using user_id
        
        

        if($data["user_data"]==null){ // chech if user data fetched from database is empty
            redirect("site/restricted"); // redirect to restricted page if data array is empty
        }
        $data['user_latest_posts'] = $this->model_users->get_user_latest_posts($user_id); // fetch user posts in order of latest first
        $data['user_best_posts'] = $this->model_users->get_user_best_posts($user_id); // fetch user posts in order of latest first
        $data["user_posts_num"] = $this->model_users->get_user_posts_num($user_id); // fetch user posts num from db using user_id
        $data["user_noted_num"] = $this->model_users->get_num_noted_by_user($user_id); // fetch user noted num from db using user_id
        $data["user_notes_num"] = $this->model_users->get_num_user_notes($user_id); // fetch user notes num from db using user_id        
        $data["user_favorite_movies"] = $this->model_users->get_user_favorite_movies($user_id);
        $data["user_favorite_series"] = $this->model_users->get_user_favorite_series($user_id);
            
       //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();    
        // show headers
        $this->view_header();
        
        /*
        *
            content for restricted page
        *
        */
        
        // pass data array into view
        $this->load->view('view_user_profile',$data);
        
        /*
        *
            choose one of the footers 
        *
        */
        
         //$this->view_footer_1();
    
         $this->view_footer_2();     
    
    
    }
    
    //create news page
    
    public function create_news(){
        if(!($this->session->userdata('is_logged_in'))){
            redirect("site/restricted");   
        }
        
        $this->view_header();
        
        
        /*
        *
            content for create news page
        *
        */
        
        //loading recent searches and recent tags
        $this->load->model('model_users');
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();
        $this->load->view('view_content_create_news',$data);
        
        /*
        *
            choose one of the footers 
        *
        */
        
         //$this->view_footer_1();
    
         $this->view_footer_2();         
        
    
    }
     //create news page
    
    public function review_movies(){
        if(!($this->session->userdata('is_logged_in'))){ // if user is not logged in redirect to restricted page
            redirect("site/restricted");   
        }
        
        $this->view_header();
        
        
        /*
        *
            content for create news page
        *
        */
        
         //loading recent searches and recent tags
        $this->load->model('model_users');
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();        
        $this->load->view('view_content_review_movies',$data);
        
        /*
        *
            choose one of the footers 
        *
        */
        
         //$this->view_footer_1();
    
         $this->view_footer_2();         
        
    
    }
    
    public function review_series(){
        if(!($this->session->userdata('is_logged_in'))){ // if user is not logged in redirect to restricted page
            redirect("site/restricted");   
        }
        
        $this->view_header();
        
        
        /*
        *
            content for create news page
        *
        */
         //loading recent searches and recent tags
        $this->load->model('model_users');
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();        
        
        $this->load->view('view_content_review_series',$data);
        
        /*
        *
            choose one of the footers 
        *
        */
        
         //$this->view_footer_1();
    
         $this->view_footer_2();         
        
    
    }

    //publish news
    public function publish_news(){

        $this->load->library("form_validation");// loading form validation libraries
        
        // setting form validation parameters
        $this->form_validation->set_rules("title","Headline","required|xss_clean|trim");
        $this->form_validation->set_rules("tags","Tags","xss_clean|trim");
        $this->form_validation->set_rules("category","Category","required|xss_clean|trim");
        $this->form_validation->set_rules("type","Media","required|xss_clean|trim");
        $this->form_validation->set_rules("content","Content","required|xss_clean|trim");
        $this->form_validation->set_rules("video","Video","valid_url|xss_clean|trim");
        
        if(empty($_FILES['banner']['name'])){
            
            $this->form_validation->set_rules("banner","Banner","required|xss_clean|trim");
    
        } else $this->form_validation->set_rules("banner","Banner","xss_clean|trim");
        
        $this->form_validation->set_rules("sources","Sources","xss_clean|trim");
        
        
        $video = $this->input->post('video'); // check value of video link
        
        //if video is set make video type required
        if(($video!=null) && ($video!="")){
        
            $this->form_validation->set_rules("video_type","Video Type","required|xss_clean|trim");    
        
        }else { // else video type is not requires
            
            $this->form_validation->set_rules("video_type","Video Type","xss_clean|trim");
        
        }
        
        // if validation is not okay
        if($this->form_validation->run() == FALSE){
            
            $this->create_news();
    
        }else{ // if validation is okay
        
            //upload picture
            
            //setting picture configurations
            $config['upload_path'] = './uploads/banners';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('banner')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->add_news()){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Article not created";
                }
            
            }
            
            
            
           
                
        }
    }
    
    public function publish_movie_review(){
    
        $this->load->library("form_validation");// loading form validation libraries
        
        // setting form validation parameters
        $this->form_validation->set_rules("title","Movie Title","required|xss_clean|trim");    
        $this->form_validation->set_rules("year","Movie year","required|xss_clean|trim");    
        $this->form_validation->set_rules("tags","Tags","xss_clean|trim");    
        $this->form_validation->set_rules("rating","Critic Score","required|xss_clean|trim");    
        $this->form_validation->set_rules("content","Your Review","required|xss_clean|trim");
        $this->form_validation->set_rules("video","Video","valid_url|xss_clean|trim");
        
        if(empty($_FILES['banner']['name'])){
            
            $this->form_validation->set_rules("banner","Banner","required|xss_clean|trim");
    
        } else $this->form_validation->set_rules("banner","Banner","xss_clean|trim");  
        
        $video = $this->input->post('video'); // check value of video link
        
        //if video is set make video type required
        if(($video!=null) && ($video!="")){
        
            $this->form_validation->set_rules("video_type","Video Type","required|xss_clean|trim");    
        
        }else { // else video type is not requires
            
            $this->form_validation->set_rules("video_type","Video Type","xss_clean|trim");
        
        }
        
        // if validation is not okay
        if($this->form_validation->run() == FALSE){
            
            $this->review_movies();
    
        }else{ // if validation is okay
        
            //upload picture
            
            //setting picture configurations
            $config['upload_path'] = './uploads/banners';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('banner')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->add_movie_review()){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Article not created";
                }
            
            }
        }
        
        
        
        
    
    }
    
    
    public function publish_series_review(){
    
        $this->load->library("form_validation");// loading form validation libraries
        
        // setting form validation parameters
        $this->form_validation->set_rules("title","Movie Title","required|xss_clean|trim");    
        $this->form_validation->set_rules("year","Movie year","required|xss_clean|trim");    
        $this->form_validation->set_rules("tags","Tags","xss_clean|trim");    
        $this->form_validation->set_rules("rating","Critic Score","required|xss_clean|trim");    
        $this->form_validation->set_rules("type","Critic","required|xss_clean|trim");    
        $this->form_validation->set_rules("content","Your Review","required|xss_clean|trim");
        $this->form_validation->set_rules("video","Video","valid_url|xss_clean|trim");
        
        if(empty($_FILES['banner']['name'])){
            
            $this->form_validation->set_rules("banner","Banner","required|xss_clean|trim");
    
        } else $this->form_validation->set_rules("banner","Banner","xss_clean|trim");  
        
        $video = $this->input->post('video'); // check value of video link
        
        //if video is set make video type required
        if(($video!=null) && ($video!="")){
        
            $this->form_validation->set_rules("video_type","Video Type","required|xss_clean|trim");    
        
        }else { // else video type is not requires
            
            $this->form_validation->set_rules("video_type","Video Type","xss_clean|trim");
        
        }
        
        // if validation is not okay
        if($this->form_validation->run() == FALSE){
            
            $this->review_series();
    
        }else{ // if validation is okay
        
            //upload picture
            
            //setting picture configurations
            $config['upload_path'] = './uploads/banners';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('banner')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->add_series_review()){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Article not created";
                }
            
            }
        }
          
        
    
    }
    
    // view articles
    public function article($post_id){
        if(!isset($post_id)) redirect("site/restricted");
        
        //loading model_users
        
        $this->load->model('model_users');
        
        $data['article_details'] = $this->model_users->get_article($post_id);
        $data['article_comments'] = $this->model_users->get_post_comments($post_id);
        // if article does not exist
        if($data['article_details'] == null) redirect("site/restricted");

         //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();
            
        $this->view_header();
    
        $this->load->view("view_content_article",$data);
        
        //$this->view_footer_1();
        
        $this->view_footer_2();
        
    }
    
    
    public function comment($post_id){
        if(!isset($post_id)) redirect("site/restricted");
        
        // checking validations
        $this->load->library("form_validation");// loading form validation libraries
        
        // setting form validation parameters
        $this->form_validation->set_rules("title","Comment title","required|xss_clean|trim");    
        $this->form_validation->set_rules("comment","Comment","required|xss_clean|trim");          
        
        //checking if validation is run
        
        if($this->form_validation->run()==FALSE){
            $this->article($post_id);
        }else{    
            //loading model users
            $this->load->model("model_users");
            if($this->model_users->add_comment($post_id)){// check if news is added to db 
                
                redirect("site/article/".$post_id."#comment");
                
            }else{
                echo "Comment not created";
            }
            
        }
    
    }
    
    public function search($searchquery){
        
        if(!isset ($searchquery)){// if search is being carried out through searchbox
            
            $this->load->library("form_validation");//loading form validation library
            
            $this->form_validation->set_rules("search","Search Box","required|xss_clean|trim");
            
            //checking if validation is run
            
            if($this->form_validation->run()==FALSE){// if validation doesnt run
            
                redirect(base_url());//redirect home...sad face
                
            }else{
                
                //redirect to proper search query
                 redirect(base_url()."site/search/".$this->input->post('search'));
                
            }
        
        
        }else{
                              
            //load model
            $this->load->model('model_users');
            $searchquery = trim($searchquery);
            //carry out search
            $data['searchResult'] = $this->model_users->model_search($searchquery);  
            echo "$searchquery";    
            //load views
        }
    
    
    }
    
    public function note($user_id){
    
        if(($this->session->userdata('is_logged_in'))){
            $session_id = $this->session->userdata('user_id');
            
            //echo $user_id;
            // check if session_user is on his own profile page 
            if($session_id!=$user_id){
                //load users model
                $this->load->model('model_users');
                
                //check whether session user had previously respected user
                if($this->model_users->check_note_status($user_id)){// if user has respected user
                
                    // show denote button
                    $this->denote_user($user_id);
                    
                }else{
                
                    //show note button
                    $this->note_user($user_id);
                
                }
            
            }
            
            
        }
    }
    
    
    public function note_user($user_id){
    
        $data['user_id'] = $user_id;
        
        $this->load->view("view_note_user",$data);
    
    }
    
    public function denote_user($user_id){
    
        $data['user_id'] = $user_id;
        
        $this->load->view("view_denote_user",$data);
    
    }
    
        
    public function note_action($user_id){
    
        //load user model
        $this->load->model('model_users');
        
        if($this->model_users->model_note($user_id)){
        
            $this->denote_user($user_id);
        }
        
    }
    
    public function denote_action($user_id){
    
        //load user model
        $this->load->model('model_users');
        
        if($this->model_users->model_denote($user_id)){
        
            $this->note_user($user_id);
        }
        
    }
    
    
    
    public function add_fav_movie(){
        if(!($this->session->userdata('is_logged_in'))){
            redirect("site/restricted");   
        }
        //load header
        $this->view_header();
        
           //loading recent searches and recent tags
        $this->load->model('model_users');
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();        
        
        //load view
        $this->load->view("view_add_fav_movies",$data);
        
        //load footer
        //$this->view_footer_1();
        $this->view_footer_2();
    
    }
    
    public function add_fav_series(){
        if(!($this->session->userdata('is_logged_in'))){
            redirect("site/restricted");   
        }
    
        //load header
        $this->view_header();
        
           //loading recent searches and recent tags
        $this->load->model('model_users');
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();        
        
        //load view
        
        $this->load->view("view_add_fav_series",$data);
        
        //load footer
        //$this->view_footer_1();
        $this->view_footer_2();
    
    }
    
    public function add_fav_action(){
            
        $this->load->library("form_validation");//loading form validation library
            
        $this->form_validation->set_rules("title","Title","required|xss_clean|trim");
        
        if(empty($_FILES['thumbnail']['name'])){
            
            $this->form_validation->set_rules("thumbnail","Movie Picture","required|xss_clean|trim");
    
        }
        
        if($this->form_validation->run()==FALSE){
            $type = $this->input->post('type');
            if($type='movie'){
                $this->add_fav_series();
            }else $this->add_fav_movies();
        }else{
            
            
            //setting picture configurations
            $config['upload_path'] = './uploads/thumbnails';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '200';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('thumbnail')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->add_fav()){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Unforeseen Error!!";
                }
            
            }
            
        
        }
    
    }
        
    public function edit_favs($fav_id){
        
        $this->view_header();
        
        //loading user data model
        $this->load->model("model_users");
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();        
        
        $data['fav_data'] = $this->model_users->get_fav_data($fav_id);
        
        $this->load->view("view_edit_favs",$data);
        
        
        //$this->view_footer_1();
        $this->view_footer_2();
            
    }   
    
    
    public function update_fav_action($fav_id){
    
        $this->load->library("form_validation");//loading form validation library
            
        $this->form_validation->set_rules("title","Title","required|xss_clean|trim");
        
        if(empty($_FILES['thumbnail']['name'])){
            
            $this->form_validation->set_rules("thumbnail","Movie Picture","required|xss_clean|trim");
    
        }
        
        if($this->form_validation->run()==FALSE){
            $type = $this->input->post('type');
                $this->edit_favs($fav_id);
        }else{
            
            
            //setting picture configurations
            $config['upload_path'] = './uploads/thumbnails';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '200';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('thumbnail')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->update_fav($fav_id)){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Unforeseen Error!!";
                }
            
            }
            
        
        }    
    
    }
    
    public function edit_profile($user_id){
        if(!($this->session->userdata("is_logged_in"))){
            redirect("site/restricted");
        }else{
            $session_id = $this->session->userdata("user_id");
            if($user_id!=$session_id) redirect("site/restricted");
        }
        
        $this->view_header();
        
        //loading user models
        $this->load->model('model_users');
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();  
        $data['user_data'] = $this->model_users->get_user_data($user_id);
        
        
        $this->load->view("view_edit_profile",$data);
        
        //$this->view_footer_1();
        $this->view_footer_2();
    }
    
    public function update_profile_action($user_id){
    
        $this->load->library("form_validation");//loading form validation library
            
        $this->form_validation->set_rules("bio","Bio","required|xss_clean|trim");
        
        if(empty($_FILES['dp']['name'])){
            
            $this->form_validation->set_rules("dp","Display Picture","required|xss_clean|trim");
    
        }
        
        if($this->form_validation->run()==FALSE){
                $this->edit_profile($user_id);
        }else{
            
            
            //setting picture configurations
            $config['upload_path'] = './uploads/dps';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '500';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('dp')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->update_profile($user_id)){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Unforeseen Error!!";
                }
            
            }
            
        
        }    
    
    }
    
    public function edit_movie($post_id){
    
        if(!isset($post_id)) redirect("site/restricted");
        
        //loading model_users
        
        $this->load->model('model_users');
        
        $data['article_details'] = $this->model_users->get_article($post_id);
        // if article does not exist
        if($data['article_details'] == null) redirect("site/restricted");

         //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();
            
        $this->view_header();
    
        $this->load->view("view_edit_movies",$data);
        
        //$this->view_footer_1();
        
        $this->view_footer_2();
    
    }
    
    public function edit_news($post_id){
        //loading model_users
        
        $this->load->model('model_users');
        
        $data['article_details'] = $this->model_users->get_article($post_id);
        // if article does not exist
        if($data['article_details'] == null) redirect("site/restricted");

         //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();
            
        $this->view_header();
    
        $this->load->view("view_edit_news",$data);
        
        //$this->view_footer_1();
        
        $this->view_footer_2();    
    
    }
    
    public function edit_series($post_id){
//loading model_users
        
        $this->load->model('model_users');
        
        $data['article_details'] = $this->model_users->get_article($post_id);
        // if article does not exist
        if($data['article_details'] == null) redirect("site/restricted");

         //loading recent searches and recent tags
        
        $data['recent_tags'] = $this->model_users->get_recent_tags();
        $data['recent_searches'] = $this->model_users->get_recent_searches();
            
        $this->view_header();
    
        $this->load->view("view_edit_series",$data);
        
        //$this->view_footer_1();
        
        $this->view_footer_2();    
    
    }
    
    
    
    
    
//publish news
    public function edit_news_article($post_id){

        $this->load->library("form_validation");// loading form validation libraries
        
        // setting form validation parameters
        $this->form_validation->set_rules("title","Headline","required|xss_clean|trim");
        $this->form_validation->set_rules("tags","Tags","xss_clean|trim");
        $this->form_validation->set_rules("category","Category","required|xss_clean|trim");
        $this->form_validation->set_rules("type","Media","required|xss_clean|trim");
        $this->form_validation->set_rules("content","Content","required|xss_clean|trim");
        $this->form_validation->set_rules("video","Video","valid_url|xss_clean|trim");
        
        if(empty($_FILES['banner']['name'])){
            
            $this->form_validation->set_rules("banner","Banner","required|xss_clean|trim");
    
        } else $this->form_validation->set_rules("banner","Banner","xss_clean|trim");
        
        $this->form_validation->set_rules("sources","Sources","xss_clean|trim");
        
        
        $video = $this->input->post('video'); // check value of video link
        
        //if video is set make video type required
        if(($video!=null) && ($video!="")){
        
            $this->form_validation->set_rules("video_type","Video Type","required|xss_clean|trim");    
        
        }else { // else video type is not requires
            
            $this->form_validation->set_rules("video_type","Video Type","xss_clean|trim");
        
        }
        
        // if validation is not okay
        if($this->form_validation->run() == FALSE){
            
            $this->edit_news($post_id);
    
        }else{ // if validation is okay
        
            //upload picture
            
            //setting picture configurations
            $config['upload_path'] = './uploads/banners';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('banner')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->edit_news($post_id)){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Article not Editted";
                }
            
            }
            
            
            
           
                
        }
    }
    
    public function edit_movie_review($post_id){
    
        $this->load->library("form_validation");// loading form validation libraries
        
        // setting form validation parameters
        $this->form_validation->set_rules("title","Movie Title","required|xss_clean|trim");    
        $this->form_validation->set_rules("year","Movie year","required|xss_clean|trim");    
        $this->form_validation->set_rules("tags","Tags","xss_clean|trim");    
        $this->form_validation->set_rules("rating","Critic Score","required|xss_clean|trim");    
        $this->form_validation->set_rules("content","Your Review","required|xss_clean|trim");
        $this->form_validation->set_rules("video","Video","valid_url|xss_clean|trim");
        
        if(empty($_FILES['banner']['name'])){
            
            $this->form_validation->set_rules("banner","Banner","required|xss_clean|trim");
    
        } else $this->form_validation->set_rules("banner","Banner","xss_clean|trim");  
        
        $video = $this->input->post('video'); // check value of video link
        
        //if video is set make video type required
        if(($video!=null) && ($video!="")){
        
            $this->form_validation->set_rules("video_type","Video Type","required|xss_clean|trim");    
        
        }else { // else video type is not requires
            
            $this->form_validation->set_rules("video_type","Video Type","xss_clean|trim");
        
        }
        
        // if validation is not okay
        if($this->form_validation->run() == FALSE){
            
            $this->edit_movie($post_id);
    
        }else{ // if validation is okay
        
            //upload picture
            
            //setting picture configurations
            $config['upload_path'] = './uploads/banners';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('banner')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->edit_movie_review($post_id)){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Article not Editted";
                }
            
            }
        }
        
        
        
        
    
    }
    
    
    public function edit_series_review(){
    
        $this->load->library("form_validation");// loading form validation libraries
        
        // setting form validation parameters
        $this->form_validation->set_rules("title","Movie Title","required|xss_clean|trim");    
        $this->form_validation->set_rules("year","Movie year","required|xss_clean|trim");    
        $this->form_validation->set_rules("tags","Tags","xss_clean|trim");    
        $this->form_validation->set_rules("rating","Critic Score","required|xss_clean|trim");    
        $this->form_validation->set_rules("type","Critic","required|xss_clean|trim");    
        $this->form_validation->set_rules("content","Your Review","required|xss_clean|trim");
        $this->form_validation->set_rules("video","Video","valid_url|xss_clean|trim");
        
        if(empty($_FILES['banner']['name'])){
            
            $this->form_validation->set_rules("banner","Banner","required|xss_clean|trim");
    
        } else $this->form_validation->set_rules("banner","Banner","xss_clean|trim");  
        
        $video = $this->input->post('video'); // check value of video link
        
        //if video is set make video type required
        if(($video!=null) && ($video!="")){
        
            $this->form_validation->set_rules("video_type","Video Type","required|xss_clean|trim");    
        
        }else { // else video type is not requires
            
            $this->form_validation->set_rules("video_type","Video Type","xss_clean|trim");
        
        }
        
        // if validation is not okay
        if($this->form_validation->run() == FALSE){
            
            $this->review_series();
    
        }else{ // if validation is okay
        
            //upload picture
            
            //setting picture configurations
            $config['upload_path'] = './uploads/banners';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '3000';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            //loading upload class with picture config preferences
            $this->load->library('upload', $config);

            if( ! $this->upload->do_upload('banner')){//if upload is carried out
            			
                echo $this->upload->display_errors();
		                
            }else {
            
                //update database
                
                //load user model
                
                $this->load->model('model_users');
                
                if($this->model_users->edit_series_review($post_id)){// check if news is added to db 
                 
                    //redirect to user profile page
                    
                    redirect('site/profile/'.$this->session->userdata('user_id'));
                    
                }else{
            
                    //redirect to create news page and report error
                    echo "Article not created";
                }
            
            }
        }
          
        
    
    }    
    
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */