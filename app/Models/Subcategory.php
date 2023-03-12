<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    // Inner Join Ke Tabel Category

    public function category(){

        return $this->belongsTo(Category::class,'category_id','id');

    }

}
