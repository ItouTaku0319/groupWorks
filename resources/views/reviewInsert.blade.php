@extends('layouts.twBase') @section('title','レビュー投稿') @section('header')
<!--  -->

@endsection @section('main')
<!--  -->

<div class="hero">
    <div class="hero-content flex-col lg:flex-row-reverse w-full max-w-3xl">
        <div class="text-center lg:text-left w-fit">
            <h1 class="text-5xl font-bold">コメントの登録</h1>
            <h1 class="text-xl pt-6 pb-8">{{$record->bookName}}</h1>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="{{ route('bookIndex') }}">書籍一覧</a>
            </div>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="/profile">メニュー</a>
            </div>
        </div>
        <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
            <form class="card-body" action="reviewShow" method="post">
                @csrf
                <div class="form-control">
                <input type="hidden" name="bookId" value="{{ $record->id }}">
                    <label class="label">
                        <span class="label-text">おすすめ度</span>
                    </label>
                    <div class="rating">
                        <input
                            type="radio"
                            name="recommend"
                            class="mask mask-star-2 bg-orange-400"
                            value="1"
                        />
                        <input
                            type="radio"
                            name="recommend"
                            class="mask mask-star-2 bg-orange-400"
                            value="2"
                            checked
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="3"
                            class="mask mask-star-2 bg-orange-400"
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="4"
                            class="mask mask-star-2 bg-orange-400"
                        />
                        <input
                            type="radio"
                            name="recommend"
                            class="mask mask-star-2 bg-orange-400"
                            value="5"
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
                    ></textarea>
                </div>
                <div class="form-control mt-6">
                    <button class="btn btn-primary" type="submit">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
