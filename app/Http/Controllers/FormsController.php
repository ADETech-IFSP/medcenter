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
  public function setEyeInjury($eyeInjury)
  {
    $this->eyeInjury = $eyeInjury;
  }
  public function getManifestationTime()
  {
    return $this->manifestationTime;
  }
  public function setManifestationTime($manifestationTime)
  {
    $this->manifestationTime = $manifestationTime;
  }
  public function getOcularHistory()
  {
    return $this->ocularHistory;
  }
  public function setOcularHistory($ocularHistory)
  {
    $this->ocularHistory = $ocularHistory;
  }
}
