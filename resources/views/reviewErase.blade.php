@extends('layouts.twBase')
@section('title','レビュー削除')

@section('header')
<!--  -->


@endsection

@section('main')
<!--  -->
<h1>以下のコメントの削除</h1>
<a href="/profile">ホームへ</a>

<table>
<tr><th>ユーザー</th><th>おすすめ度</th><th>コメント</th></tr>
<form action="/reviewDelete" method="post">
    @csrf
    @foreach($reviews as $review)
        <tr>
            <input type="hidden" name="id" value="{{ $review->id}}">
            <input type="hidden" name="bookId" value="{{ $review->bookId}}">
            <td><input type="text" name="usersId" value="{{ $review->usersId}}" readonly></td>
            <td><input type="text" name="recommend" value="{{ $review->recommend }}"></td>
            <td><input type="text" name="comment" value="{{ $review->comment }}"></td>
            <td><input type="submit" value="削除" class="btn btn-primary"></td>
        </tr>
    @endforeach
</form>
</table>
@endsection