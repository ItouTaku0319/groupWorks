@extends('layouts.twBase')
@section('title','ログインページ')
@section('main')
<!-- ログイン画面 -->
<div class="hero" >
  <div class="hero-content flex-col lg:flex-row-reverse w-full">
    <div class="text-center lg:text-left w-fit">
      <h1 class="text-5xl font-bold">ログイン</h1>
      <div class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4">
        <a href="register">新規登録画面へ</a>
      </div>
      <div class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4">
          <a href="/">ホームへ</a>
      </div>
    </div>
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <form class="card-body" action="" method="post">
      @csrf
        <div class="form-control">
          <label class="label">
            <span class="label-text">メールアドレス</span>
          </label>
          <input type="email" name="email" id="email" placeholder="email" class="input input-bordered" required/>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">パスワード</span>
          </label>
          <input type="password" name="password" id="password" placeholder="password" class="input input-bordered" required />
        </div>
        <div class="form-control mt-6">
            <button class="btn btn-primary" type="submit">送信</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection