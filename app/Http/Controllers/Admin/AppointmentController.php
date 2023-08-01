<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Appointment\StoreAppointmentValidation;
use App\Http\Requests\Admin\Appointment\UpdateAppointmentValidation;
use App\Models\Admin\Appointment;
use App\Models\Admin\Specialist;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $appointments =Appointment::latest()->paginate(1000);
            $edit =0;
            return view('admin.appointment.index',compact('appointments','edit'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $appointments['specialists']=Specialist::select('specialist_name','id')->active()->get();
        $edit =0;
        return view('admin.appointment.create',compact('appointments','edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentValidation $request)
    {

        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/appointment')))
                @mkdir(public_path('images/appointment'));
            $file->move(public_path('images/appointment'),$file_name);
            $data['image'] =$file_name;


        }
        $appointment =Appointment::create($data);
        return redirect()->route('admin.appointment.index')
            ->with($appointment? 'success' :'error', $appointment? 'Created Successfully' :'Error Creating Data');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $appointments['specialists']=Specialist::select('specialist_name','id')->active()->get();
        $data=[];
        $data['row']=Appointment::find($id);
        $edit =1;
        return view('admin.appointment.edit',compact('data','appointments','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentValidation $request,Appointment $appointment)
    {
        $data = $request->validated();

        if($request->hasFile('main_photo'))
        {

            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/appointment')))
                @mkdir(public_path('/images/appointment'));
            $file->move(public_path('images/appointment'),$file_name);
            $data['image'] =$file_name;
            $old_Slider =Appointment::where('id',$request['id'])->first();

            $old_path ='images/appointment/'.$old_Slider->image;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }



        }
        $appointment->update($data);
        return redirect()->route('admin.appointment.index')
            ->with($appointment ? 'success' : 'error', $appointment ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return redirect()->route('admin.appointment.index')->with('sucess','appointment has been deleted sucessfully');
    }
}
