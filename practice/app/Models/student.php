<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'user_id',
        'img_path',
    ];

public function school_grades() {
    return $this->hasMany('App\Models\School_grade');
}
}