<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesliderController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\SpecificationController;
use App\Http\Controllers\NewseventsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectspecificationController;
use App\Http\Controllers\ProjectaminitiesController;
use App\Http\Controllers\ProjectfloorplanController;
use App\Http\Controllers\ProjectgalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectvideoController;


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



Route::get('/',[HomeController::class,'home'])->name('website.index');

Route::post('welcome/submitquickenquiry',[HomeController::class,'submitQuickEnquiry'] )->name('quickenquiry.submit');

Route::get('/About',[HomeController::class,'about'])->name('website.about');



Route::post('/contactus-submit',[HomeController::class,'submitContactForm'] )->name('contact.submit');


Route::get('Project/upcoming', [ProjectController::class, 'upcoming'])->name('project.upcoming');
Route::get('Project/ongoing', [ProjectController::class, 'ongoing'])->name('project.ongoing');
Route::get('Project/completed',[ProjectController::class, 'completed'])->name('project.completed');




Route::get('/projects', [ProjectController::class, 'Project'])->name('projects.index');

Route::get('/projects/{id}', [ProjectController::class, 'showpage'])->name('projects.detail');
//





// Route::get('News',[::class,''])->name('website.');
// Route::get('/{id}',[::class,'2'])->name('website.2');
// Route::get('detail/{id}',[::class,'detail'])->name('website.detail');
// Route::post('sendmail',[::class,'sendmail'])->name('.submit');


//

Route::get('Newsevents',[NewseventsController::class,'Newsevents'])->name('website.news');
Route::get('News/getnewsbyid/{id}',[NewseventsController::class,'getnewsbyid'])->name('website.news2');


Route::get('careers',[CareerController::class,'show'])->name('website.careers');
Route::post('careers-sendmail',[CareerController::class,'submitCareerForm'])->name('Home.savecareers');

Route::get('/Contact', function () {
    return view('website.contact');
});

Route::get('/Download', function () {
    return view('website.download');
});

Route::get('projectgallery',[ProjectgalleryController::class,'projectgallery'])->name('website.gallery');

Route::get('/admin1', function() {
    return view('admin.login');
})->name('admin');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware('auth');

Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');

Route::get('/admin/logout', [AuthController::class, 'adminLogout'])->name('admin.logout')->middleware('auth');

Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('change.password.form')->middleware('auth');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change.password')->middleware('auth');

Route::resource('homesliders', HomesliderController::class);

Route::resource('aminities', AmenitiesController::class);

Route::resource('category', CategoryController::class);


Route::resource('Specification', SpecificationController::class);

Route::resource('newsevents', NewseventsController::class);


Route::resource('project', ProjectController::class);
Route::post('project/listprojectbycategory', [ProjectController::class,'listprojectbycategory'])->name('project.listprojectbycategory');
Route::post('project/saveaddprojectslider', [ProjectController::class,'saveAddProjectSlider'])->name('project.saveaddprojectslider');
Route::get('project/displayprojectslider', [ProjectController::class,'show'])->name('project.display');
Route::get('project/editprojectslider/{id}', [ProjectController::class,'editProjectSlider'])->name('project.editprojectslider');
Route::put('project/updateprojectslider/{id}', [ProjectController::class,'updateProjectSlider'])->name('project.updateprojectslider');
Route::delete('project/deleteprojectslider/{id}', [ProjectController::class,'deleteProjectSlider'])->name('project.deleteProjectSlider');


Route::resource('Projectspecification', ProjectspecificationController::class);
Route::post('project/listprojectbyspecification', [ProjectspecificationController::class,'listprojectbyProject'])->name('project.listprojectbybyspecification');

Route::resource('Projectaminities', ProjectaminitiesController::class);
Route::post('project/listaminitiesbyproject', [ProjectaminitiesController::class,'listprojectbyProject'])->name('project.listaminitiesbyproject');
Route::resource('Projectfloorplan', ProjectfloorplanController::class);
Route::post('project/listfloorplanbyproject', [ProjectfloorplanController::class,'listprojectbyProject'])->name('project.listfloorplanbyproject');

Route::resource('Projectgallery', ProjectgalleryController::class);
Route::post('project/listProjectgallerybyproject', [ProjectgalleryController::class,'listprojectbyProject'])->name('project.listgallerybyproject');

Route::resource('Projectvideo', ProjectvideoController::class);
Route::post('projectvideo/listvideobyproject/', [ProjectvideoController::class,'listprojectbyProject'])->name('projectvideo.listvideobyproject');

Route::get('/career', [CareerController::class, 'edit'])->name('career.edit');
Route::post('/career', [CareerController::class, 'update'])->name('career.update');

Route::post('project/requestfor', [ProjectController::class, 'submitProjectRequest'])->name('project.submit');

