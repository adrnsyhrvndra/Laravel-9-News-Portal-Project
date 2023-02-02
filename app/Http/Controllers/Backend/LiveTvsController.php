<?php

namespace App\Http\Controllers\Backend;

use App\Models\LiveTvs;
use Image;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLiveTvsRequest;
use App\Http\Requests\UpdateLiveTvsRequest;

class LiveTvsController extends Controller{

    public function LiveTvsGallery(){

        $livetv = LiveTvs::findOrfail(1);

        return view('backend.livetv.live_tv',compact('livetv'));

    }


    public function UpdateLiveTvsGallery(Request $request){

        $live_id = $request->id;

        if ($request->file('live_image')) {

            $image      = $request->file('live_image');

            $name_gen   = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image)->resize(784,436)->save('upload/video/'.$name_gen);

            $save_url = 'upload/video/'.$name_gen;

            LiveTvs::findOrFail($live_id)->update([

                'live_url'                  => $request->live_url,
                'post_date'                 => Carbon::now()->format('d F Y'),
                'live_image'                => $save_url,
                'created_at'                => Carbon::now(),

            ]);

            $notification = array(

                'message' => 'Live TV Updated With Image Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->route('edit.live.tv')->with($notification);

        } else{

            LiveTvs::findOrFail($live_id)->update([

                'live_url'                  => $request->live_url,
                'post_date'                 => Carbon::now()->format('d F Y'),
                'created_at'                => Carbon::now(),

            ]);

            $notification = array(

                'message' => 'Live TV Updated Without Image Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->route('edit.live.tv')->with($notification);

        }

    }

}
