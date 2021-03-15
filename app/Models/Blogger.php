<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogger extends Model
{
    protected $table = 'bloggers';
    protected $fillable = ['name','email', 'website', 'picture', 'description', 'category_id'];
}
