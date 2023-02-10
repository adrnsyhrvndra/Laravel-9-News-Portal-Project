<?php

namespace App\Http\Controllers\Backend;

use App\Models\Sitesetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\Subcategory;
use Image;

class SitesettingController extends Controller{

    public function EditSiteSetting(){

        $site = Sitesetting::findOrFail(1);

        return view('backend.sitesetting.sitesetting_all',compact('site'));

    }

    public function UpdateSiteSetting(Request $request){

        $site_id = $request->id;

        // file('site_logo') = file() mengambil type input file.

        if ($request->file('site_logo')) {

            $site_logo  = $request->file('site_logo');
            $name_gen   = hexdec(uniqid()).'.'.$site_logo->getClientOriginalExtension();

             // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($site_logo)->resize(222,32)->save('upload/logo/'.$name_gen);

            $save_url = 'upload/logo/'.$name_gen;

            Sitesetting::findOrFail($site_id)->update([

                'footer_description'       => $request->footer_description,
                'footer_copyright'         => $request->footer_copyright,
                'instagram_url'            => $request->instagram_url,
                'facebook_url'             => $request->facebook_url,
                'pinterest_url'            => $request->pinterest_url,
                'youtube_url'              => $request->youtube_url,
                'site_logo'                => $save_url,
                'updated_at'               => Carbon::now(),

            ]);

            $notification = array(

                'message' => 'Site Update With Logo Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);

        } else{

            // Without tanpa Logo

            Sitesetting::findOrFail($site_id)->update([

                'footer_description'       => $request->footer_description,
                'footer_copyright'         => $request->footer_copyright,
                'instagram_url'            => $request->instagram_url,
                'facebook_url'             => $request->facebook_url,
                'pinterest_url'            => $request->pinterest_url,
                'youtube_url'              => $request->youtube_url,
                'updated_at'               => Carbon::now(),

            ]);

            $notification = array(

                'message' => 'Site Update Without Logo Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);

        }

    }

}
