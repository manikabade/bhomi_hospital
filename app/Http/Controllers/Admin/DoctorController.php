<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doctor\StoreDoctorValidation;
use App\Http\Requests\Admin\Doctor\UpdateDoctorValidation;
use App\Models\Admin\Doctor;
use App\Models\Admin\Specialist;
use Illuminate\Http\Request;

class DoctorController extends Controller
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
        $doctors =Doctor::latest()->paginate(1000);
        $edit =0;
        return view('admin.doctor.index',compact('doctors','edit'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors['specialists']=Specialist::select('specialist_name','id')->active()->get();
        $edit =0;
        return view('admin.doctor.create',compact('doctors','edit'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorValidation $request)
    {
        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/doctor')))
                @mkdir(public_path('images/doctor'));
            $file->move(public_path('images/doctor'),$file_name);
            $data['image'] =$file_name;


        }
        $doctor =Doctor::create($data);
        return redirect()->route('admin.doctor.index')
            ->with($doctor? 'success' :'error', $doctor? 'Created Successfully' :'Error Creating Data');
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
        $doctors['specialists']=Specialist::select('specialist_name','id')->active()->get();
        $data=[];
        $data['row']=Doctor::find($id);
        $edit =1;
        return view('admin.doctor.edit',compact('data','doctors','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorValidation $request,Doctor $doctor)
    {
        $data = $request->validated();

        if($request->hasFile('main_photo'))
        {

            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/doctor')))
                @mkdir(public_path('/images/doctor'));
            $file->move(public_path('images/doctor'),$file_name);
            $data['image'] =$file_name;
            $old_Slider =Doctor::where('id',$request['id'])->first();

            $old_path ='images/doctor/'.$old_Slider->image;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }



        }
        $doctor->update($data);
        return redirect()->route('admin.doctor.index')
            ->with($doctor ? 'success' : 'error', $doctor ? 'Updated Successfully' : 'Error Creating Data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.doctor.index')->with('sucess','doctor has been deleted sucessfully');
    }

}
