@extends('layouts.twBase')
@section('title','書籍削除画面')

@section('main')

<div class="hero">
    <div class="hero-content flex-col lg:flex-row-reverse w-full">
        <div class="text-center lg:text-left w-fit">
            <h1 class="text-5xl font-bold">削除完了</h1>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="{{ route('bookErase' )}}">削除選択画面へ</a>
            </div>
            
        </div>

        <div class="card flex-shrink-0 w-full max-w-xl shadow-2xl bg-base-100">
            <form class="card-body" action="/profile" method="get">
                @csrf
                <div class="form-control">
                    <p class="text-lg pb-10">
                        以下の書籍を削除しました
                    </p>
                    <p class="border-b pb-1">投稿番号</p>
                    <p class="pt-1 pb-5">
                        {{ $id }}
                    </p>
                    <p class="border-b pb-1">ISBNコード</p>
                    <p class="pt-1 pb-5">
                        {{ $ISBN }}
                    </p>
                    <p class="border-b pb-1">タイトル</p>
                    <input
                        class="pt-1 pb-5 focus:outline-none"
                        type="text"
                        name="bookName"
                        value="{{ $bookName }}"
                        readonly
                    />
                    <p class="border-b pb-1">作者</p>
                    <p class="pt-1 pb-5">
                        {{ $author }}
                    </p>
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-primary" type="submit">完了</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
