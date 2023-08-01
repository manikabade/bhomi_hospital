<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AmbulanceController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\GeneralLabTestController;
use App\Http\Controllers\Admin\MedicalReportController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SpecialistController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']) ->name('index');


Auth::routes();

Route::group(['middleware'=>['auth']], function() {

    Route::group(['prefix' => 'admin/', 'as' => 'admin.'], function () {
        Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


        Route::resource('doctor', DoctorController::class);
        Route::resource('patient', PatientController::class);
        Route::resource('designation', DesignationController::class);
        Route::resource('ambulance', AmbulanceController::class);
        Route::resource('appointment', AppointmentController::class);
        Route::resource('medicalReport', MedicalReportController::class);
        Route::resource('specialist', SpecialistController::class);
        Route::resource('news', NewsController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('aboutUs', AboutUsController::class);
        Route::resource('generalLabtest', GeneralLabTestController::class);

        Route::get('siteSetting', [SiteSettingController::class,'edit'])->name('siteSetting');
        Route::put('siteSetting/update/{id}', [SiteSettingController::class,'update'])->name('siteSetting.update');
        Route::resource('user', UserController::class);
    });

});
Auth::routes();


