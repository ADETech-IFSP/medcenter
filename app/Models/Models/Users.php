<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'userType',
        'birth_date',
        'description'
    ];

    protected $hidden = [
        'password'
    ];

    public function getEmail() {
        return $this->email;
    }
      
    public function setEmail($email) {
        $this->email= $email;
    }

    public function getPassword() {
        return $this->password;
    }
      
    public function setPassword($password) {
        $this->password= $password;
    }

    public function getUserType() {
        return $this->userType;
    }
      
    public function setUserType($userType) {
        $this->userType= $userType;
    }

    public function getBirth_date() {
        return $this->birth_date;
    }
      
    public function setBirth_date($birth_date) {
        $this->birth_date= $birth_date;
    }
    public function getDescription() {
        return $this->description;
    }
      
    public function setDescription($description) {
        $this->description= $description;
    }    
}
