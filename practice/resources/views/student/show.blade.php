@extends('layouts.app')
@section('content')


<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@foreach ($posts as $post)
    <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="mt-4">
                            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $post->grade }}</h1>
                            
                            <a href="{{route('post.edit', $post)}}"><x-button class="bg-teal-700 float-right">編集</x-button></a>
                            </h1><hr class="w-full">
                            <hr class="w-full">
                            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $post->name }}</h1>
                            <hr class="w-full">
                            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $post->address }}</h1>
                            <hr class="w-full">

                            </div>
                     <div class="card-body">
                    <p> <p>{{$post->comment}} </p> </p>
                    <div>
                    @if($post->img_path)
                    </div>
                    <img src="{{ asset('storage/images/'.$post->img_path)}}" 
                    class="img-fluid mx1-auto d-block" style="height:300px;">
                    @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection