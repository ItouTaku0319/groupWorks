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
            @if(session('error'))
                <div class="alert bg-red-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('error') }}</span>
                </div>
            @endif
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
