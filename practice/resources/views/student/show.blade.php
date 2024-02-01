@extends('layouts.app')
@section('content')

@foreach ($students as $student)
<div class="container-fluid mt-20" style="margin:auto10px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                            <div class="media-body ml-3"> <div class="media-body ml-3"> {{ $student->grade }} </div>
                            <h4>{{ $student->grade }}</h4>
                            <span class="ml-auto">
                            <a href="{{route('student.edit', $student)}}"><x-button class="bg-teal-700 float-right">編集</x-button></a>
                            </span>
                            <div class="text-muted small"> <div class="text-muted small"> {{ $student->name }}</div>
                            <div class="text-muted small"> <div class="text-muted small"> {{ $student->address }}</div>
                    </div>
                </div>
                <div class="card-body">
                    <p> <p>{{$student->comment}} </p> </p>
                    <div>
                    @if($student->img_path)
                    </div>
                    <img src="{{ asset('storage/images/'.$student->img_path)}}" 
                    class="img-fluid mx1-auto d-block" style="height:300px;">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection