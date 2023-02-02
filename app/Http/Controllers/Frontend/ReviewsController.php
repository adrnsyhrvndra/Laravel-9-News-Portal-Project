<?php

namespace App\Http\Controllers\Frontend;

use Image;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Reviews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReviewsRequest;
use App\Http\Requests\UpdateReviewsRequest;

// Notification
use App\Notifications\ReviewNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;

class ReviewsController extends Controller{

    public function StoreReview(Request $request){

        $user = User::where('role','admin')->get();

        $news = $request->news_id;

        $request->validate([

            'comment' => 'required'

        ]);

        Reviews::insert([

            'news_id'       => $news,
            'user_id'       => Auth::id(),
            'comment'       => $request->comment,
            'created_at'    => Carbon::now(),

        ]);

        Notification::send($user, new ReviewNotification($request));

        return back()->with('status','Review Will Approve By Admin');

    }

    public function PendingReview(){

        $review = Reviews::where('status',0)->orderBy('id','DESC')->get();

        return view('backend.review.pending_review',compact('review'));

    }

    public function ApproveReview(){

        $review = Reviews::where('status',1)->orderBy('id','DESC')->get();

        return view('backend.review.approve_review',compact('review'));

    }

    public function ApproveReviewUpdate($id){

        Reviews::where('id',$id)->update([

            'status'=> 1

        ]);

        $notification = array(

            'message' => 'Review Approved Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

    public function ApproveReviewDelete($id){

        Reviews::findOrFail($id)->delete();

        $notification = array(

            'message' => 'Review Deleted Successfuly',

            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);

    }

}
