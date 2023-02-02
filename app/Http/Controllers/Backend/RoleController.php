<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller{

    public function AllPermission(){

        $permissions = Permission::all();

        return view('backend.permission.all_permission',compact('permissions'));

    }

    public function AddPermission(){

        return view('backend.permission.add_permission');

    }

    public function StoreVPermission(Request $request){

        $role = Permission::create([

            'name'          => $request->name,
            'group_name'    => $request->group_name,

        ]);

        $notification = array(

            'message' => 'Permission Added Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('all.permission')->with($notification);

    }

    public function EditPermission($id){

        $permission = Permission::findOrFail($id);

        return view('backend.permission.edit_permission',compact('permission'));

    }

    public function UpdateVPermission(Request $request){

        $permission_id = $request->id;

        $role = Permission::findOrFail($permission_id)->update([

            'name'          => $request->name,
            'group_name'    => $request->group_name,

        ]);

        $notification = array(

            'message' => 'Permission Updated Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('all.permission')->with($notification);

    }

    public function DeletePermission($id){

        Permission::findOrFail($id)->delete();

        $notification = array(

            'message' => 'Permission Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function AllRoles(){

        $role = Role::all();

        return view('backend.role.all_role',compact('role'));

    }

    public function AddRoles(){

        return view('backend.role.add_role');

    }

    public function StoreRoles(Request $request){

        $role = Role::create([

            'name'          => $request->name,

        ]);

        $notification = array(

            'message' => 'Role Added Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('all.roles')->with($notification);

    }

    public function EditRoles($id){

        $roles = Role::findOrFail($id);

        return view('backend.role.edit_role',compact('roles'));

    }

    public function UpdateRoles(Request $request){

        $roleid = $request->id;

        $role = Role::findOrFail($roleid)->update([

            'name'          => $request->name,

        ]);

        $notification = array(

            'message' => 'Role Updated Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('all.roles')->with($notification);

    }

    public function DeleteRoles($id){

        Role::findOrFail($id)->delete();

        $notification = array(

            'message' => 'Role Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function AllRolesPermission(){

        $roles = Role::all();

        return view('backend.role.all_role_permission',compact('roles'));

    }

    public function AddRolesPermission(){

        $roles = Role::all();

        $permission = Permission::all();

        // getpermissionGroups diambil dari model User.php

        $permission_groups = User::getpermissionGroups();

        return view('backend.role.add_role_permission',compact('roles','permission','permission_groups'));

    }

    public function StoreRolesPermission(Request $request){

        $data = array();

        $permissions = $request->permission;

        foreach($permissions as $key => $item) {

            $data['role_id']        = $request->role;
            $data['permission_id']  = $item;

            DB::table('role_has_permissions')->insert($data);

        }

        $notification = array(

            'message' => 'Role Permission Added Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('all.roles.permission')->with($notification);

    }

    public function EditRolesPermission($id){

        $role           = Role::findOrFail($id);

        $permission     = Permission::all();

        // getpermissionGroups diambil dari model User.php

        $permission_groups = User::getpermissionGroups();

        return view('backend.role.edit_role_permission',compact('role','permission','permission_groups'));

    }

    public function UpdateRolesPermission(Request $request,$id){

        $role       = Role::findOrFail($id);

        $permission = $request->permission;

        if (!empty($permission)) {

            // syncPermissions() adalah fungsi dari laravel spattie.

            $role->syncPermissions($permission);

        }


        $notification = array(

            'message' => 'Role Permission Updated Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('all.roles.permission')->with($notification);

    }


    public function DeleteRolesPermission($id){

        $role       = Role::findOrFail($id);

        if (!is_null($role)) {

            $role->delete();

        }

        $notification = array(

            'message' => 'Role Permission Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

}
