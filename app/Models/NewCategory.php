<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    protected $table = 'new_categorys';
    protected $fillable = ['id', 'name', 'image','status'];
    public $timestams = false;
}
