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
    public $userName;
    public $email;
    public $secondaryEmail;
    public $password;
    public $firstName;
    public $lastName;
    public $phone;
    public $userType;
    public $description;
    public $userEnabled;
    public $emailVerificationToken;
    public $userDisabledReason;
    public $createdAt;
    public $updatedAt;
    
    public function getId(){
         return $this->id;
    }
    
    public function setId($id){
        $this->id=$id;
        return $this;
    }
    
    public function getUserName(){
        return $this->userName;
        
    }
    public function setUserName($username){
        $this->userName=$username;
        return $this;
    }
    
    public function setEmail($email){
        $this->email=$email;
        return $this;
    }
    public function getEmail(){
       
        return $this->email;
    }
    
    public function setSecondaryEmail($secondaryEmail){
        $this->secondaryEmail=$secondaryEmail;
        return $this;
    }
    public function getSecondaryEmail(){
        return $this->secondaryEmail;
    }
    
    public function setPassword($password){
         $this->password=$password;
         return $this;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setFirstName($firstname){
         $this->firstName=$firstname;
         return $this;
    }
    
    public function getFirstName(){
         return $this->firstName;
    }
    
    public function setLastName($lastname){
        $this->lastName=$lastname;
        return $this;
    }
    
    public function getLastName(){
        return $this->lastName;
    }
    
    public function setPhone($phone){
        $this->phone=$phone;
        return $this;
    }
    
    public function getPhone(){
        return $this->phone;
    }
    
    public function setUserType($usertype){
        $this->userType=$usertype;
        return $this;
    }
    
    public function getUserType(){
        return $this->userType;
    }
    
    public function setDescription($description){
         $this->description=$description;
         return $this;
    }
    
    public function getDescription(){
         return $this->description;
    }
    
    public function setUserEnabled($enabled){
        $this->userEnabled=$enabled;
        return $this;
    }
   
    public function getUserEnabled(){
        return $this->userEnabled;
    }
    
    public function setEmailVerificationToken($token){
        $this->emailVerificationToken=$token;
        return $this;
    }
    
    public function getEmailVeriFicationToken(){
         return $this->emailVerificationToken;
    }
    
    public function setCreatedAt($date){
        $this->createdAt=$date;
        return $this;
    }
    
    public function getCreatedAt(){
         return $this->createdAt;
    }
    
    public function setUpdatedAt($date){
        $this->updatedAt=$date;
        return $this;
    }
    
    public function getUpdatedAt(){
         return $this->updatedAt;
    }
    public function saveUser(User_model $user){
        if($this->db->insert('lm_user', $user)){
            return true;
        }
        return $error = $this->db->error(); ;
    }
    
    public function is_unique($field,$value){
        $uniquFields=array('userName','email');
        if(in_array($field, $uniquFields)){
            $count = $this->db->where($field,$value)->from("lm_user")->count_all_results();;
            if($count<1){
                return true;
            }
                              
        }
        return false;
    }
}
