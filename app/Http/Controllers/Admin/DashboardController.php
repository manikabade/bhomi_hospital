<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Ambulance;
use App\Models\Admin\Appointment;
use App\Models\Admin\Doctor;
use App\Models\Admin\Specialist;
use App\Models\Admin\MedicalReport;
use App\Models\Admin\Feedback;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = [];
        $data['_appointment'] = Appointment::count();
        $data['_specialist'] = Specialist::count();
        $data['_doctor'] = Doctor::count();
        $data['_ambulance'] = Ambulance::count();
        $data['_medicalReport'] = MedicalReport::count();
        $data['_feedback'] = Feedback::count();


        return view('admin.index',compact('data'));
    }
}
