<?php

namespace App\Http\Controllers;

use App\Models\GlobalSetting;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Image;


class GlobalSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function StoreGlobalSetting(Request $request)
    {

        $globalsetting = GlobalSetting::first();
        if ($globalsetting === null) {

            $validatedData = $request->validate([
                'favicon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'site_name' => 'required',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',


            ]);

            $favicon =  $request->file('favicon');
            $name_gen_favicon = hexdec(uniqid()).'.'.$favicon->getClientOriginalExtension();
            Image::make($favicon)->resize(50,50)->save('uploads/images/'.$name_gen_favicon);
            $last_img_favicon = 'uploads/images/'.$name_gen_favicon;


            $logo =  $request->file('logo');
            $name_gen_logo = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
            Image::make($logo)->resize(50,50)->save('uploads/images/'.$name_gen_logo);
            $last_img_logo = 'uploads/images/'.$name_gen_logo;

            DB::table('global_settings')->Insert(
                ['favicon' => $last_img_favicon, 'site_name' => $request->site_name , 'logo' => $last_img_logo ,'site_description'=> $request->site_description, 'head_script' => $request->head_script]
            );

            $notification = array(
                'message' => 'Details Updated Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('admin.setting')->with($notification);
        }

        else {


            $old_favicon = $request->old_favicon;
            $favicon =  $request->file('favicon');
            $old_logo = $request->old_logo;
            $logo =  $request->file('logo');


            if($favicon and $logo){

                $validatedData = $request->validate([
                    'favicon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'site_name' => 'required',
                    'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    
                ]);
    

                $name_gen_favicon = hexdec(uniqid()).'.'.$favicon->getClientOriginalExtension();
                Image::make($favicon)->resize(50,50)->save('uploads/images/'.$name_gen_favicon);
                $last_img_favicon = 'uploads/images/'.$name_gen_favicon;
                unlink($old_favicon);

                $name_gen_logo = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
                Image::make($logo)->resize(50,50)->save('uploads/images/'.$name_gen_logo);
                $last_img_logo = 'uploads/images/'.$name_gen_logo; 
                unlink($old_logo);

                DB::table('global_settings')->Update(
                    ['favicon' => $last_img_favicon, 'site_name' => $request->site_name , 'logo' => $last_img_logo ,'site_description'=> $request->site_description , 'head_script' => $request->head_script]
                );

                $notification = array(
                    'message' => 'Details Updated Successfully',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);

            } 
            elseif($favicon){

                $validatedData = $request->validate([
                    'favicon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                    'site_name' => 'required',    
                ]);
    

                $name_gen_favicon = hexdec(uniqid()).'.'.$favicon->getClientOriginalExtension();
                Image::make($favicon)->resize(50,50)->save('uploads/images/'.$name_gen_favicon);
                $last_img_favicon = 'uploads/images/'.$name_gen_favicon;
                unlink($old_favicon);

                DB::table('global_settings')->Update(
                    ['favicon' => $last_img_favicon, 'site_name' => $request->site_name , 'logo' => $old_logo ,'site_description'=> $request->site_description , 'head_script' => $request->head_script]
                );

                $notification = array(
                    'message' => 'Details Updated Successfully',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);

            } 
            elseif($logo){

                $validatedData = $request->validate([
                    'site_name' => 'required',
                    'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    
                ]);
    


                $name_gen_logo = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
                Image::make($logo)->resize(50,50)->save('uploads/images/'.$name_gen_logo);
                $last_img_logo = 'uploads/images/'.$name_gen_logo; 
                unlink($old_logo);

                DB::table('global_settings')->Update(
                    ['favicon' => $old_favicon, 'site_name' => $request->site_name , 'logo' => $last_img_logo ,'site_description'=> $request->site_description , 'head_script' => $request->head_script]
                );

                $notification = array(
                    'message' => 'Details Updated Successfully',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);

            } 
            else{


                $validatedData = $request->validate([
                    'site_name' => 'required',
                ]);


                DB::table('global_settings')->Update(
                    ['favicon' => $old_favicon, 'site_name' => $request->site_name , 'logo' => $old_logo ,'site_description'=> $request->site_description , 'head_script' => $request->head_script]

                );

                $notification = array(
                    'message' => 'Details Updated Successfully',
                    'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);

            }





        }





    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GlobalSetting  $globalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(GlobalSetting $globalSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GlobalSetting  $globalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(GlobalSetting $globalSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GlobalSetting  $globalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GlobalSetting $globalSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GlobalSetting  $globalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GlobalSetting $globalSetting)
    {
        //
    }
}
