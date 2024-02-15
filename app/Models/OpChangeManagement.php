<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OpDigitalGovernment;
use App\Models\Govofficial;

class OpChangeManagement extends Model
{
    use HasFactory;

    public function opDigitalGovernment(){
        return $this->belongsTo(OpDigitalGovernment::class);
    }

    public function govofficial(){
        return $this->belongsTo(Govofficial::class);
    }
}
