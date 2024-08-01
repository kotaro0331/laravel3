<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(post $post)
    {
        $posts=post::orderBy('created_at','desc')->get();
        $user=auth()->user();
        return view('student.test',compact('posts', 'user'),[
            'post' => $post,
        ]
    
    ); 
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

        $post=new Post();
        $post->name = $request->name;
        $post->address = $request->address;
        
        if (request('img_path')){
            $original = request()->file('img_path')->getClientOriginalName();
            $name = date('Ymd_His').'_'.$original;
            request()->file('img_path')->move('storage/images', $name);
            $post->img_path = $name;
        }

        $post->save();
        return back()->with('message','投稿を作成しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        $posts=post::orderBy('created_at','desc')->get();
        $user=auth()->user();
        return view('student.show', compact('posts', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('student.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $inputs=$request->validate([
            'id'=>'required|max:255',
            'grade'=>'required|max:255',
            'name'=>'required|max:255',
            'address'=>'required|max:255',
            'img_path'=>'image|max:1024',
            'comment'=>'required|max:255'
        ]);
        
        $post->id = $inputs['id'];
        $post->grade = $inputs['grade'];
        $post->name = $inputs['name'];
        $post->address = $inputs['address'];
        $post->comment = $inputs['comment'];
        
        if (request('img_path')){
            $original = request()->file('img_path')->getClientOriginalName();
            $name = date('Ymd_His').'_'.$original;
            $file=request()->file('img_path')->move('storage/images', $name);
            $post->img_path = $name;
        }

        $post->save();
        return back()->with('message','投稿を更新しました');
    }

}
