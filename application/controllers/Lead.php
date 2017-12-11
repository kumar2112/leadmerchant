<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends MY_Controller {

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
            $this->load->model('category_model');
            $catgoryModal=$this->category_model;
            $categories=$catgoryModal->getCategories();
            $view_data=array();
            $this->data['categories']=$categories;
            $this->render("lead/index");
	}
        
        public function show($cat_slug){
            //echo $cat_slug;
            $this->render("lead/show");
        }
        
        public function add(){
            $this->render("lead/addnewbucket");
        }
}
