<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ambulance\StoreAmbulanceValidation;
use App\Http\Requests\Admin\Ambulance\UpdateAmbulanceValidation;
use App\Models\Admin\Ambulance;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
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
        $ambulances =Ambulance::latest()->paginate(1000);
        return view('admin.ambulance.index',compact('ambulances'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ambulance.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAmbulanceValidation $request)
    {
        $data = $request->validated();
        $ambulance =Ambulance::create($request->validated());

        return redirect()->route('admin.ambulance.index')
            ->with($ambulance? 'success' :'error', $ambulance? 'Created Successfully' :'Error Creating Data');
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
        $data['row']=Ambulance::find($id);

        return view('admin.ambulance.edit',compact('data'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAmbulanceValidation $request,Ambulance $ambulance)
    {
        $data = $request->validated();
        $ambulance->update($data);
        return redirect()->route('admin.ambulance.index')
            ->with($ambulance ? 'success' : 'error', $ambulance ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ambulance $ambulance)
    {
        $ambulance->delete();
        return redirect()->route('admin.ambulance.index')->with('sucess','ambulance has been deleted sucessfully');
    }
}
