<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    protected $name;

    public function getName() {
        return $this->name;
    }
}    