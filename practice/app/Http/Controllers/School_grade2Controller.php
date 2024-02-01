<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School_grade2;

class School_grade2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $school_grade2s=School_Grade2::orderBy('created_at','desc')->get();
        return view('student.index2', compact('school_grade2s'));
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

        $school_grade2=new School_Grade2();
        $school_grade2->grade = $request->grade;
        $school_grade2->term = $request->term;
        $school_grade2->japanese = $request->japanese;
        $school_grade2->math = $request->math;
        $school_grade2->science = $request->science;
        $school_grade2->social_studies = $request->social_studies;
        $school_grade2->music = $request->music;
        $school_grade2->home_economics = $request->home_economics;
        $school_grade2->english = $request->english;
        $school_grade2->art = $request->art;
        $school_grade2->health_and_physical_education = $request->health_and_physical_education;
        $school_grade2->save();
        return back()->with('message','投稿を作成しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(School_Grade2 $school_grade2)
    {
        $school_grade2s=$school_grade2::orderBy('created_at','desc')->get();
        return view('student.show2', compact('school_grade2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School_Grade2 $school_grade2)
    {
        return view('student.edit2', compact('school_grade2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School_Grade2 $school_grade2)
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

        $school_grade2->grade = $inputs['grade'];
        $school_grade2->term = $inputs['term'];
        $school_grade2->japanese = $inputs['japanese'];
        $school_grade2->math = $inputs['math'];
        $school_grade2->science = $inputs['science'];
        $school_grade2->social_studies = $inputs['social_studies'];
        $school_grade2->music = $inputs['music'];
        $school_grade2->home_economics = $inputs['home_economics'];
        $school_grade2->english = $inputs['english'];
        $school_grade2->art = $inputs['art'];
        $school_grade2->health_and_physical_education = $inputs['health_and_physical_education'];
        $school_grade2->save();
        return redirect()->route('student.show2', $school_grade2)->with('message','投稿を更新しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
