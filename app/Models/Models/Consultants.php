<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultants extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'userType'
    ];

    protected $hidden = [
        'password'
    ];

    public function getName() {
        return $this->name;
    }
      
    public function setName($name) {
        $this->name= $name;
    }
    
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
}
