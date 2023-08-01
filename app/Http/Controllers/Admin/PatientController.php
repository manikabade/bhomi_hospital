<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Patient\StorePatientValidation;
use App\Http\Requests\Admin\Patient\UpdatePatientValidation;
use App\Models\Admin\Patient;
use App\Models\Admin\Specialist;
use Illuminate\Http\Request;

class PatientController extends Controller
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
        $patients =Patient::latest()->paginate(1000);
        $edit =0;
        return view('admin.patient.index',compact('patients','edit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patients['specialists']=Specialist::select('specialist_name','id')->active()->get();
        $edit =0;
        return view('admin.patient.create',compact('patients','edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientValidation $request)
    {

        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/patient')))
                @mkdir(public_path('images/patient'));
            $file->move(public_path('images/patient'),$file_name);
            $data['image'] =$file_name;


        }
        $patient =Patient::create($data);
        return redirect()->route('admin.patient.index')
            ->with($patient? 'success' :'error', $patient? 'Created Successfully' :'Error Creating Data');
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
        $patients['specialists']=Specialist::select('specialist_name','id')->active()->get();
        $data=[];
        $data['row']=Patient::find($id);
        $edit =1;
        return view('admin.patient.edit',compact('data','patients','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientValidation $request,Patient $patient)
    {
        $data = $request->validated();

        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/patient')))
                @mkdir(public_path('/images/patient'));
            $file->move(public_path('images/patient'),$file_name);
            $data['image'] =$file_name;
            $old_patient =Patient::where('id',$request['id'])->first();

            $old_path ='images/patient/'.$old_patient->image;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }
        }
        $patient->update($data);
        return redirect()->route('admin.patient.index')
            ->with($patient ? 'success' : 'error', $patient ? 'Updated Successfully' : 'Error Creating Data');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('admin.patient.index')->with('sucess','patient has been deleted sucessfully');
    }
}
