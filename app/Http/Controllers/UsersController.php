<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $email;
    protected $password;
    protected $userType;
    protected $birthDate;
    protected $description;

    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getUserType()
    {
        return $this->userType;
    }
    public function getBirthDate()
    {
        return $this->birthDate;
    }
}
