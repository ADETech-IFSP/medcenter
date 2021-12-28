<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantsController extends Controller
{
  protected $userType;

  public function getUserType()
  {
    return $this->userType;
  }
  public function setUserType($userType)
  {
    $this->userType = $userType;
  }
}
