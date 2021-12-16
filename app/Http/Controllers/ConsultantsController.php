<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantsController extends Controller
{
    protected $name;
    protected $email;
    protected $password;
    protected $userType;

    public function getName()
    {
        return $this->name;
    }
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
}
