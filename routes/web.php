<?php

use App\Enums\PermissionEnum;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SitePagesController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\EventDetailsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::get('users/profile-show', [UserController::class, 'profileCreate'])        
        ->name('user-profile-show');
    Route::post('user-profile/storeProfile', [UserController::class, 'userStoreProfile'])
        ->name('userStoreProfile');
    Route::post('user-profile/loggedInStoreProfile', [UserController::class, 'loggedInUserStoreProfile'])
        ->name('loggedInUserStoreProfile');
    Route::get('user-profile/profileEdit', [UserController::class, 'userProfileEdit'])
        ->name('userProfileEdit');
    Route::resource('clients', ClientController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('tasks', TaskController::class);

    Route::resource('docs', DocumentController::class);
    Route::delete('docs', [DocumentController::class, 'destroy']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/myprofile', [ProfileController::class, 'loggedInProfileEdit'])->name('loggedInProfile.edit');

});

// ROUTE TO CONTACT FORM
Route::get('/contact', function () {
    return view('contactus');
})->name('contactus');

Route::post('/contact', [ContactFormController::class, 'submit'])
	->name('contact.submit');




// ROUTES TO GUEST PAGES
Route::get('/programs', [SitePagesController::class, 'programs'])->name('programs');
Route::get('/mandated_programs/talent_hunt', [App\Http\Controllers\SitePagesController::class, 'talentHunt'])->name('talentHunt');
Route::get('/mandated_programs/stem_program', [App\Http\Controllers\SitePagesController::class, 'stemProgram'])->name('stemProgram');
Route::get('/mandated_programs/fatherhood_mentoring', [App\Http\Controllers\SitePagesController::class, 'fatherhoodMentoring'])->name('fatherhoodMentoring');
Route::get('/mandated_programs/social_action', [App\Http\Controllers\SitePagesController::class, 'socialAction'])->name('socialAction');

Route::get('/about_ga/founders', [App\Http\Controllers\SitePagesController::class, 'aboutgaFounders'])->name('aboutgaFounders');

Route::get('/resources/manage', [SitePagesController::class, 'manageResources'])->name('manageResources');
Route::get('testpdf', [SitePagesController::class, 'testPDF'])->name('testpdf');


Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

Route::controller(FullCalenderController::class)->group(function(){
    Route::get('fullcalender', 'index');
    Route::post('fullcalenderAjax', 'ajax');
});

Route::post('/showeventdetails', [EventDetailsController::class, 'showEventDetails'])->name('showEventDetails');
Route::post('/editeventdetails', [EventDetailsController::class, 'editEventDetails'])->name('editEventDetails');
Route::post('/updateeventdetails', [EventDetailsController::class, 'updateEventDetails'])->name('updateEventDetails');


require __DIR__.'/auth.php';