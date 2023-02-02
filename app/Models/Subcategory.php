<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Inner Join Ke Tabel Category

    public function category(){

        return $this->belongsTo(Category::class,'category_id','id');

    }

}
