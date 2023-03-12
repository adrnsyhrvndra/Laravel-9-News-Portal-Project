<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsPost extends Model{

    use HasFactory,SoftDeletes;

    protected $guarded = [];

    // Inner Join Ke Tabel Category

    public function categoryRelation(){

        return $this->belongsTo(Category::class,'category_id','id');

    }

    // Inner Join Ke Tabel Sub Category

    public function subcategoryRelation(){

        return $this->belongsTo(Subcategory::class,'subcategory_id','id');

    }

    // Inner Join Ke Tabel User

    public function userRelation(){

        return $this->belongsTo(User::class,'user_id','id');

    }

}
