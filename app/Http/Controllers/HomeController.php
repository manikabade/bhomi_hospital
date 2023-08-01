<?php

namespace App\Http\Controllers;

use App\Models\Admin\Doctor;
use App\Models\Admin\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [] ;
        $data['_doctors'] = Doctor::active()->get();
        return view('welcome',compact('data') );
    }

    public function newsDetail($id)
    {
        $news = News::where('id',$id)->first();

        if ($news)
            return view('news-details',compact('news'));
        return abort(404);
    }
}
