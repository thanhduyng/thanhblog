<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageNew extends Model
{
    protected $table = 'image_news';
    public function new() {
    	return $this->belongsTo('App\Models\News', 'id_new', 'id');
    }
}
