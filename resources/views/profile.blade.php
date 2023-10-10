

@extends('layouts.twBase')
{{-- 
@extends('layouts.base')
    --}}

@section('title','プロフィール')

@section('header')
<!--  -->

  
@endsection

@section('main')
<!-- プロフィール画面 -->
{{-- デパートメントidが1ならシステム部社員 --}}
{{-- そうでないなら一般社員 --}}
@if(\Illuminate\Support\Facades\Auth::user()->department_id === 1)
    <p class="text-6xl">あなたは{{ \Illuminate\Support\Facades\Auth::user()->department_name }}です</p>
    
    <br>
    <a href="{{ route('bookRegister') }}" >書籍登録へ</a>
    {{-- <a href="{{ route('bookErase' )}}">書籍削除へ</a> --}}
@else
    あなたは{{ \Illuminate\Support\Facades\Auth::user()->department_name }}です
@endif
<br>
{{\Illuminate\Support\Facades\Auth::user()->name}}でログインしています。

<form action="{{ route('user.logout') }}" method="post"
class="">
    @csrf
    <button>ログアウト</button>
</form>
<a href=""></a>
<a href="{{ route('bookIndex') }}">書籍一覧表示</a>



@endsection