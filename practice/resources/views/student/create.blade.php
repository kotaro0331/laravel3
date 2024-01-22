@extends('layouts.app')
@section('content')

<form method="student" action="{{route('student.store')}}" enctype="multipart/form-data">
     @csrf
<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt-4">学生登録画面</h1>
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                </div>
               
                <div class="form-group">
                    <label for="address">住所</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="address">
                </div>

                <div class="form-group">
                    <label for="img_path">顔写真</label>
                    <div class="col-md-6">
                        <input id="img_path" type="file" name="img_path">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success">登録</button>
                <button type="submit" class="btn btn-success">戻る</button>
            </form>
        </div>
    </div>
</div>

@endsection

