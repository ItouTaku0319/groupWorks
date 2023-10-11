@extends('layouts.twBase')
@section('title','レビュー登録画面')

@section('header')
<!--  -->


@endsection

@section('main')
<!--  -->
<h1>以下のレビューを登録しました</h1>
<table class="table">
<tr><th>おすすめ度</th><th>コメント</th></tr>
<tr>
    <td>{{ $recommend }}</td>
    <td>{{ $comment }}</td>
</tr>
</table>
<a href="/profile">ホームへ</a>
@endsection