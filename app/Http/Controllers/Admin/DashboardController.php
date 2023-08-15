<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Ambulance;
use App\Models\Admin\Appointment;
use App\Models\Admin\Doctor;
use App\Models\Admin\Specialist;
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

        return view('admin.index',compact('data'));
    }
}
