<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Appointment\StoreAppointmentValidation;
use App\Http\Requests\Admin\Feedback\StoreFeedbackValidation;
use App\Models\Admin\Ambulance;
use App\Models\Admin\Appointment;
use App\Models\Admin\Doctor;
use App\Models\Admin\Feedback;
use App\Models\Admin\MedicalReport;
use App\Models\Admin\News;
use App\Models\Admin\ScheduleManagement;
use App\Models\Admin\Specialist;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class HomeController extends Controller
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
        $data = [] ;
        $data['_doctors'] = Doctor::active()->get();
        $data['_news'] = News::active()->get();
        $data['_specialist'] = Specialist::all();
        $data['_MedicalReport']=MedicalReport::all();
        $data['_ambulances'] = Ambulance::all();

        $data['_ScheduleManagement'] = ScheduleManagement::all();
        return view('welcome',compact('data') );
    }

    public function newsDetail($id)
    {
        $news = News::where('id',$id)->first();

        if ($news)
            return view('news-details',compact('news'));
        return abort(404);
    }

    public function appointmentForm(StoreAppointmentValidation $request)
    {
        try {
            $data = $request->validated();
            $appointment = Appointment::create($data);

            Alert::success('Success', 'Appointment Successfully.');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Appointment Creation Failed.');
            return back()->withInput($data);
        }
    }

    public function medicalReport()

    {
        $reports = MedicalReport::all();
            return view('medical-reports',compact('reports'));
//        return abort(404);


    }
    public function filtermedical(Request $request)
    {
        $id =$request->id;
        $string =$request->phone_number;

        $response =[];
        $data=Appointment::with('medicalReport')->where('id',$id)->where('phone_number', $string)->get();

        $response['html'] =view('filter_medical',compact('data'))->render();


        return response()->json(json_encode($response));
    }
    public function SpecialWiseDoctor(Request $request)
    {
        $Specialist_id = $request->id;
        $response =[];
        $data['doctor'] = Doctor::where('specialist_id',$Specialist_id)->active()->pluck('doctor_name','id');
        $response['html'] =view('filter_doctor',compact('data'))->render();
        return response()->json(json_encode($response));
    }
    public function ScheduleDoctor(Request $request)
    {
        $doctor_id = $request->id;
        $response =[];
        $data['time'] = ScheduleManagement::where('doctor_id',$doctor_id)->active()->pluck('time_for_appointment','id');
        $response['html'] =view('filter_schedule',compact('data'))->render();
        return response()->json(json_encode($response));
    }
    public function ambulance()

    {
        $data['_ambulances'] = Ambulance::all();

        return view('ambulance',compact('data'));
    }
    public function feedbackForm(StoreFeedbackValidation $request)
    {
        try {
            $data = $request->validated();
            $feedback = Feedback::create($data);

            Alert::success('Success', 'Feedback Successfully.');
            return back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Feedback Failed.');
            return back()->withInput($data);
        }
    }

}

