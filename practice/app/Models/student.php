<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'grade',
        'name',
        'address',
        'id',
        'img_path',
        'comment'
    ];

public function school_grades() {
    return $this->hasMany('App\Models\School_grade');
}
}