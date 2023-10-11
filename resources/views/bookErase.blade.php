<<<<<<< HEAD
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
=======
@extends('layouts.twBase')
@section('title','書籍削除')

@section('header')
<!--  -->


@endsection

@section('main')
<!--  -->

<h1>以下の書籍を削除する</h1>
<a href="/profile">ホームへ</a>
{{-- @if(isset($record))
<a href="/bookErase">投稿番号選択画面へ</a>
<form action="/bookDelete" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $record->id }}"readonly><br>
    投稿番号 {{ $record->id }} <br>
    ISBNコード <input type="text" name="ISBN" value="{{ $record->ISBN }}" readonly>
    <br>
    タイトル <input type="text" name="bookName" value="{{ $record->bookName }}" readonly>
    <br>
    作者 <input type="text" name="author" value="{{ $record->author }}" readonly>
    <br>
    <input type="submit" value="削除"><br>
</form>

@else
<form action="/bookErase" method="post">
        @csrf
        投稿番号<input type="number" name="id" required>
        <input type="submit" value="データ表示">
    </form>
@endif --}}

<table>
    <tr><th>投稿番号</th><th>ISBNコード</th><th>タイトル</th><th>作者</th></tr>
    <form action="/bookDelete" method="post">
        @csrf
        @foreach($books as $book)
            <tr>
                <td><input type="text" name="id" value="{{ $book->id }}"></td>
                <td><input type="text" name="ISBN" value="{{ $book->ISBN}}" readonly></td>
                <td><input type="text" name="bookName" value="{{ $book->bookName}}" readonly></td>
                <td><input type="text" name="author" value="{{ $book->author}}" readonly></td>
                <td><input type="submit" value="削除" class="btn btn-primary"></td>
            </tr>
        @endforeach
    </form>
    </table>
@endsection
>>>>>>> ceed742c410f4fed8750f7a6229d1ef3245b1596
