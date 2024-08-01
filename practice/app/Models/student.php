<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade',
        'name',
        'address',
        'img_path',
        'comment',
    ];

    public function studentAll(){
        $student = Student();
        $result = $student->getAll();
        return  view('student_view',['student_result' => $result]);
    }
    
    public function grade() {
        return $this->hasMany('App\Models\Grade');
    }
}
