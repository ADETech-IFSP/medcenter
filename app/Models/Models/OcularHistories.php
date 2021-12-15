<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OcularHistories extends Model
{
    use HasFactory;

    protected $fillable = [
        'eyeInjury',
        'manifestationTime',
        'ocularHistory'
    ];
}
