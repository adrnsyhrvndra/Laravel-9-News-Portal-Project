<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller{

    public function AllCategory(){

        $categories = Category::latest()->get();

        return view('backend.category.category_all',compact('categories'));

    }

    public function AddCategory(Request $request){

        $categories = Category::all();

        return view('backend.category.category_add',compact('categories'));

    }

    public function StoreCategory(Request $request){

        Category::insert([

            'category_name' => $request->category_name,

            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),

        ]);

        $notification = array(

            'message' => 'Category Added Successful',

            'alert-type' => 'success'

        );

        return redirect()->route('all.category')->with($notification);

    }

    public function EditCategory($id){

        $category = Category::findOrFail($id);

        $categories = Category::all();

        return view('backend.category.category_edit',compact('category','categories'));

    }

    public function UpdateCategory(Request $request){

        $cat_id = $request->id;

        Category::findOrFail($cat_id)->update([

            'category_name' => $request->category_name,

            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),

        ]);

        $notification = array(

            'message' => 'Category Updated Successful',

            'alert-type' => 'success'

        );

        return redirect()->route('all.category')->with($notification);

    }

    public function DeleteCategory($id){

        Category::findOrFail($id)->delete();

        $notification = array(

            'pesanNotif' => 'Category Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function RestoreCategoryPage(){

        $category_restore = Category::onlyTrashed()->get();

        return view('backend.category.category_all_restore',compact('category_restore'));

    }


    public function DeleteTrashCategory($id){

        $categories = Category::onlyTrashed()->findOrFail($id);

        $categories->forceDelete();

        $notification = array(

            'pesanNotif' => 'Category Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('restore.category.page')->with($notification);

    }

    public function RestoreCategory($id){

        $categories = Category::onlyTrashed()->findOrFail($id);

        $categories->restore();

        $notification = array(

            'pesanNotif' => 'Category Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('restore.category.page')->with($notification);

    }

    public function GetSubCategory($category_id){

        $subcat = Subcategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();

        return json_encode($subcat);

    }

}
