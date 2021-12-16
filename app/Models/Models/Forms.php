<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;

    protected $fillable = [
        'eyeInjury',
        'manifestationTime',
        'ocularHistory'
    ];

    public function getEyeInjury() {
        return $this->eyeInjury;
    }
      
    public function setEyeInjury($eyeInjury) {
        $this->eyeInjury= $eyeInjury;
    }

    public function getManifestationTime() {
        return $this->manifestationTime;
    }
      
    public function setManifestationTime($manifestationTime) {
        $this->manifestationTime= $manifestationTime;
    }

    public function getOcularHistory() {
        return $this->ocularHistory;
    }
      
    public function setOcularHistory($ocularHistory) {
        $this->ocularHistory= $ocularHistory;
    }
}
