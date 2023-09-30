<?php

namespace App\Models\Admin;

use App\Models\Admin\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
