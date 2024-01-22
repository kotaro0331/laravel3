<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}"> 
        
         <!-- Styles -->
         <link rel="stylesheet" href="{{ asset('css/app.css') }}">

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
    <div class="wrapper">

    <div class="header">
    <h1>学生管理システム課題</h1>
    </div>

    <div class="sidebar">
    <p>サイドバー</p>
    </div>

    <div class="content">
    <p>メインコンテンツ</p>
    </div>

    <div class="footer">

    </div>

            <!-- Page Content -->
            <main class="py-4">
              @yield('content')
            </main>
        </div>
    </body>
</html>
