@extends('layouts.twBase') @section('title','書籍削除') @section('main')
<!--  -->

@if(isset($record))

<div class="hero">
    <div class="hero-content flex-col lg:flex-row-reverse w-full">
        <div class="text-center lg:text-left w-fit">
            <h1 class="text-5xl font-bold">書籍削除</h1>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="/bookErase">投稿番号選択画面へ</a>
            </div>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="/profile">メニュー</a>
            </div>
        </div>

        <div class="card flex-shrink-0 w-full max-w-xl shadow-2xl bg-base-100">
            <form class="card-body" action="bookDelete" method="post">
                @csrf
                <div class="form-control">
                    <p class="text-lg pb-10">
                        以下の書籍を削除します。<br />よろしければ「削除」ボタンを押してください。
                    </p>
                    <p class="border-b pb-1">投稿番号</p>
                    <p class="pt-1 pb-5">
                        {{ $record->id }}
                    </p>
                    <p class="border-b pb-1">ISBNコード</p>
                    <p class="pt-1 pb-5">
                        {{ $record->ISBN }}
                    </p>
                    <p class="border-b pb-1">タイトル</p>
                    <input
                        class="pt-1 pb-5 focus:outline-none"
                        type="text"
                        name="bookName"
                        value="{{ $record->bookName }}"
                        readonly
                    />
                    <p class="border-b pb-1">作者</p>
                    <p class="pt-1 pb-5">
                        {{ $record->author }}
                    </p>

                    <input
                        hidden
                        type="number"
                        name="id"
                        value="{{ $record->id }}"
                        readonly
                    />
                    <input
                        hidden
                        type="text"
                        name="ISBN"
                        value="{{ $record->ISBN }}"
                        readonly
                    />

                    <input
                        hidden
                        type="text"
                        name="author"
                        value="{{ $record->author }}"
                        readonly
                    /><br />
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-primary" type="submit">削除</button>
                </div>
            </form>
        </div>
    </div>
</div>

@else

<div class="hero">
    <div class="hero-content flex-col lg:flex-row-reverse w-full">
        <div class="text-center lg:text-left w-fit">
            <h1 class="text-5xl font-bold">書籍削除</h1>
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
                    <label for="bookId" class="label-text">投稿番号</label>
                    <input
                        type="number"
                        name="id"
                        placeholder="投稿番号"
                        class="input input-bordered"
                        required
                    />
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-primary" type="submit">
                        データ表示
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endif @endsection
