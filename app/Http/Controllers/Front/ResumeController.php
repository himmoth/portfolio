<?php

namespace App\Http\Controllers\Front;



use Illuminate\Http\Request;
use App\Models\Admin\Profile;
use App\Models\Admin\Subject;
use App\Models\Admin\Interest;
use App\Models\Admin\Language;
use App\Models\Admin\Education;
use App\Models\Admin\Experience;
use App\Models\Admin\ContactInfo;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;

class ResumeController extends Controller
{
    public function index(){
        $profiles = Profile::all();
        $contactinfos = ContactInfo::all();
        $educations = Education::all();
        $languages = Language::all();
        $experiences = Experience::all();
        $frontends = Subject::get();
        $backends = Subject::get();
        $tools = Subject::get();
        $interests = Interest::all();


    return view('resume',
    [
        'profiles' => $profiles,
        'contactinfos' => $contactinfos,
        'educations' => $educations,
        'languages' => $languages,
        'experiences' => $experiences,
        'frontends' => $frontends,
        'backends' => $backends,
        'tools' => $tools,
        'interests' => $interests,

    ]);
    }


    // public function exportPdf(){
    //     ini_set('max_execution_time', 300);
        
    //     $data['profiles'] = Profile::all();
    //     $data['contactinfos'] = ContactInfo::all();
    //     $data['educations'] = Education::all();
    //     $data['languages'] = Language::all();
    //     $data['experiences'] = Experience::all();
    //     $data['frontends'] = Subject::where('type', 'frontend')->get();
    //     $data['backends'] = Subject::where('type', 'backend')->get();
    //     $data['tools'] = Subject::where('type', 'tool')->get();
    //     $data['interests'] = Interest::all();
    
    //     $pdf = PDF::loadView('pdf', $data);
    //     return $pdf->download('resume.pdf');
    // }
}
