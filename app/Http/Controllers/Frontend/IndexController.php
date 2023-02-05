<?php

namespace App\Http\Controllers\Frontend;

use Image;
use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\NewsPost;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\PhotoGalleries;
use App\Models\VideoGalleries;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller{

    public function Index(){

        $skip_cat_0 = Category::skip(0)->first();

        $skip_news_0 = NewsPost::where('status',1)->where('category_id',$skip_cat_0->id)->orderBy('id','DESC')->limit(3)->get();

        $skip_cat_2 = Category::skip(2)->first();

        $skip_news_2 = NewsPost::where('status',1)->where('category_id',$skip_cat_2->id)->orderBy('id','DESC')->limit(3)->get();

        $skip_cat_1 = Category::skip(1)->first();

        $skip_news_1 = NewsPost::where('status',1)->where('category_id',$skip_cat_1->id)->orderBy('id','DESC')->limit(3)->get();

        $newnewspost = NewsPost::orderBy('id','DESC')->limit(3)->get();

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(3)->get();

        $video = VideoGalleries::orderBy('created_at','DESC')->take(3)->get();

        $photo = PhotoGalleries::orderBy('created_at','DESC')->get();

        // distinct() berguna agar tidak ada value yang sama itu tampil

        $tags = DB::table('news_posts')->select('tags')->limit(15)->distinct()->get();

        $tagArray = [];

        foreach ($tags as $tag) {

            $tagArray = array_merge($tagArray, explode(',', $tag->tags));

        }

        $uniqueTags = array_unique($tagArray);

        return view('frontend.index',compact('skip_cat_0','skip_news_0','skip_cat_2','skip_news_2','skip_cat_1','skip_news_1','newnewspost','newspopular','uniqueTags','video','photo'));

    }

    public function NewsDetails($id,$slug){

        $news = NewsPost::findOrFail($id);

        $tags = $news->tags;

        $tags_all = explode(',' , $tags);

        $cat_id = $news->category_id;

        $relatedNews = NewsPost::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','ASC')->limit(6)->get();

        $newsKey = 'blog' . $news->id;

        if (!Session::has($newsKey)) {

            $news->increment('view_count');

            Session::put($newsKey,1);

        }

        $newnewspost = NewsPost::orderBy('id','DESC')->limit(8)->get();

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(8)->get();

        return view('frontend.news.news_details',compact('news','tags_all','relatedNews','newnewspost','newspopular'));

    }

    public function CatWiseNews($id,$slug){

        $news = NewsPost::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->get();

        $breadcat = Category::where('id',$id)->first();

        $newsfour = NewsPost::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->limit(5)->get();

        $newsallbycategory = NewsPost::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->get();

        return view('frontend.news.category_news',compact('news','breadcat','newsfour','newsallbycategory'));

    }

    public function SubCatWiseNews($id,$slug){

        $news = NewsPost::where('status',1)->where('subcategory_id',$id)->orderBy('id','DESC')->get();

        $breadsubcat = Subcategory::where('id',$id)->first();

        $newsfour = NewsPost::where('status',1)->where('subcategory_id',$id)->orderBy('id','DESC')->limit(4)->get();

        return view('frontend.news.subcategory_news',compact('news','breadsubcat','newsfour'));

    }

    public function ChangeLang(Request $request){

        App::setLocale($request->lang);

        session()->put('locale',$request->lang);

        return redirect()->back();

    }

    public function SearchByDate(Request $request){

        $date = new DateTime($request->date);

        $formatDate = $date->format('d-m-Y');

        $news = NewsPost::where('post_date',$formatDate)->latest()->get();

        return view('frontend.news.search_by_date',compact('news','formatDate'));

    }

    public function SearchNews(Request $request){

        $request->validate([

            'search' => 'required',

        ]);

        $item = $request->search;

        $news = NewsPost::where('news_title','LIKE',"%$item%")->get();

        return view('frontend.news.search',compact('news','item'));

    }

    public function RepporterAllNews($id){

        $reporter = User::findOrFail($id);

        $news = NewsPost::where('user_id',$id)->get();

        return view('frontend.reporter.reporter_news_post',compact('news','reporter'));

    }

}
