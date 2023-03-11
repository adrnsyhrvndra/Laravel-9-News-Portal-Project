<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Reviews;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller{

    public function AdminDashboard(){

        $adminData = User::where('role','admin')->get();
        $editorData = User::where('role','admin')->get();
        $reporterData = User::where('role','admin')->get();
        $categoryData = Category::all();
        $subCategoryData = Subcategory::all();
        $newsPostData = NewsPost::all();
        $reviewPostData = Reviews::all();
        $rolesPermissionData = Role::all();

        return view('admin.index',compact('adminData','categoryData','subCategoryData','newsPostData','reviewPostData','rolesPermissionData','reporterData','editorData'));

    }

    public function AdminLogin(){

        return view('admin.admin_login');

    }

    public function AdminProfile(){

        $id = Auth::user()->id;

        $adminData = User::find($id);

        return view('admin.admin_profile_view',compact('adminData'));

    }

    public function AdminProfileStore(Request $request){

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
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;

        }

        $data->save();

        $notification = array(

            'message' => 'Admin Profile Update Successful',

            'alert-type' => 'success'

        );

        return redirect()->route('admin.profile')->with($notification);

    }

    public function AdminChangePassword(){

        return view('admin.admin_change_password');

    }

    public function AdminUpdatePassword(Request $request){

        $request->validate([

            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',

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

    public function AdminLogoutPage(){

        return view('admin.admin_logout');

    }

    public function AdminLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(

            'message' => 'Logout Successfuly',

            'alert-type' => 'info'

        );

        return redirect()->route('admin.logout.page')->with($notification);

    }

    public function AllAdmin(){

        $alladminuser = User::where('role','admin')->latest()->get();

        return view('backend.admin.all_admin',compact('alladminuser'));

    }

    public function AddAdmin(){

        $roles = Role::all();

        return view('backend.admin.add_admin',compact('roles'));

    }

    public function StoreAdmin(Request $request){

        $user = new User();

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password =  Hash::make($request->password);
        $user->role = 'admin';
        $user->status = 'inactive';

        $user->save();

        if ($request->role) {

            // assignRole() adalah fungsi dari laravel spattie

            $user->assignRole($request->role);

        }

        $notification = array(

            'message' => 'New Added Successful',

            'alert-type' => 'success'

        );

        return redirect()->route('all.admin')->with($notification);

    }

    public function EditAdmin($id){

        $roles = Role::all();

        $adminuser = User::findOrFail($id);

        return view('backend.admin.edit_admin',compact('adminuser','roles'));

    }

    public function UpdateAdmin(Request $request){

        $admin_id = $request->id;

        $user = User::findOrFail($admin_id);

        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = 'admin';
        $user->status = 'active';

        $user->save();

        $user->roles()->detach();

        if ($request->role) {

            // assignRole() adalah fungsi dari laravel spattie

            $user->assignRole($request->role);

        }

        $notification = array(

            'message' => 'Admin Update Successful',

            'alert-type' => 'success'

        );

        return redirect()->route('all.admin')->with($notification);

    }

    public function DeleteAdmin($id){

        $user = User::findOrFail($id);

        if (!is_null($user)) {

            $user->delete();

        }

        $notification = array(

            'message' => 'Portfolio Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function InactiveAdminUser($id){

        User::findOrFail($id)->update([

            'status' => 'inactive',

        ]);

        $notification = array(

            'message' => 'Inactivated User Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function ActiveAdminUser($id){

        User::findOrFail($id)->update([

            'status' => 'active',

        ]);

        $notification = array(

            'message' => 'Activated User Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

}
