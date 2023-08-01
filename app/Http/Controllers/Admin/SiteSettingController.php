<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SiteSetting\UpdateSiteSettingValidation;
use App\Models\Admin\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    public function edit()
        {
            $data = [];
            $data ['row'] =SiteSetting::first();

            return view('admin.siteSetting.edit',compact('data'));
        }


    /**
     * Update the specified resource in storage.
     */
//    public function update(UpdateSiteSettingValidation $request,SiteSetting $siteSetting)
//    {
//
//        $siteSetting = SiteSetting::first();
//        $data = $request->validated();
//        $siteSetting->update($data);
//        return redirect()->route('admin.siteSetting')
//            ->with($siteSetting ? 'success' : 'error', $siteSetting ? 'Updated Successfully' : 'Error Creating Data');
//    }

    public function update(UpdateSiteSettingValidation $request,SiteSetting $siteSetting)
    {
        $siteSetting = SiteSetting::first();
        $data = $request->validated();
//        dd($request->all());

        if($request->hasFile('main_photo'))
        {
            $data =$request->validated();
            $file=$request->main_photo;
            $file_name=$file->getClientOriginalName();
            if (!file_exists(public_path('/images/site-setting/photo')))
                @mkdir(public_path('/images/site-setting/photo'));
            $file->move(public_path('images/site-setting/photo'),$file_name);
            $data['photo'] =$file_name;
            $old_photo =SiteSetting::where('id',$request['id'])->first();
            $photo_url ='images/site-setting/photo/'.$old_photo->photo;
            if (file_exists(public_path($photo_url))) {

                //File::delete($image_path);
                unlink(public_path($photo_url));
            }
        }


        if($request->hasFile('main_logo'))
        {

            $data = $request->validated();
            $file = $request->main_logo;
            $file_name = $file->getClientOriginalName();
            if (!file_exists(public_path('/images/site-setting/logo')))
                @mkdir(public_path('/images/site-setting/logo'));
            $file->move(public_path('images/site-setting/logo'),$file_name);
            $data['logo'] =$file_name;
            $old_logo =SiteSetting::where('id',$request['id'])->first();
            $logo_url ='images/site-setting/logo/'.$old_logo->logo;
            if (file_exists(public_path($logo_url))) {

                //File::delete($image_path);
                unlink(public_path($logo_url));
            }
        }

        $siteSetting->update($data);
        return redirect()->route('admin.siteSetting')
            ->with($siteSetting ? 'success' : 'error', $siteSetting ? 'Updated Successfully' : 'Error Creating Data');
    }
}
