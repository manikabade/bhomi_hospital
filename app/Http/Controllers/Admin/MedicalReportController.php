<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MedicalReport\StoreMedicalReportValidation;
use App\Http\Requests\Admin\MedicalReport\UpdateMedicalReportValidation;
use App\Models\Admin\Appointment;
use App\Models\Admin\GeneralLabtest;
use App\Models\Admin\MedicalReport;
use Illuminate\Http\Request;

class MedicalReportController extends Controller
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
        $medicalReports = MedicalReport::latest()->with('generallabtest')->paginate(1000);
        return view('admin.medicalReport.index',compact('medicalReports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        $medicalReports['patients'] = Patient::active()
//            ->pluck('license_key' ,'id');
        $medicalReports['appointments']=Appointment::select('patient_name','id')->active()->get();
       $medicalReports['general_labtests']=GeneralLabtest::select('general_labtest','id','remarks','report')->active()->get();
        return view('admin.medicalReport.create',compact('medicalReports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicalReportValidation $request)
    {
        $data = $request->validated();
        $medicalReport =MedicalReport::create($request->validated());

        return redirect()->route('admin.medicalReport.index')
            ->with($medicalReport? 'success' :'error', $medicalReport? 'Created Successfully' :'Error Creating Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medicalReports['appointments']=Appointment::select('patient_name','id')->active()->get();
        $medicalReports['general_labtests']=GeneralLabtest::select('general_labtest','id','remarks','report')->active()->get();
        $data=[];
        $data['row']=MedicalReport::find($id);
        return view('admin.medicalReport.edit', compact('data','medicalReports'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicalReportValidation $request,MedicalReport $medicalReport)
    {
        $data = $request->validated();
        $medicalReport->update($data);
        return redirect()->route('admin.medicalReport.index')
            ->with($medicalReport ? 'success' : 'error', $medicalReport ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedicalReport $medicalReport)
    {
        $medicalReport->delete();
        return redirect()->route('admin.medicalReport.index')->with('success','medicalReport has been deleted successfully');
    }
}
