<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutUs\StoreAboutUsValidation;
use App\Http\Requests\Admin\AboutUs\UpdateAboutUsValidation;
use App\Models\Admin\AboutUs;
use App\Models\Admin\Designation;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    protected $model;
    public function __construct(AboutUs $model)
    {
        $this->model =$model;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutUss = AboutUs::latest()->paginate(1000);
        $edit =0;
        return view('admin.aboutUs.index', compact('aboutUss','edit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aboutUss['designations']=Designation::select('designation_name','id')->active()->get();
        $edit =0;
        return view('admin.aboutUs.create',compact('aboutUss','edit'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutUsValidation $request)
    {

        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/aboutUs')))
                @mkdir(public_path('images/aboutUs'));
            $file->move(public_path('images/aboutUs'),$file_name);
            $data['image'] =$file_name;


        }
        $aboutUs =AboutUs::create($data);
        return redirect()->route('admin.aboutUs.index')
            ->with($aboutUs? 'success' :'error', $aboutUs? 'Created Successfully' :'Error Creating Data');
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
        $data = [];
        $aboutUss['designations']=Designation::select('designation_name','id')->active()->get();
        $data['row']=AboutUs::find($id);
        $edit =1;
        return view('admin.aboutUs.edit',compact('data','aboutUss','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutUsValidation $request, AboutUs $aboutUs)

        {
            $data = $request->validated();

            if($request->hasFile('main_photo'))
            {
                $data =$request->validated();
                $file=$request->main_photo;
                $file_name=$file->getClientOriginalName();
                if (!file_exists(public_path('/images/aboutUs')))
                    @mkdir(public_path('/images/aboutUs'));
                $file->move(public_path('images/aboutUs'),$file_name);
                $data['image'] =$file_name;
                $old_aboutUs =AboutUs::where('id',$request['id'])->first();

                $old_path ='images/aboutUs/'.$old_aboutUs->image;

                if (file_exists(public_path($old_path))) {

                    //File::delete($image_path);
                    unlink(public_path($old_path));
                }
            }
            $aboutUs->update($data);
            return redirect()->route('admin.aboutUs.index')
                ->with($aboutUs ? 'success' : 'error', $aboutUs ? 'Updated Successfully' : 'Error Creating Data');
        }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $about =$this->model->find($id);
        $about->delete();
        return redirect()->route('admin.aboutUs.index')->with('sucess', 'aboutUs has been deleted sucessfully');
    }
}

