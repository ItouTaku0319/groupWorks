<<<<<<< HEAD
@extends('layouts.twBase') @section('title','レビュー一覧') @section('main')
=======
@extends('layouts.twBase')
@section('title','レビュー一覧表示')

@section('header')
>>>>>>> ceed742c410f4fed8750f7a6229d1ef3245b1596
<!--  -->

<div class="hero container mx-auto">
    <div class="hero-content flex flex-col w-full gap-4">
        <div class="text-center lg:text-left w-full grid gap-10">
            <h1 class="text-5xl font-bold">書籍一覧</h1>
            <div class="flex justify-end w-full items-center">
                <div class="flex gap-4">
                    <!-- 書籍登録へ -->
                    <div
                        class="bg-white hover:bg-sky-400 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-sky-400 text-sky-400 aspect-square w-9 h-9"
                    >
                        <a
                            class="flex gap-2 items-center"
                            href="{{ route('bookRegister') }}"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-7 h-7"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                                />
                            </svg>
                        </a>
                    </div>
                    <!-- メニューへ -->
                    <div
                        class="bg-white hover:bg-sky-400 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-sky-400 text-sky-400 aspect-square w-9 h-9"
                    >
                        <a
                            class="flex gap-2 items-center"
                            href="{{ route('profile') }}"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card flex-shrink-0 w-full shadow-2xl bg-base-100">
            <table class="table">
                <tr>
                    <th>番号</th>
                    <th>ISBNコード</th>
                    <th>タイトル</th>
                    <th>作者</th>
                    <th>レビュー</th>
                    <th>削除</th>
                </tr>
                @foreach($records as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->ISBN }}</td>
                    <td>{{ $record->bookName }}</td>
                    <td>{{ $record->author }}</td>
                    <td class="flex gap-2">
                        <a
                            class="text-orange-400 hover:bg-orange-400 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-orange-400 h-9 px-2"
                            href="/reviewInsert?id={{ $record->id }}"
                            >新規</a
                        >
                        <a
                            class="text-orange-400 hover:bg-orange-400 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-orange-400 h-9 px-2"
                            href="/reviewList?id={{ $record->id }}"
                            >一覧</a
                        >
                    </td>
                    <td>
                        <form
                            action="/bookErase?id={{ $record->id }}"
                            method="post"
                        >
                            @csrf
                            <label
                                class="hover:bg-orange-400 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-orange-400 text-orange-400 aspect-square w-9 h-9"
                            >
                                <input type="submit" hidden />
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-7 h-7"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                    />
                                </svg>
                            </label>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<!--  -->

@php
    $recommendTotal = 0;
    $count = 0;
    foreach($reviews as $review){
    $recommendTotal += $review->recommend;
    $count++;
    }
    $recommendAverage = $recommendTotal / $count;
@endphp

<<<<<<< HEAD
<table class="table">
    <tr>
        <th>番号</th>
        <th>ISBNコード</th>
        <th>タイトル</th>
        <th>作者</th>
    </tr>
    <tr>
        <td>{{ $bookInfo->id }}</td>
        <td>{{ $bookInfo->ISBN }}</td>
        <td>{{ $bookInfo->bookName }}</td>
        <td>{{ $bookInfo->author }}</td>
        <td></td>
    </tr>
=======
<a href="/profile">ホームへ</a>
<table>
<tr><th>番号</th><th>ISBNコード</th><th>タイトル</th><th>作者</th><th>平均おすすめ度</th></tr>
<tr>
    <td>{{ $bookInfo->id }}</td>
    <td>{{ $bookInfo->ISBN }}</td>
    <td>{{ $bookInfo->bookName }}</td>
    <td>{{ $bookInfo->author }}</td>
    <td>{{ $recommendAverage }}</td>
>>>>>>> ceed742c410f4fed8750f7a6229d1ef3245b1596
</table>

<form method="POST" action="/reviewList">
    @csrf
    <input type="hidden" name="id" value="{{ $bookInfo->id }}" />
    <button type="submit" name="show_all_reviews">全てのレビューを表示</button>
    <button type="submit" name="show_my_reviews">自分のレビューのみを表示</button>
</form>

<<<<<<< HEAD
<table class="table">
    <tr>
        <th>ユーザー</th>
        <th>おすすめ度</th>
        <th>コメント</th>
        <th>コマンド</th>
    </tr>
    @foreach($reviews as $review)
=======
<table>
<tr><th>ユーザー</th><th>おすすめ度</th><th>コメント</th><th>コマンド</th></tr>

        

@foreach($reviews as $review)
>>>>>>> ceed742c410f4fed8750f7a6229d1ef3245b1596
    <tr>
        @foreach ($users as $user)
            @if ($user->id == $review->usersId)
                <td>{{ $user->name }}</td>
            @endif
        @endforeach
        
        <td>{{ $review->recommend }}</td>

        <td>{{ $review->comment }}</td>
        @if( $review->usersId == $userInfo )
        <td>
            <a href="/reviewEdit?id={{ $review->id }}">コメントの編集</a>
            <a href="/reviewErase?id={{ $review->id }}">コメントの削除</a>
        </td>
        @endif
    </tr>
    @endforeach
</table>

@endsection
