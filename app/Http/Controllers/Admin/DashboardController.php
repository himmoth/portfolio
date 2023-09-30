<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use App\Models\Admin\Subject;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $subjects = Subject::all();
        $projects = Project::all();

        return view('admin.dashboard',
        [
            'subjects' => $subjects,
            'projects' => $projects
        
        ]);
    }
}
