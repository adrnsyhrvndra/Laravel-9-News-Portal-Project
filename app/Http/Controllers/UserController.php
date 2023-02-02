<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    public function UserDashboard(){

        $id = Auth::user()->id;

        $userData = User::find($id);

        return view('frontend.user_dashboard',compact('userData'));

    }

    public function UserProfileStore(Request $request){

        $id = Auth::user()->id;

        // Mengambil dari model user.

        $data =  User::find($id);

        $data->name         = $request->name;
        $data->username     = $request->username;
        $data->email        = $request->email;
        $data->phone        = $request->phone;


        // file('photo') = file() mengambil type input file

        if ($request->file('photo')) {

            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['photo'] = $filename;

        }

        $data->save();

        return back()->with('status','Profile updated successfully');

    }

    public function UserChangePassword(){

        $id = Auth::user()->id;

        $userData = User::find($id);

        return view('frontend.user_change_password',compact('userData'));

    }

    public function UserChangePasswordStore(Request $request){

        $request->validate([

            'old_password' => 'required',
            'new_password' => 'required',
            'password_confirmation' => 'required|same:new_password',

        ]);

        $hashedPassword = Auth::user()->password;

        if (!Hash::check($request->old_password, $hashedPassword)) {

            return redirect()->back()->with('error','Old Password Doesn"t" Match');

        }

        User::whereId(auth()->user()->id)->update([

            'password' => Hash::make($request->new_password)

        ]);

        return redirect()->back()->with('status','Password Changed Succesfully');


    }

    public function UserLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('status','User logout successfully');

    }

}
