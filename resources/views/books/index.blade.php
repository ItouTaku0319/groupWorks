{{-- 本の全件表示 --}}
@extends('layouts.twBase')
@section('title','書籍一覧表示')

@section('header')
<!--  -->


@endsection

@section('main')
<!--  -->
<h1>全件表示</h1>
<a href="/profile">ホームへ</a>

<table class="table">
<tr><th>番号</th><th>ISBNコード</th><th>タイトル</th><th>作者</th><th>おすすめ</th></tr>
@foreach($records as $record)
<tr>
    <td>{{ $record->id }}</td>
    <td>{{ $record->ISBN }}</td>
    <td>{{ $record->bookName }}</td>
    <td>{{ $record->author }}</td>
    <td>
        <a href="/reviewInsert?id={{ $record->id }}">新規</a>

        <a href="/reviewList?id={{ $record->id }}">一覧</a>

        {{-- <a href="/reviewUserList?id={{ $record->id }}">自分の投稿</a> --}}
        
        

        @if(\Illuminate\Support\Facades\Auth::user()->department_id === 1)
    {{-- <a href="{{ route('bookErase' )}}">書籍削除</a> --}}

    <a href="/bookErase?id={{ $record->id }}">書籍削除</a>
    @endif
    </td>
    
    
</tr>
@endforeach
</table>
<br>

@endsection
