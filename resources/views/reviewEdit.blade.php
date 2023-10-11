@extends('layouts.twBase')
@section('title','レビュー更新')


@section('css')
<link rel="stylesheet" href="css/starTest.css">

@section('header')
<!--  -->


@endsection

@section('main')
<!--  -->

<h1>以下のコメントの更新</h1>
<a href="/profile">ホームへ</a>


<table class="table">
<tr><th>ユーザー</th><th>おすすめ度</th><th>コメント</th></tr>
<form action="/reviewUpdate" method="post">
    @csrf
@foreach($reviews as $review)
    <tr>
        <input type="hidden" name="id" value="{{ $review->id}}">
        <input type="hidden" name="bookId" value="{{ $review->bookId}}">
        <td><input type="text" name="usersId" value="{{ $review->usersId}}" readonly></td>

        <td>{{ $review->recommend }}

            {{-- <input type="radio" name="recommend" id="" value="1">1
            <input type="radio" name="recommend" id="" value="2">2
            <input type="radio" name="recommend" id="" value="3">3
            <input type="radio" name="recommend" id="" value="4">4
            <input type="radio" name="recommend" id="" value="5">5 --}}

            <div class="stars">
                <span>
                    <input id="review01" type="radio" name="recommend" value="5"><label for="review01">★</label>
                    <input id="review02" type="radio" name="recommend" value="4"><label for="review02">★</label>
                    <input id="review03" type="radio" name="recommend" value="3"><label for="review03">★</label>
                    <input id="review04" type="radio" name="recommend" value="2"><label for="review04">★</label>
                    <input id="review05" type="radio" name="recommend" value="1"><label for="review05">★</label>
                    </span>
                </div>
        </td>
        <td>
            <textarea name="comment" cols="30" rows="5">{{ $review->comment }}</textarea>
            
            <input type="submit" value="登録" class="btn btn-primary">
        </td>
    </tr>
@endforeach
</form>
</table>
@endsection