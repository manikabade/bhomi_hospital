<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Appointment\StoreAppointmentValidation;
use App\Models\Admin\Appointment;
use App\Models\Admin\Doctor;
use App\Models\Admin\News;
use App\Models\Admin\Specialist;
use Illuminate\Http\Request;

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

        $appointment = Appointment::create($request->validated());

        return redirect()->back()->with('message','Your form has been filled up');
    }
}
