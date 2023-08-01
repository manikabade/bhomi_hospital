<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Slider\StoreSliderValidation;
use App\Http\Requests\Admin\Slider\UpdateSliderValidation;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
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
    $sliders =Slider::latest()->paginate(1000);
    $edit =0;
    return view('admin.slider.index',compact('sliders','edit'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $edit =0;
    return view('admin.slider.create',['edit'=>$edit]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderValidation $request)
{
    if($request->hasFile('main_photo'))
    {
        $data =$request->validated();
        $file=$request->main_photo;
        $file_name=$file->getClientOriginalName();
        if (!file_exists(public_path('images/slider')))
            @mkdir(public_path('images/slider'));
        $file->move(public_path('images/slider'),$file_name);
        $data['image'] =$file_name;


    }
      $slider =Slider::create($data);
     return redirect()->route('admin.slider.index')
        ->with($slider? 'success' :'error', $slider? 'Created Successfully' :'Error Creating Data');
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
    $data['row']=Slider::find($id);
    $edit =1;

    return view('admin.slider.edit',compact('data','edit'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderValidation $request,Slider $slider)
{
    $data = $request->validated();

    if($request->hasFile('main_photo'))
    {

        $data =$request->validated();
        $file=$request->main_photo;
        $file_name=$file->getClientOriginalName();
        if (!file_exists(public_path('/images/slider')))
            @mkdir(public_path('/images/slider'));
        $file->move(public_path('images/slider'),$file_name);
        $data['image'] =$file_name;
        $old_Slider =Slider::where('id',$request['id'])->first();

        $old_path ='images/slider/'.$old_Slider->image;

          if (file_exists(public_path($old_path))) {

            //File::delete($image_path);
            unlink(public_path($old_path));
        }
    }
    $slider->update($data);
    return redirect()->route('admin.slider.index')
        ->with($slider ? 'success' : 'error', $slider ? 'Updated Successfully' : 'Error Creating Data');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
{
    $slider->delete();
    return redirect()->route('admin.slider.index')->with('sucess','slider has been deleted sucessfully');
}
}
