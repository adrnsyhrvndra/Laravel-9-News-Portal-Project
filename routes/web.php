<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\LiveTvsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\NewsPostController;
use App\Http\Controllers\Frontend\ReviewsController;
use App\Http\Controllers\Backend\SeoSettingController;
use App\Http\Controllers\Backend\SitesettingController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\PhotoGalleryController;
use App\Http\Controllers\Backend\VideoGalleriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// FRONTEND PAGE ROUTE

Route::controller(IndexController::class)->group(function () {

    Route::get('/', 'Index')->name('home.index');
    Route::get('/news/details/{id}/{slug}', 'NewsDetails')->name('news.details');
    Route::get('/news/category/{id}/{slug}', 'CatWiseNews')->name('catwise.news');
    Route::get('/news/subcategory/{id}/{slug}', 'SubCatWiseNews')->name('sub.catwise.news');
    Route::get('/lang/change', 'ChangeLang')->name('changeLang');
    Route::post('/search', 'SearchByDate')->name('search-by-date');
    Route::post('/search/news', 'SearchNews')->name('news.search');
    Route::get('/reporter/all/news/{id}', 'RepporterAllNews')->name('reporter.all.news');

});

Route::controller(ReviewsController::class)->group(function () {

    Route::post('/reviews', 'StoreReview')->name('store.review');

});


// AUTH PAGE ROUTE

Route::controller(AdminController::class)->group(function () {

    Route::get('/admin/login', 'AdminLogin')->middleware(RedirectIfAuthenticated::class)->name('admin.login');
    Route::get('/admin/logout/page', 'AdminLogoutPage')->name('admin.logout.page');

});

Route::middleware('auth')->group(function () {

    Route::controller(UserController::class)->group(function () {

        Route::get('/dashboard', 'UserDashboard')->name('user.dashboard');
        Route::post('/user/profile/store', 'UserProfileStore')->name('user.store.profile');
        Route::get('/user/change/password', 'UserChangePassword')->name('user.change.password');
        Route::post('/user/change/password/store', 'UserChangePasswordStore')->name('user.change.password.store');
        Route::get('/user/logout', 'UserLogout')->name('user.logout');

    });

});

// ============================================
// ============================================
// ============================================
// ============================================
// ============================================
// BACKEND ADMIN ROUTE
// ============================================
// ============================================
// ============================================
// ============================================
// ============================================
// ============================================

