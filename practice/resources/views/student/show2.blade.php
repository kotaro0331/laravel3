@extends('layouts.app')
@section('content')
{{-- 投稿一覧表示用のコード --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @foreach($grades as $grade)
    <div class="mx-4 sm:p-8">
                <div class="mt-4">
                    <div class="bg-white w-full  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500">
                        <div class="mt-4">
                            学年<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->grade }}</h1>
                            
                            <a href="{{route('grade.edit', $grade)}}"><x-button class="bg-teal-700 float-right">編集</x-button></a>
                            </h1><hr class="w-full">
                            <hr class="w-full">
                            学期<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->term }}</h1>
                            <hr class="w-full">
                            国語<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->japanese }}</h1>
                            <hr class="w-full">
                            数学<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->math }}</h1>
                            <hr class="w-full">
                            理科<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->science }}</h1>
                            <hr class="w-full">
                            社会<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->social_studies }}</h1>
                            <hr class="w-full">
                            音楽<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->music }}</h1>
                            <hr class="w-full">
                            家庭科<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->home_economics }}</h1>
                            <hr class="w-full">
                            英語<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->english }}</h1>
                            <hr class="w-full">
                            美術<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->art }}</h1>
                            <hr class="w-full">
                            保健体育<h1 class="text-lg text-gray-700 font-semibold hover:underline cursor-pointer"> {{ $grade->health_and_physical_education }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
