<?php


class Model_users extends CI_Model{

    // check user login parameters
    public function can_log_in(){
        
        // comparing db parameters
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('password',md5($this->input->post('password')));
        
        // db table
        $query = $this->db->get('users');
        
        // if result matches
        if($query->num_rows() == 1){
        
            return true;    // allow login
            
        } else{
        
            return false; // do not allow login
        
        }
        
    }
    
    // add data to temporary database
    public function add_temp_user($key){
        
        $data = array(
        
            'username' => $this->input->post('username'),
                
            'email' => $this->input->post('email'),
            
            'password' => md5($this->input->post('password')),
            
            'bio' => $this->input->post('bio'),
            
            'key'=>$key
                    
        );
        
        $query = $this->db->insert('temp_users',$data);
    
        if($query){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function is_key_valid($key){
        
        $this->db->where('key',$key);
        $query = $this->db->get('temp_users');
        
        if($query->num_rows() == 1){
        
            return true;
            
        }else return false;
    
        
    }
    
    // adding user to permanent database
    public function add_user($key){
    
        $this->db->where('key',$key);
        $temp_user = $this->db->get('temp_users'); // query to get temp user
    
        if($temp_user){
        
            $row = $temp_user->row();
            
            $data = array(
            
                'username' => $row->username,
                'password' => $row->password,
                'bio' => $row->bio,
                'email' => $row->email
                
            
            );
            $did_add_user = $this->db->insert('users',$data); // query to add user to permanent database
            
        }
        
        if($did_add_user){
        
            $this->db->where('key',$key);
            $this->db->delete('temp_users');
            return true;
        }else{
        
            return false;
        
        }
        
    }
    
    //fetching user id from email address
    public function get_user_id($email){
    
        $this->db->where('email',$email);
        $get_id = $this->db->get('users');// query to get user data
        
        if($get_id){ // if query is run
            
            $row = $get_id->row();
            
            return $row->user_id;
                
        }
    
    }
    
    //getting user data from user_id
    public function get_user_data($user_id){
    
            $query = $this->db->get_where("users",array("user_id" => $user_id));
        
            return $query->result();
    
    
    }
    
    //getting number of posts by user
    public function get_user_posts_num($user_id){
    
        $query = $this->db->get_where("posts",array("user_id"=>$user_id));
    
        return $query->num_rows();
        
    }
    
    
    //fetching number of noted users
    public function get_num_noted_by_user($user_id){
    
        $query = $this->db->get_where("respects",array("respecter_id"=>$user_id));
        
        return $query->num_rows();
    }
    
    //fetching number of notes of a user
    public function get_num_user_notes($user_id){
    
        $query = $this->db->get_where("respects",array("respected_id"=>$user_id));
    
        return $query->num_rows();
    }
    

    //getting number of comments on a post
    public function get_comments_num($post_id){
    
        $query = $this->db->get_where("comments",array("post_id"=>$post_id));
    
        return $query->num_rows();
        
    }
    
    //fetching latest user posts
    public function get_user_latest_posts($user_id){
        
        $query = $this->db->query("SELECT * FROM posts WHERE user_id='$user_id' ORDER BY post_id DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;
    }
    //fetching best viewed user posts
    public function get_user_best_posts($user_id){
        
        $query = $this->db->query("SELECT * FROM posts WHERE user_id='$user_id' ORDER BY views DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;
    
    }
    
    //fetching post comments
    public function get_post_comments($post_id){
        
        $query = $this->db->query("SELECT * FROM comments WHERE post_id='$post_id' ORDER BY comment_id DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;  
    
    }
    
    //fetching user favorite movies
    public function get_user_favorite_movies($user_id){
        
        $query = $this->db->query("SELECT * FROM favorites WHERE user_id='$user_id' AND type='movies' LIMIT 5");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;
    }
    
    //fetching user favorite shows
    public function get_user_favorite_series($user_id){
        
        $query = $this->db->query("SELECT * FROM favorites WHERE user_id='$user_id' AND type='series' LIMIT 5");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;
    
    }
    
    
    //add news to the database    
    public function add_news(){
    
        // data collected from forms
        $data = array(
        
            'user_id' => $this->session->userdata('user_id'),
            
            'title' => $this->input->post('title'),
                
            'tags' => $this->input->post('tags'),
            
            'category' => $this->input->post('category'),
            
            'type' => $this->input->post('type'),
            
            'content' => $this->input->post('content'),
            
            'video_link' => $this->input->post('video'),
            
            'video_type' => $this->input->post('video_type'),
            
            'sources'=>$this->input->post('sources'),
            
            'banner' => 'uploads/banners/'.$_FILES['banner']['name'],
            
            'date' => date("d-m-Y")
                    
        );
        
        //insert into database
        $query = $this->db->insert('posts',$data);
    
        //notify controller of success or failure
        if($query){
            return true;
        }else{
            return false;
        }    
    
    }


    //add movie reviews to database
    public function add_movie_review(){
    
        // data collected from forms
        $data = array(
        
            'user_id' => $this->session->userdata('user_id'),
            
            'title' => $this->input->post('title')." ". $this->input->post('year'),
                
            'tags' => $this->input->post('tags'),
            
            'rating' => $this->input->post('rating'),
            
            'content' => $this->input->post('content'),
            
            'video_link' => $this->input->post('video'),
            
            'video_type' => $this->input->post('video_type'),
            
            'banner' => 'uploads/banners/'.$_FILES['banner']['name'],
            
            'date' => date("d-m-Y")
                    
        );
        
        //insert into database
        $query = $this->db->insert('posts',$data);
    
        //notify controller of success or failure
        if($query){
            return true;
        }else{
            return false;
        }    
    
    }
    
    //add series reviews to database
    public function add_series_review(){
    
        // data collected from forms
        $data = array(
        
            'user_id' => $this->session->userdata('user_id'),
            
            'title' => $this->input->post('title')." ". $this->input->post('year'),
                
            'tags' => $this->input->post('tags'),
            
            'rating' => $this->input->post('rating'),
            
            'type' => $this->input->post('type'),
            
            'content' => $this->input->post('content'),
            
            'video_link' => $this->input->post('video'),
            
            'video_type' => $this->input->post('video_type'),
            
            'banner' => 'uploads/banners/'.$_FILES['banner']['name'],
            
            'date' => date("d-m-Y")
                    
        );
        
        // insert into database
        $query = $this->db->insert('posts',$data);
    
        // notify controller of success or failure
        if($query){ 
            return true;
        }else{
            return false;
        }    
    
    }

    // function to get article details
    public function get_article($post_id){
        $query = $this->db->query("SELECT * FROM posts WHERE post_id='$post_id'");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;    
    
    }
    //increasing article views
    public function increase_views($parsed_post_id){
    
        $post_id = $parsed_post_id["post_id"];
        
        $this->db->update("posts",$parsed_post_id,"post_id = $post_id");
        
    }
    
    public function add_comment($post_id){

        // data collected from forms
        
        if($this->session->userdata("is_logged_in")){
        
            $user_id = $this->session->userdata('user_id');
            
        }else $user_id = 0;
        
        $data = array(
        
            'post_id'=> $post_id,
            
            'user_id' => $user_id,
            
            'title' => $this->input->post('title')." ". $this->input->post('year'),
                
            'comment' => $this->input->post('comment'),
                    
        );
        
        // insert into database
        $query = $this->db->insert('comments',$data);
    
        // notify controller of success or failure
        if($query){ 
            return true;
        }else{
            return false;
        } 
    
    }
    
    public function get_best_movie_news(){
        
        $query = $this->db->query("SELECT * FROM posts WHERE type='Movies' ORDER BY views DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;    
    
    }
    
    public function get_latest_movie_news(){
    
        $query = $this->db->query("SELECT * FROM posts WHERE type='Movies' ORDER BY post_id DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;  
        
    }
    public function get_best_series_news(){
        
        $query = $this->db->query("SELECT * FROM posts WHERE type='TV series' ORDER BY views DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;    
    
    }
    
    public function get_latest_series_news(){
    
        $query = $this->db->query("SELECT * FROM posts WHERE type='TV series' ORDER BY post_id DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;  
        
    }
    
    public function get_latest_movie_reviews(){
    
        $query = $this->db->query("SELECT * FROM posts WHERE type='' ORDER BY post_id DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;   
    
    }
    
    public function get_best_movie_reviews(){
    
        $query = $this->db->query("SELECT * FROM posts WHERE type='' ORDER BY views DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;   
    
    }    
    
    public function get_latest_series_reviews(){
    
        $query = $this->db->query("SELECT * FROM posts WHERE type!='' AND type!='Movies' AND type!='TV series' ORDER BY post_id DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;   
    
    }

    public function get_best_series_reviews(){
    
        $query = $this->db->query("SELECT * FROM posts WHERE type!='' AND type!='Movies' AND type!='TV series' ORDER BY views DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;   
    
    }
    
    public function model_search($searchquery){
        // data collected from forms
        $searchquery = trim($searchquery);
        $searchquery = str_replace('%20',' ', $searchquery);
        $data = array(
            'search' => $searchquery
        );
        
        // insert into database for search logging
        $query = $this->db->insert('searches',$data);
        
        //
        
        $query = $this->db->query("SELECT * FROM posts WHERE title LIKE '%{$searchquery}%' OR tags LIKE '%{$searchquery}%' OR content LIKE '%{$searchquery}%' ORDER BY views DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();
        }else return null;  
        
    }
    
    
    public function get_recent_tags(){
    
        $query = $this->db->query("SELECT * FROM posts WHERE tags!='' ORDER BY post_id DESC LIMIT 10");
    
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();        
        }else return null;
        
    }
    
    public function get_recent_searches(){
    
        $query = $this->db->query("SELECT * FROM searches WHERE search!='' ORDER BY search_id DESC LIMIT 100");
        
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();        
        }else return null;
    
    }
    
    public function get_related_articles($string){
    
        $query = $this->db->query("SELECT * FROM posts WHERE title LIKE '%{$string}%' OR tags LIKE '%{$string}%' OR content LIKE '%{$string}%' ORDER BY views DESC LIMIT 5");
    
        $num = $query->num_rows();
        
        if($num>0){
            return $query->result();        
        }else return null;
        
    }
    
    //checking if session user has noted profile owner b4
    public function check_note_status($user_id){
    
        $session_id = $this->session->userdata('user_id');
        
        $query = $this->db->query("SELECT * FROM respects WHERE respecter_id='$session_id' AND respected_id='$user_id'");
        $num = $query->num_rows();
        
        if($num==0){
        
            return false;
            
        }else return true;
    
    }
    
    public function model_note($user_id){
    
        $session_id = $this->session->userdata('user_id');
        
        $data = array(
        
                    'respecter_id'=> $session_id,
                    'respected_id'=> $user_id
                );
        // insert into database for respects
        $query = $this->db->insert('respects',$data);
        
        if($query){
            return true;
        }else return false;
        
    }
    
    public function model_denote($user_id){
    
            $session_id = $this->session->userdata('user_id');    
            
            $query = $this->db->query("SELECT * FROM respects WHERE respecter_id='$session_id' AND respected_id='$user_id'");    
        
            $num = $query->num_rows();
        
            if($num>0){
                
                $results = $query->result();
                
                foreach($results as $row){
                    $id = $row->respect_id;
                }
                
                $this->db->where('respect_id',$id);
                $this->db->delete('respects');
                
                return true;
            }else return false;
    }
    
    //add favorite movies and series
    public function add_fav(){
        
        $session_id = $this->session->userdata('user_id');
        
        $data = array(
        
                    'user_id'=> $session_id,
                    'thumbnail'=> "uploads/thumbnails/".$_FILES['thumbnail']['name'], 
                    'title'=> $this->input->post('title'),
                    'type'=> $this->input->post('type')
            
                );
        // insert into database for respects
        $query = $this->db->insert('favorites',$data);
        
        if($query){
            return true;
        }else return false;
        
    }
    
     //fetching user id from email address
    public function get_fav_data($fav_id){
    
        $this->db->where('fav_id',$fav_id);
        $query = $this->db->get('favorites');// query to get user data
        
        return $query->result();
    
    }
    
        //increasing article views
    public function update_fav($fav_id){
    
        
        $title = $this->input->post('title');
        $thumbnail = "uploads/thumbnails/".$_FILES['thumbnail']['name'];
        
        $query = $this->db->query("UPDATE favorites SET title='$title',thumbnail='$thumbnail' WHERE fav_id='$fav_id'");
        
        if($query){
            return true;
        } else return false;
    }
    
    //increasing article views
    public function update_profile($user_id){
    
        
        $bio = $this->input->post('bio');
        $dp = "uploads/dps/".$_FILES['dp']['name'];
        
        $data = array(
                
                    "bio"=>$bio,
                    "dp"=>$dp
                    
                );
        
        $this->db->update("users",$data,"user_id = $user_id");
       // $query = $this->db->query("UPDATE users SET bio='$bio',dp='$dp' WHERE user_id='$user_id'");
        
        return true;
        
    }
    
    
    //edit news in the database    
    public function edit_news($post_id){
    
        // data collected from forms
        $data = array(
                    
            'title' => $this->input->post('title'),
                
            'tags' => $this->input->post('tags'),
            
            'category' => $this->input->post('category'),
            
            'type' => $this->input->post('type'),
            
            'content' => $this->input->post('content'),
            
            'video_link' => $this->input->post('video'),
            
            'video_type' => $this->input->post('video_type'),
            
            'sources'=>$this->input->post('sources'),
            
            'banner' => 'uploads/banners/'.$_FILES['banner']['name']
                    
        );
        
        //update article
        $query = $this->db->update('posts',$data,"post_id = $post_id");
    
        //notify controller of success or failure
        if($query){
            return true;
        }else{
            return false;
        }    
    
    }


    //add movie reviews to database
    public function edit_movie_review($post_id){
    
        // data collected from forms
        $data = array(
                    
            'title' => $this->input->post('title')." ". $this->input->post('year'),
                
            'tags' => $this->input->post('tags'),
            
            'rating' => $this->input->post('rating'),
            
            'content' => $this->input->post('content'),
            
            'video_link' => $this->input->post('video'),
            
            'video_type' => $this->input->post('video_type'),
            
            'banner' => 'uploads/banners/'.$_FILES['banner']['name']
                    
        );
        
        //update article
        $query = $this->db->update('posts',$data,"post_id = $post_id");
    
        //notify controller of success or failure
        if($query){
            return true;
        }else{
            return false;
        }    
    
    }
    
    //add series reviews to database
    public function edit_series_review($post_id){
    
        // data collected from forms
        $data = array(
        
            'user_id' => $this->session->userdata('user_id'),
            
            'title' => $this->input->post('title')." ". $this->input->post('year'),
                
            'tags' => $this->input->post('tags'),
            
            'rating' => $this->input->post('rating'),
            
            'type' => $this->input->post('type'),
            
            'content' => $this->input->post('content'),
            
            'video_link' => $this->input->post('video'),
            
            'video_type' => $this->input->post('video_type'),
            
            'banner' => 'uploads/banners/'.$_FILES['banner']['name'],
                    
        );
        
        //update article
        $query = $this->db->update('posts',$data,"post_id = $post_id");
    
        // notify controller of success or failure
        if($query){ 
            return true;
        }else{
            return false;
        }    
    
    }
    
    
    
    
    
    
    
    
    
    
    
    
}