<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banners;
use App\Http\Requests\StoreBannersRequest;
use App\Http\Requests\UpdateBannersRequest;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBannersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function show(Banners $banners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function edit(Banners $banners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannersRequest  $request
     * @param  \App\Models\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannersRequest $request, Banners $banners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banners $banners)
    {
        //
    }
}
