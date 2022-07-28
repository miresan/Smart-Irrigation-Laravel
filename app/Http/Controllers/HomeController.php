<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth');
        }
      
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
        {
            return redirect('/admin');
        }
      
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function adminHome()
        {
            return redirect('/admin');    
        }


        //user table update
        public function GetUser()
        {
            if (auth()->user()->is_admin == 1) {
                $id = auth()->user()->id ;
                $user = User::find($id);

                return view('admin.user.edit',compact('user'));
            }
            else{
                return redirect()->back();
            }
            
        }

        public function UserUpdate(Request $request)
        {
            $id = auth()->user()->id ;

            $profile_image =  $request->file('profile_image');
            $old_profile_image = $request->old_profile_image;

            
            // User::where("id", $id)->update(["name" => $request->nname]);
            // $notification = array(
            //     'message' => 'Details Updated Successfully',
            //     'alert-type' => 'success'
            //     );
            //     return Redirect()->back()->with($notification);


            if($profile_image){

                $validatedData = $request->validate([
                    'name' => 'string', 'max:255',
                    'email' => 'string', 'email', 'max:255', 'unique:users',
                    'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    
                ]);

                $name_gen_profile_image = hexdec(uniqid()).'.'.$profile_image->getClientOriginalExtension();
                Image::make($profile_image)->resize(150,150)->save('storage/images/'.$name_gen_profile_image);
                $last_img_profile_image = 'storage/images/'.$name_gen_profile_image;

                // $old_profile_image_link = 'storage/images/'.$old_profile_image;
                unlink($old_profile_image);

                
                User::where("id", $id)->update(['name' => $request->name, 'email' => $request->email , 'profile_image' => $last_img_profile_image]);

                    
                    
                $notification = array(
                'message' => 'Details Updated Successfully',
                'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);

            }else{
                $id = auth()->user()->id ;
                $user = User::find($id);

                $validatedData = $request->validate([
                    'name' => 'required', 'string', 'max:255',
                    'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
    
                ]);

                // DB::table('users')->Update(
                //     ['name' => $request->name, 'email' => $request->email , 'profile_image' => $old_profile_image , 'password' => Hash::make($request->password)]);
                
                User::where("id", $id)->update(['name' => $request->name, 'email' => $request->email , 'profile_image' => $old_profile_image]);
    
                    
                $notification = array(
                'message' => 'Details Updated Successfully',
                'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);

            }




        }


        public function UserUpdatePassword(Request $request)
        {
            $id = auth()->user()->id ;
            $validatedData = $request->validate([
                'password' => ['required', 'string', 'min:6', 'confirmed'],


            ]);
            User::where("id", $id)->update(['password' => Hash::make($request->password)]);
            $notification = array(
                'message' => 'password Changed Successfully',
                'alert-type' => 'success'
                );
                return Redirect()->back()->with($notification);

        }
}
