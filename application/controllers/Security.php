<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends MY_Controller {

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
            
            $form_data = $this->input->post();
            if(!empty($form_data)){
                
            }
            $this->render("security/login_content");
	}
        
        public function login_process(){
            $form_data = $this->input->post();
            $this->load->model('user_model');
            $jsonResponse=array();
            if(!empty($form_data)){
                $user=$this->user_model;
                $username=$form_data['username'];
                $password=$form_data['password'];
                if(!$user->is_unique('username',$username) || !$user->is_unique('email',$username)){
                    $jsonResponse['status']="failed";
                    $jsonResponse['responseText']="No profile is found please check your email";
                }else{
                    $jsonResponse['status']="success";
                    $jsonResponse['responseText']="login success please wwait.";
                }
                echo json_encode($jsonResponse);
            }
        }
}
