<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'title','content','category_id','featured','slug'
    ];

    // Delete no true
    protected $dates = ['deleted_at'];
    
    public function category()
    {
        return $this->belongTo('App\category');
    }

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }
}
