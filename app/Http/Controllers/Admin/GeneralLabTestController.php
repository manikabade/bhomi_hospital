<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GeneralLabtest\StoreGeneralLabtestValidation;
use App\Http\Requests\Admin\GeneralLabtest\UpdateGeneralLabtestValidation;
use App\Models\Admin\Appointment;
use App\Models\Admin\GeneralLabtest;
use Illuminate\Http\Request;

class GeneralLabTestController extends Controller

{
    protected $model;
    public function __construct(GeneralLabtest $model)
    {
        $this->model =$model;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generalLabtests = GeneralLabtest::latest()->paginate(1000);
        return view('admin.generalLabtest.index', compact('generalLabtests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generalLabtests['appointments']=Appointment::select('patient_name','id')->active()->get();
        return view('admin.generalLabtest.create',compact('generalLabtests'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGeneralLabtestValidation $request)
    {
        $data = $request->validated();
        $generalLabtest = GeneralLabtest::create($request->validated());

        return redirect()->route('admin.generalLabtest.index')
            ->with($generalLabtest ? 'success' : 'error', $generalLabtest ? 'Created Successfully' : 'Error Creating Data');
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
        $generalLabtests['appointments']=Appointment::select('patient_name','id')->active()->get();
        $data = [];
        $data['row']=GeneralLabtest::find($id);
        return view('admin.generalLabtest.edit',compact('data','generalLabtests'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGeneralLabtestValidation $request, GeneralLabtest $generalLabtest)
    {
        $data = $request->validated();
        $generalLabtest->update($data);
        return redirect()->route('admin.generalLabtest.index')
            ->with($generalLabtest ? 'success' : 'error', $generalLabtest ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about =$this->model->find($id);
        $about->delete();
        return redirect()->route('admin.generalLabtest.index')->with('sucess', 'generalLabtest has been deleted sucessfully');
    }
}

