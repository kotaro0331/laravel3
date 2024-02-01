@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt-4">学生編集画面</h1>
            @if ($errors->any())
           <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            @if(empty($errors->first('img-path')))
            <li>画像ファイルがあれば、再度、選択してください。</li>
            @endif
           </ul>
           </div>
            @endif
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            
            <form method="post" action="{{route('student.update', $student)}}" enctype="multipart/form-data">
             @csrf
             @method('put')
                <div class="form-group">
                    <label for="id">学生ID</label>
                    <input type="text" name="id" class="form-control" id="id" value="{{old('id',$student->id)}}" placeholder="id">
                </div>

                <div class="form-group">
                    <label for="grade">学年</label>
                    <input type="text" name="grade" class="form-control" id="grade" value="{{old('grade',$student->grade)}}" placeholder="grade">
                </div>

                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{old('name',$student->name)}}" placeholder="name">
                </div>
               
                <div class="form-group">
                    <label for="address">住所</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{old('address',$student->address)}}" placeholder="address">
                </div>

                <div class="form-group">
                    @if($student->img_path)
                    </div>
                    <img src="{{ asset('storage/images/'.$student->img_path)}}" 
                    class="img-fluid mx-auto d-block" style="height:200px;">
                    @endif
                    <label for="img_path">顔写真（1MBまで）</label>
                    <div class="col-md-6">
                        <input id="img_path" type="file" name="img_path">
                    </div>
                </div>

                <div class="form-group">
                    <label for="comment">コメント</label>
                    <input type="text" name="comment" class="form-control" id="comment" value="{{old('comment',$student->comment)}}" placeholder="comment">
                </div>
                
                <x-button type="submit" class="btn btn-success">編集</x-button>
                <x-button type="button" onclick="history.back()">戻る</x-button>
            </form>
        </div>
    </div>
</div>
</form>

@endsection

