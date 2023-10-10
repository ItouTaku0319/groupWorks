@extends('layouts.base')
@section('title','書籍削除')

@section('header')
<!--  -->


@endsection

@section('main')
<!--  -->

<h1>以下の書籍を削除する</h1>
<a href="/profile">ホームへ</a>
{{-- @if(isset($record))
<a href="/bookErase">投稿番号選択画面へ</a>
<form action="/bookDelete" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $record->id }}"readonly><br>
    投稿番号 {{ $record->id }} <br>
    ISBNコード <input type="text" name="ISBN" value="{{ $record->ISBN }}" readonly>
    <br>
    タイトル <input type="text" name="bookName" value="{{ $record->bookName }}" readonly>
    <br>
    作者 <input type="text" name="author" value="{{ $record->author }}" readonly>
    <br>
    <input type="submit" value="削除"><br>
</form>

@else
<form action="/bookErase" method="post">
        @csrf
        投稿番号<input type="number" name="id" required>
        <input type="submit" value="データ表示">
    </form>
@endif --}}

<table>
    <tr><th>投稿番号</th><th>ISBNコード</th><th>タイトル</th><th>作者</th></tr>
    <form action="/bookDelete" method="post">
        @csrf
        @foreach($books as $book)
            <tr>
                <td><input type="text" name="id" value="{{ $book->id }}"></td>
                <td><input type="text" name="ISBN" value="{{ $book->ISBN}}" readonly></td>
                <td><input type="text" name="bookName" value="{{ $book->bookName}}" readonly></td>
                <td><input type="text" name="author" value="{{ $book->author}}" readonly></td>
                <td><input type="submit" value="削除" class="btn btn-primary"></td>
            </tr>
        @endforeach
    </form>
    </table>
@endsection
