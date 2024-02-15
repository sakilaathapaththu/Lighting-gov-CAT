<?php

namespace App;

use App\Models\Govofficial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeepCitizenInsight extends Model
{
    use HasFactory;

    public function govofficial(){
        return $this->belongsTo(Govofficial::class);
    }
}
