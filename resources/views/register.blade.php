@extends('layouts.twBase')
@section('title','新規登録画面')
@section('header')
<!--  -->

@endsection

@section('main')
<!-- 新規登録画面 -->

<div class="hero" >
  <div class="hero-content flex-col lg:flex-row-reverse w-full">
    <div class="text-center lg:text-left w-fit">
      <h1 class="text-5xl font-bold">新規ユーザー登録</h1>
      <div class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4">
        <a href="login">ログイン画面へ</a>
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
            <span class="label-text">社員名</span>
          </label>
          <input type="text" name="name" id="name" placeholder="山田 太郎" class="input input-bordered" required/>
        </div>
        <div class="form-control">
          <label class="label">
            <span class="label-text">部署</span>
          </label>
            <label class="label justify-start"><input type="radio" class="radio mr-2" name="department_id" value="0">一般社員</label>
            <label class="label justify-start"><input type="radio" class="radio mr-2" name="department_id" value="1">システム部社員</label>
        </div>
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