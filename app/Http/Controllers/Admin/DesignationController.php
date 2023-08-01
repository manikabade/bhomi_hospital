<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Designation\StoreDesignationValidation;
use App\Http\Requests\Admin\Designation\UpdateDesignationValidation;
use App\Models\Admin\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
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
        $designations = Designation::latest()->paginate(1000);
        return view('admin.designation.index',compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.designation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDesignationValidation $request)
    {
        $data = $request->validated();
        $designation = Designation::create($request->validated());

        return redirect()->route('admin.designation.index')
            ->with($designation? 'success' :'error', $designation? 'Created Successfully' :'Error Creating Data');
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
        $data=[];
        $data['row']=Designation::find($id);

        return view('admin.designation.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDesignationValidation $request,Designation $designation)
    {
        $data = $request->validated();
        $designation->update($data);
        return redirect()->route('admin.designation.index')
            ->with($designation ? 'success' : 'error', $designation ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        $designation->delete();
        return redirect()->route('admin.designation.index')->with('sucess','designation has been deleted sucessfully');
    }
}
