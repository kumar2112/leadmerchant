<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category_model
 *
 * @author kumar
 */
class Category_model extends CI_Model {
    
     public $id;
     public $categoryName;
     public $categorySlug;
     
     
    public function getId(){
         return $this->id;
    }
    
    public function setId($id){
        $this->id=$id;
        return $this;
    }
    
    public function getCategoryName(){
        return $this->categoryName;
        
    }
    public function setCategoryName($categoryName){
        $this->categoryName=$categoryName;
        return $this;
    }
    
    public function getCategorySlug(){
        return $this->categorySlug;
        
    }
    
    public function setCategorySlug($categorySlug){
        $this->categorySlug=$categorySlug;
        return $this;
    }
    
    
    public function getCategories(){
        $query = $this->db->get('lm_category'); 
        $Categories=array();
        foreach($query->result() as $q){
            $cm=new Category_model();
            $cm->setId($q->id);
            $cm->setCategoryName($q->categoryName);
            $cm->setCategorySlug($q->categorySlug);
            $Categories[]=$cm;
        }
        return $Categories;
    }
}
