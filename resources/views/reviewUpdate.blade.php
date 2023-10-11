@extends('layouts.twBase')
@section('title','レビュー更新画面')
@section('main')
<!--  -->
<div class="hero">
    <div class="hero-content flex-col lg:flex-row-reverse w-full">
        <div class="text-center lg:text-left w-fit">
            <h1 class="text-5xl font-bold">更新完了</h1>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="{{ route('bookIndex') }}">書籍一覧表示</a>
            </div>
            <div
                class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4"
            >
                <a href="/reviewEdit?id={{ $id }}">更新画面表示</a>
            </div>
        </div>

        <div class="card flex-shrink-0 w-full max-w-xl shadow-2xl bg-base-100">
            <form class="card-body" action="{{ route('bookIndex') }}" method="get">
                @csrf
                <div class="form-control">
                    <p class="text-lg pb-10">
                        以下のコメントを更新しました
                    </p>
                    <p class="border-b pb-1">おすすめ度</p>
                    <div class="rating pt-1 pb-5">
                        <input
                            type="radio"
                            name="recommend"
                            value="1"
                            {{ $recommend == 1 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                            disabled
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="2"
                            {{ $recommend == 2 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                            disabled
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="3"
                            {{ $recommend == 3 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                            disabled
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="4"
                            {{ $recommend == 4 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                            disabled
                        />
                        <input
                            type="radio"
                            name="recommend"
                            value="5"
                            {{ $recommend == 5 ? 'checked' : '' }}
                            class="mask mask-star-2 bg-orange-400"
                            disabled
                        />
                    </div>
                    <p class="border-b pb-1">コメント</p>
                    <p class="pt-1 pb-5">
                        {{ $comment }}
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