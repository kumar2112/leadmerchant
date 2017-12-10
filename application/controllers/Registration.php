<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MY_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
            $this->load->helper('form');
            $this->render("registration/registration_content");
	}
        
        public function registration_process(){
            $form_data = $this->input->post();
            $this->load->model('user_model');
            $jsonResponse=array();
            if(!empty($form_data)){
                $email=$form_data['email'];
                $firstName=$form_data['firstname'];
                $lastName=$form_data['lastname'];
                $phone=$form_data['phone'];
                $description=$form_data["description"];
                $userType=$form_data["usertype"];
                
                $user=$this->user_model;
                
                $user->setUserName($email);
                $user->setEmail($email);
                $user->setFirstName($firstName);
                $user->setLastName($lastName);
                $user->setUserType($userType);
                $user->setCreatedAt(date('Y-m-d'));
                if($user->is_unique('username',$email) || $user->is_unique('email',$email)){
                    $user->saveUser($user);
                    $jsonResponse['status']="success";
                    $jsonResponse['responseText']="Thank you for joining us";
                }else{
                    $jsonResponse['status']="failed";
                    $jsonResponse['responseText']="An account is already associated with given email";
                }
                echo json_encode($jsonResponse);
            }
            
            
        }
}
