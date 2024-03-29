@extends('layouts.app')
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@foreach ($posts as $post)
    <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="mt-4">
                            学年<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $post->grade }}</h1>
                            </h1><hr class="w-full">
                            <hr class="w-full">
                            名前<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $post->name }}</h1>
                            <hr class="w-full">
                            住所<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $post->address }}</h1>
                            <hr class="w-full">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection