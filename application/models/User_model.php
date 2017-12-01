<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User_model
 *
 * @author tantraadmin
 */
class User_model extends CI_Model {
    
    public $id;
    public $username;
    public $email;
    public $secondaryEmail;
    public $password;
    public $firstname;
    public $lastname;
    public $usertype;
    public $user_enabled;
    public $emailverificationtoken;
    public $userdisabledreason;
    public $createdAt;
    public $updatedAt;
    
    public function getId(){
         return $this->id;
    }
    
    public function setId($id){
        $this->id=$id;
        return $this;
    }
    
    public function getUsername($id){
        $this->id=$id;
        return $this;
    }
    public function setUsername($id){
        $this->id=$id;
        return $this;
    }
    
    public function setEmail($id){
        $this->id=$id;
        return $this;
    }
    public function getEmal($id){
        $this->id=$id;
        return $this;
    }
    
    public function setSecondaryEmail($id){
        $this->id=$id;
        return $this;
    }
    public function getSecondaryEmail($id){
        $this->id=$id;
        return $this;
    }
    
    public function getSecondaryEmail($id){
        $this->id=$id;
        return $this;
    }
    
    public function getSecondaryEmail($id){
        $this->id=$id;
        return $this;
    }
    
    public function getSecondaryEmail($id){
        $this->id=$id;
        return $this;
    }
    
    public function getSecondaryEmail($id){
        $this->id=$id;
        return $this;
    }
    
    public function setUdatedAt($date_time){
        $this->id=$id;
        return $this;
    }
    
    public function getUdatedAt(){
        $this->id=$id;
        return $this;
    }
    
    
    
    
}
