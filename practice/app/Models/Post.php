<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade',
        'name',
        'address',
        'img_path',
        'comment',
    ];

public function grades() {
    return $this->hasMany('App\Models\Grade');
}
}

