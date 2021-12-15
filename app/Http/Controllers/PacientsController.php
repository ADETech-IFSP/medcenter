<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientsController extends Controller
{
    protected $initialsName;
    protected $birthDate;
    protected $gender;
    protected $skinColor;
    protected $profession;

    public function getInitialsName() {
        return $this->initialsName;
    }
    public function getBirthDate() {
        return $this->birthDate;
    }
    public function getGender() {
        return $this->gender;
    }
    public function getSkinColor() {
        return $this->skinColor;
    }
    public function getProfession() {
        return $this->profession;
    }
}