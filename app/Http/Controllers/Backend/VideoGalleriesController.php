<?php

namespace App\Http\Controllers\Backend;

use App\Models\VideoGalleries;
use Image;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\Subcategory;
use App\Http\Requests\StoreVideoGalleriesRequest;
use App\Http\Requests\UpdateVideoGalleriesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoGalleriesController extends Controller{

    public function AllVideoGallery(){

        $video = VideoGalleries::latest()->get();

        return view('backend.video.all_video',compact('video'));

    }

    public function AddVideoGallery(){

        return view('backend.video.add_video');

    }

    public function StoreVideoGallery(Request $request){

        $image      = $request->file('video_image');

        $name_gen   = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

         // resize() dikarenakan sudah memakai package Image Intervention.

        Image::make($image)->resize(784,436)->save('upload/video/'.$name_gen);

        $save_url = 'upload/video/'.$name_gen;

        VideoGalleries::insert([

            'video_title'               => $request->video_title,
            'video_url'                 => $request->video_url,
            'post_date'                 => Carbon::now()->format('d F Y'),
            'video_image'               => $save_url,
            'created_at'                => Carbon::now(),

        ]);

        $notification = array(

            'message' => 'Video Added Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('all.video.gallery')->with($notification);

    }

    public function EditVideoGallery($id){

        $video = VideoGalleries::findOrFail($id);

        return view('backend.video.edit_video',compact('video'));

    }

    public function UpdateVideoGallery(Request $request){

        $video_id = $request->id;

        if ($request->file('video_image')) {

            $image      = $request->file('video_image');

            $name_gen   = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            // resize() dikarenakan sudah memakai package Image Intervention.

            Image::make($image)->resize(784,436)->save('upload/video/'.$name_gen);

            $save_url = 'upload/video/'.$name_gen;

            VideoGalleries::findOrFail($video_id)->update([

                'video_title'               => $request->video_title,
                'video_url'                 => $request->video_url,
                'post_date'                 => Carbon::now()->format('d F Y'),
                'video_image'               => $save_url,
                'created_at'                => Carbon::now(),

            ]);

            $notification = array(

                'message' => 'Video Updated With Image Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->route('all.video.gallery')->with($notification);

        } else{

            VideoGalleries::findOrFail($video_id)->update([

                'video_title'               => $request->video_title,
                'video_url'                 => $request->video_url,
                'post_date'                 => Carbon::now()->format('d F Y'),
                'created_at'                => Carbon::now(),

            ]);

            $notification = array(

                'message' => 'Video Updated Without Image Successfuly',

                'alert-type' => 'success'

            );

            return redirect()->route('all.video.gallery')->with($notification);

        }

    }

    public function DeleteVideoGallery($id){

        VideoGalleries::findOrFail($id)->delete();

        $notification = array(

            'message' => 'Video Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function RestoreVideoPage(){

        $videogalleries_restore = VideoGalleries::onlyTrashed()->get();

        return view('backend.video.all_video_restore',compact('videogalleries_restore'));

    }

    public function DeleteTrashVideo($id){

        $video_galleries = VideoGalleries::onlyTrashed()->findOrFail($id);

        $img_video = $video_galleries->video_image;

        unlink($img_video);

        $video_galleries->forceDelete();

        $notification = array(

            'pesanNotif' => 'Video Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('restore.video.page')->with($notification);

    }

    public function RestoreVideo($id){

        $video_galleries = VideoGalleries::onlyTrashed()->findOrFail($id);

        $video_galleries->restore();

        $notification = array(

            'pesanNotif' => 'Video Restore Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->route('restore.video.page')->with($notification);

    }

}
