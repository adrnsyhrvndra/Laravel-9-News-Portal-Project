<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model{

    use HasFactory;

    protected $guarded = [];

    public function NewsPostRelation(){

        return $this->belongsTo(NewsPost::class,'news_id','id');

    }

    public function UserRelation(){

        return $this->belongsTo(User::class,'user_id','id');

    }

}
