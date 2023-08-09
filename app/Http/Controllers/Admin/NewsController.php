<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\News\StoreNewsValidation;
use App\Http\Requests\Admin\News\UpdateNewsValidation;
use App\Models\Admin\Designation;
use App\Models\Admin\News;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        $newss = News::latest()->paginate(1000);
        $edit =0;
        return view('admin.news.index', compact('newss','edit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $newss['designations']=Designation::select('designation_name','id')->active()->get();
        $edit =0;
        return view('admin.news.create',compact('newss','edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsValidation $request)
    {

        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('images/news')))
                @mkdir(public_path('images/news'));
            $file->move(public_path('images/news'),$file_name);
            $data['image'] =$file_name;

        }
        $news =News::create($data);
        return redirect()->route('admin.news.index')
            ->with($news? 'success' :'error', $news? 'Created Successfully' :'Error Creating Data');
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
        $newss['designations']=Designation::select('designation_name','id')->active()->get();
        $data = [];
        $data['row'] = News::find($id);
        $edit =1;
        return view('admin.news.edit',compact('newss','data','edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsValidation $request,News $news)
    {

        $data = $request->validated();

        if($request->hasFile('main_photo'))
        {

            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/news')))
                @mkdir(public_path('/images/news'));
            $file->move(public_path('images/news'),$file_name);
            $data['image'] =$file_name;
            $old_Slider =News::where('id',$request['id'])->first();

            $old_path ='images/news/'.$old_Slider->image;

            if (file_exists(public_path($old_path))) {

                //File::delete($image_path);
                unlink(public_path($old_path));
            }

        }
        $news->update($data);
        return redirect()->route('admin.news.index')
            ->with($news ? 'success' : 'error', $news ? 'Updated Successfully' : 'Error Creating Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'news has been deleted successfully');
    }
}
