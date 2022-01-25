<?php

namespace App\Models;

use App\Mail\PostStore;
use App\Mail\UpdatePost;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $table = 'post';
    // protected $fillable = ['name','description'];
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }

    protected static function booted()
    {
        // static::created(function ($post) {
        //     Mail::to("waiyan@gmail.com")->send(new PostStore($post));
        // });
        
        // static::updated(function ($post) {
        //     Mail::to("waiyan@gmail.com")->send(new UpdatePost($post));
        // });

    }
}
