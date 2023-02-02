<?php

namespace App\Http\Controllers\Backend;

use App\Models\SeoSetting;
use App\Http\Requests\StoreSeoSettingRequest;
use App\Http\Requests\UpdateSeoSettingRequest;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class SeoSettingController extends Controller{

    public function SeoSettingUpdate(){

        $seo = SeoSetting::findOrFail(1);

        return view('backend.seo.all_seo',compact('seo'));

    }

    public function SeoUpdate(Request $request){

        $seo_id = $request->id;

        SeoSetting::findOrFail($seo_id)->update([

            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_author'       => $request->meta_author,
            'meta_keyword'      => $request->meta_keyword,

        ]);

        $notification = array(

            'message' => 'SEO Updated Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

}
