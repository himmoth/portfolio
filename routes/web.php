<?php

use App\Models\Admin\Category;
use App\Models\Admin\ContactInfo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\ResumeController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\InterestController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\LanguagesController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\SlideTitleController;
use App\Http\Controllers\Admin\ContactInfoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 // Download 
// Route::get('/export-pdf',[ResumeController::class, 'exportPdf'])->name('download');

Route::get('/',[FrontController::class, 'index'])->name('front');


    // Lognin 
Route::get('/admin/login',[LoginController::class, 'index'])->name('login')->middleware('guest');

 // Lognin 
 Route::post('/admin/login',[LoginController::class, 'login'])->name('login.user');
    // Resume 
Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
    // Export to PDF 
Route::get('/export-pdf',[ResumeController::class, 'exportPdf'])->name('export_pdf');

Route::post('/contacts',[ContactController::class, 'store'])->name('contacts.store');

Route::group(['prefix'=>'admin', 'middleware' => 'auth'],function (){
    // Dashbaord 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
 
    // Logout
    Route::post('/admin/logout',[LoginController::class, 'logout'])->name('logout');

    // Register 
    Route::get('/users',[UserController::class, 'index'])->name('users.index');
    Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
    Route::post('/users',[UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/profile/{user}',[UserController::class, 'editProfile'])->name('users.edit.profile');
    Route::delete('/users/{user}',[UserController::class, 'destroy'])->name('users.delete');






    // slide title 
    Route::get('/slidetitles',[SlideTitleController::class, 'index'])->name('slide.index');
    Route::get('/slidetitles/create',[SlideTitleController::class, 'create'])->name('slide.create');
    Route::post('/slidetitles/create',[SlideTitleController::class, 'store'])->name('slide.store');
    Route::get('/slidetitles/edit/{slidetitle}',[SlideTitleController::class, 'edit'])->name('slide.edit');
    Route::put('/slidetitles/{slidetitle}',[SlideTitleController::class, 'update'])->name('slide.update');
    Route::delete('/slidetitles/{slidetitle}',[SlideTitleController::class, 'destroy'])->name('slide.delete');

    // skills 
    Route::get('/skills',[SkillController::class, 'index'])->name('skills.index');
    Route::get('/skills/create',[SkillController::class, 'create'])->name('skills.create');
    Route::post('/skills',[SkillController::class, 'store'])->name('skills.store');
    Route::get('/skills/edit/{skill}',[SkillController::class, 'edit'])->name('skills.edit');
    Route::put('/skills/{skill}',[SkillController::class, 'update'])->name('skills.update');
    Route::delete('/skills/{skill}',[SkillController::class, 'destroy'])->name('skills.delete');

     // Subjects 
     Route::get('/subjects',[SubjectController::class, 'index'])->name('subjects.index');
     Route::get('/subjects/create',[SubjectController::class, 'create'])->name('subjects.create');
     Route::post('/subjects',[SubjectController::class, 'store'])->name('subjects.store');
     Route::get('/subjects/edit/{subject}',[SubjectController::class, 'edit'])->name('subjects.edit');
     Route::put('/subjects/{subject}',[SubjectController::class, 'update'])->name('subjects.update');
     Route::delete('/subjects/{subject}',[SubjectController::class, 'destroy'])->name('subjects.delete');

    //  About 
    Route::get('/abouts',[AboutController::class, 'index'])->name('abouts.index');
    Route::get('/abouts/create',[AboutController::class, 'create'])->name('abouts.create');
    Route::post('/abouts',[AboutController::class, 'store'])->name('abouts.store');
    Route::get('/abouts/edit/{about}',[AboutController::class, 'edit'])->name('abouts.edit');
    Route::put('/abouts/{about}',[AboutController::class, 'update'])->name('abouts.update');
    Route::delete('/abouts/{about}',[AboutController::class, 'destroy'])->name('abouts.delete');

     // Category 
     Route::get('/categories',[CategoryController::class, 'index'])->name('categories.index');
     Route::get('/categories/create',[CategoryController::class, 'create'])->name('categories.create');
     Route::post('/categories',[CategoryController::class, 'store'])->name('categories.store');
     Route::get('/categories/edit/{category}',[CategoryController::class, 'edit'])->name('categories.edit');
     Route::put('/categories/{category}',[CategoryController::class, 'update'])->name('categories.update');
     Route::delete('/categories/{category}',[CategoryController::class, 'destroy'])->name('categories.delete');

    // Projects 
    Route::get('/projects',[ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create',[ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects',[ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/edit/{project}',[ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}',[ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}',[ProjectController::class, 'destroy'])->name('projects.delete');

    // Contact 
    Route::get('/contacts',[ContactController::class, 'index'])->name('contacts.index');
    Route::delete('/contacts/{contact}',[ContactController::class, 'destroy'])->name('contacts.delete');

    // Files 
    Route::get('/files',[FileController::class, 'index'])->name('files.index');
    Route::get('/files/create',[FileController::class, 'create'])->name('files.create');
    Route::post('/files',[FileController::class, 'store'])->name('files.store');
    Route::get('/files/edit/{file}',[FileController::class, 'edit'])->name('files.edit');
    Route::put('/files/{file}',[FileController::class, 'update'])->name('files.update');
    Route::delete('/files/{file}',[FileController::class, 'destroy'])->name('files.delete');

   

  // =========Resume========= 
//   profile
    Route::get('/profiles',[ProfileController::class, 'index'])->name('profiles.index');
    Route::get('/profiles/create',[ProfileController::class, 'create'])->name('profiles.create');
    Route::post('/profiles',[ProfileController::class, 'store'])->name('profiles.store');
    Route::get('/profiles/edit/{profile}',[ProfileController::class, 'edit'])->name('profiles.edit');
    Route::put('/profiles/{profile}',[ProfileController::class, 'update'])->name('profiles.update');
    Route::delete('/profiles/{profile}',[ProfileController::class, 'destroy'])->name('profiles.delete');

    //   contactinfo
    Route::get('/contactinfos',[ContactInfoController::class, 'index'])->name('contactinfos.index');
    Route::get('/contactinfos/create',[ContactInfoController::class, 'create'])->name('contactinfos.create');
    Route::post('/contactinfos',[ContactInfoController::class, 'store'])->name('contactinfos.store');
    Route::get('/contactinfos/edit/{contactinfo}',[ContactInfoController::class, 'edit'])->name('contactinfos.edit');
    Route::put('/contactinfos/{contactinfo}',[ContactInfoController::class, 'update'])->name('contactinfos.update');
    Route::delete('/contactinfos/{contactinfo}',[ContactInfoController::class, 'destroy'])->name('contactinfos.delete');

    //   Education
    Route::get('/educations',[EducationController::class, 'index'])->name('educations.index');
    Route::get('/educations/create',[EducationController::class, 'create'])->name('educations.create');
    Route::post('/educations',[EducationController::class, 'store'])->name('educations.store');
    Route::get('/educations/edit/{education}',[EducationController::class, 'edit'])->name('educations.edit');
    Route::put('/educations/{education}',[EducationController::class, 'update'])->name('educations.update');
    Route::delete('/educations/{education}',[EducationController::class, 'destroy'])->name('educations.delete');

    
    //   Langueges
    Route::get('/languages',[LanguagesController::class, 'index'])->name('languages.index');
    Route::get('/languages/create',[LanguagesController::class, 'create'])->name('languages.create');
    Route::post('/languages',[LanguagesController::class, 'store'])->name('languages.store');
    Route::get('/languages/edit/{language}',[LanguagesController::class, 'edit'])->name('languages.edit');
    Route::put('/languages/{language}',[LanguagesController::class, 'update'])->name('languages.update');
    Route::delete('/languages/{language}',[LanguagesController::class, 'destroy'])->name('languages.delete');

        //   Experience
    Route::get('/experiences',[ExperienceController::class, 'index'])->name('experiences.index');
    Route::get('/experiences/create',[ExperienceController::class, 'create'])->name('experiences.create');
    Route::post('/experiences',[ExperienceController::class, 'store'])->name('experiences.store');
    Route::get('/experiences/edit/{experience}',[ExperienceController::class, 'edit'])->name('experiences.edit');
    Route::put('/experiences/{experience}',[ExperienceController::class, 'update'])->name('experiences.update');
    Route::delete('/experiences/{experience}',[ExperienceController::class, 'destroy'])->name('experiences.delete');

        //   Interest
    Route::get('/interests',[InterestController::class, 'index'])->name('interests.index');
    Route::get('/interests/create',[InterestController::class, 'create'])->name('interests.create');
    Route::post('/interests',[InterestController::class, 'store'])->name('interests.store');
    Route::get('/interests/edit/{interest}',[InterestController::class, 'edit'])->name('interests.edit');
    Route::put('/interests/{interest}',[InterestController::class, 'update'])->name('interests.update');
    Route::delete('/interests/{interest}',[InterestController::class, 'destroy'])->name('interests.delete');


    











});
