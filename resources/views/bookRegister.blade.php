@extends('layouts.twBase') @section('title','書籍登録画面') @section('main')
<!--  -->
<div class="hero">
    <div class="hero-content flex-col lg:flex-row-reverse w-full">
        <div class="text-center lg:text-left w-fit">
            <h1 class="text-5xl font-bold">書籍新規登録</h1>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="/profile">メニュー</a>
            </div>
        </div>
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <form class="card-body" action="" method="post">
                @csrf
                <div class="form-control">
                    <label for="ISBN" class="label-text">ISBNコード</label>
                    <input
                        type="text"
                        name="ISBN"
                        id="ISBN"
                        placeholder="ISBN"
                        class="input input-bordered"
                        required
                        value="{{ old('ISBN') }}"
                    />
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-primary" type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
