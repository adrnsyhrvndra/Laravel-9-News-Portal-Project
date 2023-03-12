<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;

class SubcategoryController extends Controller{

    public function AllSubCategory(){

        $subcategories = Subcategory::latest()->get();

        return view('backend.subcategory.subcategory_all',compact('subcategories'));

    }


    public function AddSubCategory(){

        // JOIN DATA TO CATEGORIES

        $categories = Category::latest()->get();

        $subcategories = Subcategory::all();

        return view('backend.subcategory.subcategory_add',compact('categories','subcategories'));

    }

    public function StoreSubCategory(Request $request){

        Subcategory::insert([

            'category_id' => $request->category_name,

            'subcategory_name' => $request->subcategory_name,

            'subcategory_slug' => strtolower(str_replace(' ','-',$request->subcategory_name)),

        ]);

        $notification = array(

            'message' => 'Sub Category Added Successful',

            'alert-type' => 'success'

        );

        return redirect()->route('all.sub.category')->with($notification);

    }

    public function EditSubCategory($id){

        // JOIN DATA TO CATEGORIES

        $categories = Category::latest()->get();

        $subcategory = Subcategory::findOrFail($id);

        $subcategories = Subcategory::all();

        return view('backend.subcategory.subcategory_edit',compact('subcategory','categories','subcategories'));

    }


    public function UpdateSubCategory(Request $request){

        $sub_cat_id = $request->id;

        Subcategory::findOrFail($sub_cat_id)->update([

            'category_id' => $request->category_name,

            'subcategory_name' => $request->subcategory_name,

            'subcategory_slug' => strtolower(str_replace(' ','-',$request->subcategory_name)),

        ]);

        $notification = array(

            'message' => 'Sub Category Updated Successful',

            'alert-type' => 'success'

        );

        return redirect()->route('all.sub.category')->with($notification);

    }

    public function DeleteSubCategory($id){

        Subcategory::findOrFail($id)->delete();

        $notification = array(

            'pesanNotif' => 'Sub Category Deleted Successful',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function RestoreSubCategoryPage(){

        $subcategory_restore = Subcategory::onlyTrashed()->get();

        return view('backend.subcategory.subcategory_all_restore',compact('subcategory_restore'));

    }

    public function DeleteTrashSubCategory($id){

        $subcategories = Subcategory::onlyTrashed()->findOrFail($id);

        $subcategories->forceDelete();

        $notification = array(

            'pesanNotif' => 'Sub Category Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('restore.sub.category.page')->with($notification);

    }

    public function RestoreSubCategory($id){

        $subcategories = Subcategory::onlyTrashed()->findOrFail($id);

        $subcategories->restore();

        $notification = array(

            'pesanNotif' => 'Sub Category Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('restore.sub.category.page')->with($notification);

    }

}
