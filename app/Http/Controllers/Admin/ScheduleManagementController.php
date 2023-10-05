<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScheduleManagement\StoreScheduleManagementValidation;
use App\Http\Requests\Admin\ScheduleManagement\UpdateScheduleManagementValidation;
use App\Models\Admin\Doctor;
use App\Models\Admin\ScheduleManagement;
use App\Models\Admin\Specialist;
use Illuminate\Http\Request;

class ScheduleManagementController extends Controller
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
        $scheduleManagements = ScheduleManagement::latest()->paginate(1000);
        return view('admin.scheduleManagement.index', compact('scheduleManagements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $scheduleManagements['doctors']=Doctor::select('doctor_name','id')->active()->get();
        return view('admin.scheduleManagement.create',compact('scheduleManagements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScheduleManagementValidation $request)
    {
        $data = $request->validated();
        $scheduleManagement =ScheduleManagement::create($request->validated());

        return redirect()->route('admin.scheduleManagement.index')
            ->with($scheduleManagement? 'success' :'error', $scheduleManagement? 'Created Successfully' :'Error Creating Data');
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
        $scheduleManagements['doctors']=Specialist::select('doctor_name','id')->active()->get();
        $data=[];
        $data['row']=ScheduleManagement::find($id);
        return view('admin.scheduleManagement.edit', compact('data','scheduleManagements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleManagementValidation $request,ScheduleManagement $scheduleManagement)
    {
        $data = $request->validated();
        $scheduleManagement->update($data);
        return redirect()->route('admin.scheduleManagement.index')
            ->with($scheduleManagement ? 'success' : 'error', $scheduleManagement ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScheduleManagement $scheduleManagement)
    {
        $scheduleManagement->delete();
        return redirect()->route('admin.scheduleManagement.index')->with('success','scheduleManagement has been deleted successfully');
    }
}

