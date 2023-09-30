<?php

namespace App\Http\Controllers\Front;

use App\Models\SlideTitle;
use App\Models\Admin\About;
use App\Models\Admin\Skill;
use Illuminate\Http\Request;
use App\Models\Admin\Project;
use App\Models\Admin\Subject;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index(){

        
        $slidetitles = SlideTitle::all();
        $skills = Skill::all();
        $languages = Subject::all();
        $abouts = About::all();
        $categories = Category::all();
        $projects = Project::all();

        return view('index',[
            
            'slidetitles' => $slidetitles,
            'skills' => $skills,
            'languages' => $languages,
            'abouts' => $abouts,
            'categories' => $categories,
            'projects' => $projects,

        ]);
    }

    public function dowload(){
        
    }


}
