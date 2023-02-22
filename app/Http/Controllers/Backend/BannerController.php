<?php

namespace App\Http\Controllers\Backend;

use Image;
use Carbon\Carbon;
use App\Models\Banners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller{

    public function AllBanners(){

        $banner = Banners::findOrFail(1);

        return view('backend.banner.banner_update',compact('banner'));

    }

    public function UpdateBanners(Request $request){

        $banner_id = $request->id;

        if ($request->file('home_one')) {

            $image1      = $request->file('home_one');

            $name_gen1   = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image1)->resize(728,null, function ($constraint) {

                $constraint->aspectRatio();

            })->save('upload/banner/'.$name_gen1);

            $save_url1 = 'upload/banner/'.$name_gen1;

            Banners::findOrFail($banner_id)->update([

                'home_one' => $save_url1,

            ]);

            $notification = array(

                'message' => 'Home One Banner Added Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);


        }

        if($request->file('home_two')){

            $image2      = $request->file('home_two');

            $name_gen2   = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image2)->resize(null,90, function ($constraint) {

                $constraint->aspectRatio();

            })->save('upload/banner/'.$name_gen2);

            $save_url2 = 'upload/banner/'.$name_gen2;

            Banners::findOrFail($banner_id)->update([

                'home_two' => $save_url2,

            ]);

            $notification = array(

                'message' => 'Home Two Banner Added Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);


        }

        if($request->file('home_three')){

            $image3      = $request->file('home_three');

            $name_gen3   = hexdec(uniqid()).'.'.$image3->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image3)->resize(null,90, function ($constraint) {

                $constraint->aspectRatio();

            })->save('upload/banner/'.$name_gen3);

            $save_url3 = 'upload/banner/'.$name_gen3;

            Banners::findOrFail($banner_id)->update([

                'home_three' => $save_url3,

            ]);

            $notification = array(

                'message' => 'Home Three Banner Added Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);

        }

        if($request->file('home_four')){

            $image4      = $request->file('home_four');

            $name_gen4   = hexdec(uniqid()).'.'.$image4->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image4)->resize(null,90, function ($constraint) {

                $constraint->aspectRatio();

            })->save('upload/banner/'.$name_gen4);

            $save_url4 = 'upload/banner/'.$name_gen4;

            Banners::findOrFail($banner_id)->update([

                'home_four' => $save_url4,

            ]);

            $notification = array(

                'message' => 'Home Four Banner Added Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);

        }

        if($request->file('news_category_one')){

            $image5      = $request->file('news_category_one');

            $name_gen5   = hexdec(uniqid()).'.'.$image5->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image5)->resize(null,90, function ($constraint) {

                $constraint->aspectRatio();

            })->save('upload/banner/'.$name_gen5);

            $save_url5 = 'upload/banner/'.$name_gen5;

            Banners::findOrFail($banner_id)->update([

                'news_category_one' => $save_url5,

            ]);

            $notification = array(

                'message' => 'News Category One Added Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);

        }

        if($request->file('news_details_one')){

            $image6      = $request->file('news_details_one');

            $name_gen6   = hexdec(uniqid()).'.'.$image6->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image6)->resize(null,90, function ($constraint) {

                $constraint->aspectRatio();

            })->save('upload/banner/'.$name_gen6);

            $save_url6 = 'upload/banner/'.$name_gen6;

            Banners::findOrFail($banner_id)->update([

                'news_details_one' => $save_url6,

            ]);

            $notification = array(

                'message' => 'News Details One Added Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);

        }

        if($request->file('vertical_banner')){

            $image7      = $request->file('vertical_banner');

            $name_gen7   = hexdec(uniqid()).'.'.$image7->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image7)->resize(null,90, function ($constraint) {

                $constraint->aspectRatio();

            })->save('upload/banner/'.$name_gen7);

            $save_url7 = 'upload/banner/'.$name_gen7;

            Banners::findOrFail($banner_id)->update([

                'vertical_banner' => $save_url7,

            ]);

            $notification = array(

                'message' => 'Vertical Banner Added Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->back()->with($notification);

        }

    }

}
