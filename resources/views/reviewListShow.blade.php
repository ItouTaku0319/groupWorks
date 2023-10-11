@extends('layouts.twBase') @section('title','レビュー一覧') @section('main')
<!--  -->

<div class="hero container mx-auto">
    <div class="hero-content flex flex-col w-full gap-4">
        <div class="text-center lg:text-left w-full grid gap-10">
            <h1 class="text-5xl font-bold">レビュー一覧</h1>
            <div class="flex justify-end w-full items-center">
                <div class="flex gap-4">
                    <!-- レビュー一覧 -->
                    <div
                        class="bg-white hover:bg-sky-400 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-sky-400 text-sky-400 aspect-square w-9 h-9"
                    >
                        <a
                            class="flex gap-2 items-center"
                            href="{{ route('profile') }}"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                          </svg>
                          
                        </a>
                    </div>
                    <!-- メニューへ -->
                    <div
                        class="bg-white hover:bg-sky-400 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-sky-400 text-sky-400 aspect-square w-9 h-9"
                    >
                        <a
                            class="flex gap-2 items-center"
                            href="{{ route('bookIndex') }}"
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
                </tr>
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->ISBN }}</td>
                    <td>{{ $book->bookName }}</td>
                    <td>{{ $book->author }}</td>
                </tr>
            </table>
        </div>


        <div class="card flex-shrink-0 w-full shadow-2xl bg-base-100">
            <table class="table">
                <tr>
                    <th>名前</th>
                    <th>おすすめ度</th>
                    <th>コメント</th>
                </tr>
                @foreach($reviews as $review)
                @if ( $review->usersId == $userInfo )
                <tr class="text-sky-400 hover:font-bold hover:bg-sky-400 hover:text-white" onclick="window.location='/reviewEdit?id={{ $review->id }}';">
                    @foreach ($users as $user )
                        @if ($user->id == $review->usersId)
                            <td>{{ $user->name }}</td>
                        @endif
                    @endforeach
                    <td>
                        <div class="rating">
                            <input
                                type="radio"
                                name="recommend"
                                value="1"
                                {{ $review->recommend == 1 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                            <input
                                type="radio"
                                name="recommend"
                                value="2"
                                {{ $review->recommend == 2 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                            <input
                                type="radio"
                                name="recommend"
                                value="3"
                                {{ $review->recommend == 3 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                            <input
                                type="radio"
                                name="recommend"
                                value="4"
                                {{ $review->recommend == 4 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                            <input
                                type="radio"
                                name="recommend"
                                value="5"
                                {{ $review->recommend == 5 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                        </div>
                    </td>
                    <td>{{ $review->comment }}</td>
                </tr>
                @else
                <tr>
                    @foreach ($users as $user )
                        @if ($user->id == $review->usersId)
                            <td>{{ $user->name }}</td>
                        @endif
                    @endforeach
                    <td>
                        <div class="rating">
                            <input
                                type="radio"
                                name="recommend"
                                value="1"
                                {{ $review->recommend == 1 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                            <input
                                type="radio"
                                name="recommend"
                                value="2"
                                {{ $review->recommend == 2 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                            <input
                                type="radio"
                                name="recommend"
                                value="3"
                                {{ $review->recommend == 3 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                            <input
                                type="radio"
                                name="recommend"
                                value="4"
                                {{ $review->recommend == 4 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                            <input
                                type="radio"
                                name="recommend"
                                value="5"
                                {{ $review->recommend == 5 ? 'checked' : '' }}
                                class="mask mask-star-2 bg-orange-400"
                                disabled
                            />
                        </div>
                    </td>
                    <td>{{ $review->comment }}</td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>

        

    </div>
</div>

<!--  -->
{{-- 
@php
    $recommendTotal = 0;
    $count = 0;
    foreach($reviews as $review){
    $recommendTotal += $review->recommend;
    $count++;
    }
    $recommendAverage = $recommendTotal / $count;
@endphp

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
</table>

<form method="POST" action="/reviewList">
    @csrf
    <input type="hidden" name="id" value="{{ $bookInfo->id }}" />
    <button type="submit" name="show_all_reviews">全てのレビューを表示</button>
    <button type="submit" name="show_my_reviews">自分のレビューのみを表示</button>
</form>

<table class="table">
    <tr>
        <th>ユーザー</th>
        <th>おすすめ度</th>
        <th>コメント</th>
        <th>コマンド</th>
    </tr>
    @foreach($reviews as $review)
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
</table> --}}

@endsection
