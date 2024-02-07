@extends('layouts.app')
@section('content')

<form class="form-inline my-2 my-lg-0 ml-2">
      <div class="form-group">
      <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="キーワードを入力" aria-label="検索...">
      </div>
      <input type="submit" value="検索" class="btn btn-info">
  </form>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @foreach ($posts as $post)
            <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="mt-4">
                            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $post->grade }}</h1>
                            <hr class="w-full">
                            <h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $post->name }}</h1>
                            <hr class="w-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endsection
