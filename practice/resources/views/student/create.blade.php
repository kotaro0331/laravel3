<?php

@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt4">管理ユーザー新規登録画面</h1>
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">ユーザー名</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="user name">
                </div>

                <div class="form-group">
                    <label for="email address">メールアドレス</label>
                    <input type="text" name="email address" class="form-control" id="email address" placeholder="email address">
                </div>

                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="text" name="password" class="form-control" id="password" placeholder="password">
                </div>

                <div class="form-group">
                    <label for="tpassword2">パスワード確認用</label>
                    <input type="text" name="password2" class="form-control" id="password2" placeholder="For password confirmation">
                </div>
                
                <button type="submit" class="btn btn-success">登録</button>
                <button type="submit" class="btn btn-success">戻る</button>
            </form>
        </div>
    </div>
</div>

@endsection
