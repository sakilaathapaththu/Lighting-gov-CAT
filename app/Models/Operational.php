<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Govofficial;
use App\Models\OpDigitalGovernment;
use App\Models\OpIct;
use App\Models\OpManagement;

class Operational extends Model
{
    use HasFactory;

    public function govofficial(){
        return $this->belongsTo(Govofficial::class);
    }

    public function opDigitalGovernment(){
        return $this->hasOne(OpDigitalGovernment::class);
    }

    public function opIct(){
        return $this->hasOne(OpIct::class);
    }

    public function opManagement(){
        return $this->hasOne(OpManagement::class);
    }
}
