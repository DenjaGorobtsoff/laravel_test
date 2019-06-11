<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookbookRecipe extends Model
{
    protected $fillable = ['description', 'user_id'];

}
