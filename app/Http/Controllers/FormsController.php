<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
  protected $eyeInjury;
  protected $manifestationTime;
  protected $ocularHistory;

  public function getEyeInjury()
  {
    return $this->eyeInjury;
  }
  public function getManifestationTime()
  {
    return $this->manifestationTime;
  }
  public function getOcularHistory()
  {
    return $this->ocularHistory;
  }
}
