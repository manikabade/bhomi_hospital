<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Specialist\StoreSpecialistValidation;
use App\Http\Requests\Admin\Specialist\UpdateSpecialistValidation;
use App\Models\Admin\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
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
        $specialists = Specialist::latest()->paginate(1000);
        return view('admin.specialist.index',compact('specialists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.specialist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSpecialistValidation $request)
    {
        $data = $request->validated();
        $specialist = Specialist::create($request->validated());

        return redirect()->route('admin.specialist.index')
            ->with($specialist? 'success' :'error', $specialist? 'Created Successfully' :'Error Creating Data');
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
        $data['row']=Specialist::find($id);

        return view('admin.specialist.edit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecialistValidation $request,Specialist $specialist)
    {
        $data = $request->validated();
        $specialist->update($data);
        return redirect()->route('admin.specialist.index')
            ->with($specialist ? 'success' : 'error', $specialist ? 'Updated Successfully' : 'Error Creating Data');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialist $specialist)
    {
        $specialist->delete();
        return redirect()->route('admin.specialist.index')->with('sucess','specialist has been deleted sucessfully');
    }
}
