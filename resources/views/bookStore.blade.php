@extends('layouts.twBase')
<<<<<<< HEAD
@section('title','')
=======
@section('title','データ登録画面')
>>>>>>> ceed742c410f4fed8750f7a6229d1ef3245b1596

@section('header')
<!--  -->


@endsection

@section('main')
<!--  -->
<h1>以下のデータを登録しました</h1>
<table class="table">
    <tr><th>ISBNコード</th><th>タイトル</th><th>作者</th></tr>
    <tr>
        <td>{{ $ISBN }}</td>
        <td>{{ $bookname }}</td>
        <td>{{ $author }}</td>
    </tr>
</table>
<br>
<a href="/profile">ホームへ</a>
@endsection