<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AmbulanceController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\GeneralLabTestController;
use App\Http\Controllers\Admin\MedicalReportController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ScheduleManagementController;
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
    \Illuminate\Support\Facades\View::composer(['*'],function ($site_data){
        $url =env('APP_URL').":8000";
        $site_data->with([
           '_url'=>$url,
        ]);
    });
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']) ->name('index');
Route::get('news/{id}',[\App\Http\Controllers\HomeController::class,'newsDetail']) ->name('news.detail');
Route::post('appointment',[\App\Http\Controllers\HomeController::class,'appointmentForm']) ->name('appointment.store');
Route::get('medical-report',[\App\Http\Controllers\HomeController::class,'medicalReport'])->name('medical.reports');
Route::get('ambulance',[\App\Http\Controllers\HomeController::class,'ambulance'])->name('ambulance');
Route::post('feedback',[\App\Http\Controllers\HomeController::class,'feedbackForm']) ->name('feedback.store');

Route::post('filter-medical',[\App\Http\Controllers\HomeController::class,'filtermedical'])->name('filter.medical');
Route::post('specialWiseDoctor',[\App\Http\Controllers\HomeController::class,'SpecialWiseDoctor'])->name('specialwise.doctor');
Route::post('scheduleDoctor',[\App\Http\Controllers\HomeController::class,'ScheduleDoctor'])->name('schedule.doctor');


Auth::routes();

Route::group(['middleware'=>['auth']], function() {

    Route::group(['prefix' => 'admin/', 'as' => 'admin.'], function () {
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');


        Route::resource('doctor', DoctorController::class);
        Route::resource('designation', DesignationController::class);
        Route::resource('ambulance', AmbulanceController::class);
        Route::resource('appointment', AppointmentController::class);
        Route::resource('medicalReport', MedicalReportController::class);
        Route::resource('specialist', SpecialistController::class);
        Route::resource('news', NewsController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('aboutUs', AboutUsController::class);
        Route::resource('generalLabtest', GeneralLabTestController::class);
        Route::resource('feedback', FeedbackController::class);
        Route::resource('scheduleManagement', ScheduleManagementController::class);

        Route::get('siteSetting', [SiteSettingController::class,'edit'])->name('siteSetting');
        Route::put('siteSetting/update/{id}', [SiteSettingController::class,'update'])->name('siteSetting.update');
        Route::resource('user', UserController::class);
    });

});



