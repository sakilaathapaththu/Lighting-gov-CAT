<?php

namespace App\Models;

use App\Models\Govofficial;
use App\Models\Operational;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpIct extends Model
{
    use HasFactory;

    public function operational(){
        return $this->belongsTo(Operational::class);
    }

    public function govofficial(){
        return $this->belongsTo(Govofficial::class);
    }
}
