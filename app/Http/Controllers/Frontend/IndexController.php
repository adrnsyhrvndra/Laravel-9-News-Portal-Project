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

use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

// App ID Instagram : 1633916863712355
// Instagram APP Secret : 4c1fd56655ff5ab2b96c24b3fb08d2ed

// Code : AQAB-j5QJFkyEWHlK6Lt9-zlZkPOBSUnMvUVaDhSMJc9hl5hFkxGpJn855Jxozq9k8eve8i_EogLq5WrLEPoGeDrw_FHE_mB9mV6_7MQu2cl_G0stWwejy96bKkiEVXkj4zgN3txqTB-i0TJaztFEM50hj0MJzDRUm9CJFv5TJyhEJsPxmPoTZH1bkMrmXGA9YxlW9pGvIie1OwzqptE10hGkPiMjkjRUrmeV73_CsNfNQ

// Acces Token : IGQVJYMmdrQmRpYllRZAExrQkV0NWxqV3psWTRxclRkV3A3U2MxZA0hpS25JdWNwWXNXY2hZAUTNhUWdtS3pLeUlYaENYRlpoR2hhMmhnSy1IMEJZAdFJaUklPcGVXVnk3UjhoWUd4WWhpaXhGY3N3a29GdUdtSVE1amdfcG9V

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

        $relatedNews = NewsPost::where('status', 1)
                            ->where('category_id', $cat_id)
                            ->where('id','!=',$id)
                            ->orderBy('id', 'ASC')
                            ->paginate(3);

        $newsKey = 'blog' . $news->id;

        $allcategories = Category::all();

        // distinct() berguna agar tidak ada value yang sama itu tampil

        $tags = DB::table('news_posts')->select('tags')->limit(15)->distinct()->get();

        $tagArray = [];

        foreach ($tags as $tag) {

            $tagArray = array_merge($tagArray, explode(',', $tag->tags));

        }

        $uniqueTags = array_unique($tagArray);

        // Logika Untuk Menghitung View Count

        if (!Session::has($newsKey)) {

            $news->increment('view_count');

            Session::put($newsKey,1);

        }

        $newnewspost = NewsPost::orderBy('id','DESC')->limit(8)->get();

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(8)->get();

        return view('frontend.news.news_details',compact('news','tags_all','relatedNews','newnewspost','newspopular','allcategories','uniqueTags'));

    }

    public function CatWiseNews($id,$slug){

        $news = NewsPost::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->get();

        $breadcat = Category::where('id',$id)->first();

        $allcategories = Category::all();

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(8)->get();

        $newsfour = NewsPost::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->limit(5)->get();

        $newsallbycategory = NewsPost::where('status', 1)
                            ->where('category_id', $id)
                            ->orderBy('id', 'DESC')
                            ->paginate(11);

        return view('frontend.news.category_news',compact('news','breadcat','newsfour','newsallbycategory','allcategories','newspopular'));

    }

    public function SubCatWiseNews($id,$slug){

        $news = NewsPost::where('status',1)->where('subcategory_id',$id)->orderBy('id','DESC')->get();

        $breadsubcat = Subcategory::where('id',$id)->first();

        $allcategories = Category::all();

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(4)->get();

        $newsfour = NewsPost::where('status',1)->where('subcategory_id',$id)->orderBy('id','DESC')->limit(10)->get();

        $newsallbysubcategory = NewsPost::where('status', 1)
                            ->where('subcategory_id', $id)
                            ->orderBy('id', 'DESC')
                            ->paginate(11);

        return view('frontend.news.subcategory_news',compact('news','breadsubcat','newsfour','newsallbysubcategory','allcategories','newspopular'));

    }

    public function ChangeLang(Request $request){

        App::setLocale($request->lang);

        session()->put('locale',$request->lang);

        return redirect()->back();

    }

    public function SearchByDate(Request $request){

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(3)->get();

        // distinct() berguna agar tidak ada value yang sama itu tampil

        $tags = DB::table('news_posts')->select('tags')->limit(15)->distinct()->get();

        $tagArray = [];

        foreach ($tags as $tag) {

            $tagArray = array_merge($tagArray, explode(',', $tag->tags));

        }

        $uniqueTags = array_unique($tagArray);

        $date = new DateTime($request->date);

        $formatDate = $date->format('d-m-Y');

        $news = NewsPost::where('status', 1)
                        ->where('post_date', $formatDate)
                        ->paginate(9);

        return view('frontend.news.search_by_date',compact('news','formatDate','newspopular','uniqueTags'));

    }

    public function SearchNews(Request $request){

        $request->validate([

            'search' => 'required',

        ]);

        $item = $request->search;

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(3)->get();

        // distinct() berguna agar tidak ada value yang sama itu tampil

        $tags = DB::table('news_posts')->select('tags')->limit(15)->distinct()->get();

        $tagArray = [];

        foreach ($tags as $tag) {

            $tagArray = array_merge($tagArray, explode(',', $tag->tags));

        }

        $uniqueTags = array_unique($tagArray);

        $news = NewsPost::where('status', 1)
                        ->where('news_title','LIKE',"%$item%")
                        ->paginate(9);

        return view('frontend.news.search',compact('news','item','newspopular','uniqueTags'));

    }

    public function RepporterAllNews($id){

        $reporter = User::findOrFail($id);

        $newsallbyreporter = NewsPost::where('status', 1)
                            ->where('user_id',$id)
                            ->paginate(12);

        $newsallbyreportercount = NewsPost::where('status', 1)
                            ->where('user_id',$id)
                            ->get();

        $newnewspost = NewsPost::orderBy('id','DESC')->limit(3)->get();

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(3)->get();

        // distinct() berguna agar tidak ada value yang sama itu tampil

        $tags = DB::table('news_posts')->select('tags')->limit(15)->distinct()->get();

        $tagArray = [];

        foreach ($tags as $tag) {

            $tagArray = array_merge($tagArray, explode(',', $tag->tags));

        }

        $uniqueTags = array_unique($tagArray);

        return view('frontend.reporter.reporter_news_post',compact('reporter','newspopular','uniqueTags','newsallbyreporter','newsallbyreportercount'));

    }

}
