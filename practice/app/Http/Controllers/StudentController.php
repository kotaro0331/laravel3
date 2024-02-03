<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    protected $namespace = 'App\Http\Controllers';

    public function postpage (Request $request){
        return view ('student.create');
       }
       
    public function savenew (Request $request){
        // 
       }

    public function index(Request $request)
    {
       
        $students=Student::orderBy('created_at','desc')->get();
        $user=auth()->user();
        return view('student.index', compact('students', 'user'));

        $articles = Student::orderBy('created_at', 'asc')->where(function ($query) {

            // 検索機能
            if ($search = request('search')) {
                $query->where('title', 'LIKE', "%{$search}%")->orWhere('tag1','LIKE',"%{$search}%")->orWhere('body','LIKE',"%{$search}%")
                ;
            }
        });
            }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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
            'name'=>'required|max:255',
            'address'=>'required|max:255',
            'img_path'=>'image|max:1024',
        ]);

        $student=new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        
        if (request('img_path')){
            $original = request()->file('img_path')->getClientOriginalName();
            $name = date('Ymd_His').'_'.$original;
            request()->file('img_path')->move('storage/images', $name);
            $student->img_path = $name;
        }

        $student->save();
        return back()->with('message','投稿を作成しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $students=Student::orderBy('created_at','desc')->get();
        $user=auth()->user();
        return view('student.show', compact('students', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $inputs=$request->validate([
            'id'=>'required|max:255',
            'grade'=>'required|max:255',
            'name'=>'required|max:255',
            'address'=>'required|max:255',
            'img_path'=>'image|max:1024',
            'comment'=>'required|max:255'
        ]);
        
        $student->id = $inputs['id'];
        $student->grade = $inputs['grade'];
        $student->name = $inputs['name'];
        $student->address = $inputs['address'];
        $student->comment = $inputs['comment'];
        
        if (request('img_path')){
            $original = request()->file('img_path')->getClientOriginalName();
            $name = date('Ymd_His').'_'.$original;
            $file=request()->file('img_path')->move('storage/images', $name);
            $student->img_path = $name;
        }

        $student->save();
        return back()->with('message','投稿を更新しました');
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
