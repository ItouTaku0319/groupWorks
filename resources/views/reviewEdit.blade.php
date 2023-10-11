@extends('layouts.twBase')
@section('title','レビュー更新')


@section('css')
<link rel="stylesheet" href="css/starTest.css">

@section('header')
<!--  -->


@endsection

@section('main')
<!--  -->


<div class="hero">
    <div class="hero-content flex-col lg:flex-row-reverse w-full">
        <div class="text-center lg:text-left w-fit">
            <h1 class="text-5xl font-bold">レビュー更新</h1>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="{{ route('bookIndex') }}">書籍一覧表示</a>
            </div>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="/profile">メニュー</a>
            </div>
        </div>

        <div class="card flex-shrink-0 w-full max-w-xl shadow-2xl bg-base-100">
            <form class="card-body" action="reviewUpdate" method="post">
                @csrf
                <div class="form-control">
                    <p class="text-lg pb-10">
                        以下のコメントの更新をします。<br />よろしければ「更新」ボタンを押してください。
                    </p>
                    <input type="hidden" name="id" value="{{ $review->id}}">
                    <input type="hidden" name="bookId" value="{{ $review->bookId}}">
                    <label class="label">
                        <span class="label-text">おすすめ度</span>
                    </label>
                    <div class="rating">
                        <input
                            type="radio"
                            name="recommend"
                            value="1"
                            {{ $review->recommend == 1 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="2"
                            {{ $review->recommend == 2 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="3"
                            {{ $review->recommend == 3 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="4"
                            {{ $review->recommend == 4 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="5"
                            {{ $review->recommend == 5 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                        />
                    </div>
                </div>
                <div class="form-control">
                    <label for="comment" class="label">
                        <span class="label-text">コメント</span>
                    </label>
                    <textarea
                        name="comment"
                        id="comment"
                        cols="30"
                        rows="5"
                        class="textarea h-24 textarea-bordered textarea-lg p-2"
                        placeholder="コメントを入力してください"
                        required
                    >{{ $review->comment }}</textarea>
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-primary" type="submit">更新</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection