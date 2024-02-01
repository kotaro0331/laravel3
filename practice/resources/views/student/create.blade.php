@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt-4">学生登録画面</h1>
            @if ($errors->any())
           <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            @if(empty($errors->first('image')))
            <li>画像ファイルがあれば、再度、選択してください。</li>
            @endif
           </ul>
           </div>
            @endif
            @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <form method="post" action="{{route('student.store')}}" enctype="multipart/form-data">
            @csrf

                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" placeholder="name">
                </div>
               
                <div class="form-group">
                    <label for="address">住所</label>
                    <input type="text" name="address" class="form-control" id="address" value="{{old('address')}}" placeholder="address">
                </div>

                <div class="form-group">
                    <label for="img_path">顔写真（1MBまで）</label>
                    <div class="col-md-6">
                        <input id="img_path" type="file" name="img_path">
                    </div>
                </div>
                
                <x-button type="submit" class="btn btn-success">登録</x-button>
                <x-button type="button" onclick="history.back()">戻る</x-button>
            </form>
        </div>
    </div>
</div>


@endsection

