<?php

namespace App\Models;

use App\Models\Govofficial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MidCommunication extends Model
{
    use HasFactory;
    
    public function govofficial(){
        return $this->belongsTo(Govofficial::class);
    }
}
