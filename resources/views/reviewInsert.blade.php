@extends('layouts.twBase')
@section('title','レビュー登録')

@section('css')
<link rel="stylesheet" href="css/starTest.css">

@section('header')
<!--  -->


@endsection

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