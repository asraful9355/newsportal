<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = ['title','slug','featured','category_id','content','tags'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }


    public function tags(){
       return $this->belongsToMany('App\Models\Tag');
    }
    protected $dates = ['deleted_at'];
     
}
