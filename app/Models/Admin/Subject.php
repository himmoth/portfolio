<?php

namespace App\Models\Admin;

use App\Models\Admin\Skill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    public function skill(){
        return $this->belongsTo(Skill::class);
    }
}
