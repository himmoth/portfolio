<?php

namespace App\Models\Admin;

use App\Models\Admin\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
