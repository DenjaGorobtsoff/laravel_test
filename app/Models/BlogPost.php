<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Blog\BaseController;

class BlogPost extends Model
{
    protected $primaryKey = 'post_id';

    protected $fillable = [
        'title',
        "slug",
        "content_raw",
        "content_html",
        "category_id",
        'user_id',
        'is_published'
    ];
}
