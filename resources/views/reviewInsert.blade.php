<<<<<<< HEAD
@extends('layouts.twBase') @section('title','レビュー投稿') @section('header')
=======
@extends('layouts.twBase')
@section('title','レビュー登録')

@section('css')
<link rel="stylesheet" href="css/starTest.css">

@section('header')
>>>>>>> ceed742c410f4fed8750f7a6229d1ef3245b1596
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
                        />
                        <input
                            type="radio"
                            name="recommend"
                            class="mask mask-star-2 bg-orange-400"
                            checked
                        />
                        <input
                            type="radio"
                            name="recommend"
                            class="mask mask-star-2 bg-orange-400"
                        />
                        <input
                            type="radio"
                            name="recommend"
                            class="mask mask-star-2 bg-orange-400"
                        />
                        <input
                            type="radio"
                            name="recommend"
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
<<<<<<< HEAD
=======

@section('main')
<!--  -->

{{-- @foreach ($users as $user)
{{-- @if ($user->id == )
    
@endif
<p>{{ $user->id }}</p>
@endforeach --}}

<h1>コメントの登録</h1>
<a href="/profile">ホームへ</a>

<form action="/reviewShow" method="post">
@csrf
    {{-- <input type="radio" name="recommend" id="" value="1">1
    <input type="radio" name="recommend" id="" value="2">2
    <input type="radio" name="recommend" id="" value="3">3
    <input type="radio" name="recommend" id="" value="4">4
    <input type="radio" name="recommend" id="" value="5">5 --}}
    {{-- <input type="hidden" name="userId" {{  }}> --}}
    <div class="stars">
        <span>
          <input id="review01" type="radio" name="recommend" value="5"><label for="review01">★</label>
          <input id="review02" type="radio" name="recommend" value="4"><label for="review02">★</label>
          <input id="review03" type="radio" name="recommend" value="3"><label for="review03">★</label>
          <input id="review04" type="radio" name="recommend" value="2"><label for="review04">★</label>
          <input id="review05" type="radio" name="recommend" value="1"><label for="review05">★</label>
        </span>
      </div>

    <br>
    <label for="comment" class="comment" >コメント</label>
    <textarea name="comment" cols="30" rows="5"></textarea>
    <input type="hidden" name="bookId" value="{{ $record->id }}">
    <input type="hidden" name="usersId" value="{{ $userInfo }}">
    <input type="submit" value="登録" class="btn btn-primary">
</form>
@endsection
>>>>>>> ceed742c410f4fed8750f7a6229d1ef3245b1596
