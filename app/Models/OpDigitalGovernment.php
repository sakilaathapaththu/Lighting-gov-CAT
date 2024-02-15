<?php

namespace App\Models;

use App\Models\Govofficial;
use App\Models\Operational;
use App\Models\OpInitiative;
use App\Models\OpOrientation;
use App\Models\OpCollaboration;
use App\Models\OpChangeManagement;
use App\Models\OpQualityManagement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OpDigitalGovernment extends Model
{
    use HasFactory;

    public function operational(){
        return $this->belongsTo(Operational::class);
    }

    public function opChangeManagement(){
        return $this->hasOne(OpChangeManagement::class);
    }

    public function opCollaboration(){
        return $this->hasOne(OpCollaboration::class);
    }

    public function opOrientation(){
        return $this->hasOne(OpOrientation::class);
    }

    public function opQualityManagement(){
        return $this->hasOne(OpQualityManagement::class);
    }

    public function opInitiative(){
        return $this->hasOne(OpInitiative::class);
    }

    public function govofficial(){
        return $this->belongsTo(Govofficial::class);
    }
}