Route::middleware('auth','role:admin')->group(function () {

    // Admin Controller

    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('/admin/profile', 'AdminProfile')->name('admin.profile');
        Route::get('/admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('/admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
        Route::post('/admin/profile/store', 'AdminProfileStore')->name('admin.store.profile');

    });

    // Category Controller

    Route::controller(CategoryController::class)->group(function () {

        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
        Route::post('/category/store', 'StoreCategory')->name('category.store');
        Route::post('/category/update', 'UpdateCategory')->name('category.update');

        Route::get('/subcategory/ajax/{category_id}','GetSubCategory');

    });

    // Sub Category Controller

    Route::controller(SubcategoryController::class)->group(function () {

        Route::get('/all/sub/category', 'AllSubCategory')->name('all.sub.category');
        Route::get('/add/sub/category', 'AddSubCategory')->name('add.sub.category');
        Route::get('/edit/sub/category/{id}', 'EditSubCategory')->name('edit.sub.category');
        Route::get('/delete/sub/category/{id}', 'DeleteSubCategory')->name('delete.sub.category');
        Route::post('/sub/category/store', 'StoreSubCategory')->name('sub.category.store');
        Route::post('/sub/category/update', 'UpdateSubCategory')->name('sub.category.update');

    });

    // Admin User Controller

    Route::controller(AdminController::class)->group(function () {

        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
        Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::get('/delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');
        Route::post('/store/admin', 'StoreAdmin')->name('admin.store');
        Route::post('/update/admin', 'UpdateAdmin')->name('admin.update');
        Route::get('/inactive/admin/{id}', 'InactiveAdminUser')->name('inactive.admin.user');
        Route::get('/active/admin/{id}', 'ActiveAdminUser')->name('active.admin.user');

    });

    // News Post Controller

    Route::controller(NewsPostController::class)->group(function () {

        Route::get('/all/news/post', 'AllNewsPost')->name('all.news.post');
        Route::get('/add/news/post', 'AddNewsPost')->name('add.news.post');
        Route::get('/edit/news/post/{id}', 'EditNewsPost')->name('edit.news.post');
        Route::get('/delete/news/post/{id}', 'DeleteNewsPost')->name('delete.news.post');
        Route::post('/store/news/post', 'StoreNewsPost')->name('news.post.store');
        Route::post('/update/news/post', 'UpdateNewsPost')->name('news.post.update');
        Route::get('/inactive/news/post/{id}', 'InactiveNewsPost')->name('inactive.news.post');
        Route::get('/active/news/post/{id}', 'ActiveNewsPost')->name('active.news.post');

    });

    // Banner Controller

    Route::controller(BannerController::class)->group(function () {

        Route::get('/all/banners', 'AllBanners')->name('all.banners');
        Route::get('/delete/news/post/{id}', 'DeleteNewsPost')->name('delete.news.post');
        Route::post('/update/banners', 'UpdateBanners')->name('banners.update');

    });

    // Photo Gallery Controller

    Route::controller(PhotoGalleryController::class)->group(function () {

        Route::get('/all/photo/gallery', 'AllPhotoGallery')->name('all.photo.gallery');
        Route::get('/add/photo/gallery', 'AddPhotoGallery')->name('add.photo.gallery');
        Route::get('/edit/photo/gallery/{id}', 'EditPhotoGallery')->name('edit.photo.gallery');
        Route::get('/delete/photo/gallery/{id}', 'DeletePhotoGallery')->name('delete.photo.gallery');
        Route::post('/store/photo/gallery', 'StorePhotoGallery')->name('store.photo.gallery');
        Route::post('/update/photo/gallery', 'UpdatePhotoGallery')->name('update.photo.gallery');

    });

    // Video Gallery Controller

    Route::controller(VideoGalleriesController::class)->group(function () {

        Route::get('/all/video/gallery', 'AllVideoGallery')->name('all.video.gallery');
        Route::get('/add/video/gallery', 'AddVideoGallery')->name('add.video.gallery');
        Route::get('/edit/video/gallery/{id}', 'EditVideoGallery')->name('edit.video.gallery');
        Route::get('/delete/video/gallery/{id}', 'DeleteVideoGallery')->name('delete.video.gallery');
        Route::post('/store/video/gallery', 'StoreVideoGallery')->name('store.video.gallery');
        Route::post('/update/video/gallery', 'UpdateVideoGallery')->name('update.video.gallery');

    });

    // Livetvs Controller

    Route::controller(LiveTvsController::class)->group(function () {

        Route::get('/edit/live/tv', 'LiveTvsGallery')->name('edit.live.tv');
        Route::post('/update/live/tv', 'UpdateLiveTvsGallery')->name('update.live.tv');

    });

    // Review Controller

    Route::controller(ReviewsController::class)->group(function () {

        Route::get('/pending/review', 'PendingReview')->name('pending.review');
        Route::get('/approve/review', 'ApproveReview')->name('approve.review');
        Route::get('/approve/review/update/{id}', 'ApproveReviewUpdate')->name('approve.review.update');
        Route::get('/approve/review/delete/{id}', 'ApproveReviewDelete')->name('approve.review.delete');

    });

    // SEO Controller

    Route::controller(SeoSettingController::class)->group(function () {

        Route::get('/seo/setting/update', 'SeoSettingUpdate')->name('seo.setting');
        Route::post('/seo/update', 'SeoUpdate')->name('seo.update');

    });

    // Permission Controller

    Route::controller(RoleController::class)->group(function () {

        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');
        Route::post('/store/permission', 'StoreVPermission')->name('store.permission');
        Route::post('/update/permission', 'UpdateVPermission')->name('update.permission');

    });

    // Roles Controller

    Route::controller(RoleController::class)->group(function () {

        Route::get('/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
        Route::get('/add/roles', 'AddRoles')->name('add.roles');
        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
        Route::get('/edit/roles/{id}', 'EditRoles')->name('edit.roles');
        Route::get('/edit/roles/permission/{id}', 'EditRolesPermission')->name('edit.roles.permission');
        Route::get('/delete/roles/{id}', 'DeleteRoles')->name('delete.roles');
        Route::get('/delete/roles/permission/{id}', 'DeleteRolesPermission')->name('delete.roles.permission');
        Route::post('/store/roles', 'StoreRoles')->name('store.roles');
        Route::post('/store/roles/permission', 'StoreRolesPermission')->name('store.roles.permission');
        Route::post('/update/roles', 'UpdateRoles')->name('update.roles');
        Route::post('/update/roles/permission/{id}', 'UpdateRolesPermission')->name('update.roles.permission');

    });

    // Site Setting Controller

    Route::controller(SitesettingController::class)->group(function () {

        Route::get('/edit/sitesetting/', 'EditSiteSetting')->name('edit.sitesetting');
        Route::post('/update/sitesetting', 'UpdateSiteSetting')->name('update.sitesetting');

    });

});

require __DIR__.'/auth.php';
