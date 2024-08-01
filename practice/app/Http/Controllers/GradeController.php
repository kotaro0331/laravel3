<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Post;

class GradeController extends Controller
{
    protected $namespace = 'App\Http\Controllers';

    public function postpage (Request $request){
        return view ('student.grade');
       }
       
    public function savenew (Request $request){
        // 
       }
    public function index()
    {
        $grades=Grade::orderBy('created_at','desc')->get();
        return view('student.index2', compact('grades','post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.grade');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs=$request->validate([
            'grade'=>'required|max:255',
            'term'=>'required|max:255',
            'japanese'=>'required|max:255',
            'math'=>'required|max:255',
            'science'=>'required|max:255',
            'social_studies'=>'required|max:255',
            'music'=>'required|max:255',
            'home_economics'=>'required|max:255',
            'english'=>'required|max:255',
            'art'=>'required|max:255',
            'health_and_physical_education'=>'required|max:255',
        ]);

        $grade=new grade();
        $grade->grade = $request->grade;
        $grade->term = $request->term;
        $grade->japanese = $request->japanese;
        $grade->math = $request->math;
        $grade->science = $request->science;
        $grade->social_studies = $request->social_studies;
        $grade->music = $request->music;
        $grade->home_economics = $request->home_economics;
        $grade->english = $request->english;
        $grade->art = $request->art;
        $grade->health_and_physical_education = $request->health_and_physical_education;
        $grade->save();
        return back()->with('message','投稿を作成しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        $grades=Grade::orderBy('created_at','desc')->get();
        return view('student.show2', compact('grades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('student.edit2', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $inputs=$request->validate([
            'grade'=>'required|max:255',
            'term'=>'required|max:255',
            'japanese'=>'required|max:255',
            'math'=>'required|max:255',
            'science'=>'required|max:255',
            'social_studies'=>'required|max:255',
            'music'=>'required|max:255',
            'home_economics'=>'required|max:255',
            'english'=>'required|max:255',
            'art'=>'required|max:255',
            'health_and_physical_education'=>'required|max:255',
        ]);

        $grade->grade = $inputs['grade'];
        $grade->term = $inputs['term'];
        $grade->japanese = $inputs['japanese'];
        $grade->math = $inputs['math'];
        $grade->science = $inputs['science'];
        $grade->social_studies = $inputs['social_studies'];
        $grade->music = $inputs['music'];
        $grade->home_economics = $inputs['home_economics'];
        $grade->english = $inputs['english'];
        $grade->art = $inputs['art'];
        $grade->health_and_physical_education = $inputs['health_and_physical_education'];
        $grade->save();
        return back()->with('message','投稿を更新しました');
      
    
    }
   
    
}
