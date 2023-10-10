@extends('layouts.twBase')
@section('title','ログインページ')

@section('header')
<!--  -->

@endsection

@section('main')
<!-- ログイン画面 -->
<h1>ログイン画面</h1>
    <form action="" method="post">
        @csrf

        {{-- <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
        <input type="email" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400" placeholder="exsample@exsample.com"> --}}

        <label for="email">メールアドレス</label>
        <input type="email" name="email" id="email">


        <br>
        <label for="password">パスワード</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">送信</button>
    </form>
    <p><a href="register">新規登録画面へ</a></p>
    <p><a href="/">ホームへ</a></p>
    @endsection