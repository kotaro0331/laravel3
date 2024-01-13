@extends('layouts.app')
@section('content')

<form method="student" action="{{route('student.store')}}" enctype="multipart/form-data">
      @csrf
<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt4">学生登録画面</h1>
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">名前</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="user name">
                </div>

                <div class="form-group">
                    <label for="address">住所</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="address">
                </div>

                <div class="form-group">
                    <label for="image">顔写真</label>
                    <div class="col-md-6">
                        <input id="image" type="file" name="image">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success">登録</button>
                <button type="submit" class="btn btn-success">戻る</button>
            </form>
        </div>
    </div>
</div>

@endsection

