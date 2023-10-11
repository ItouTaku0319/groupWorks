@extends('layouts.twBase')

@section('title','ログインページ')

@section('header')
<!--  -->

  
@endsection

@section('main')
<!-- プロフィール画面 -->

<div class="hero">
  <div class="hero-content flex-col lg:flex-row-reverse w-full">
    <div class="text-center lg:text-left w-fit">
      <h1 class="text-5xl font-bold">{{\Illuminate\Support\Facades\Auth::user()->name}}</h1>
      <p class="text-4xl">{{ \Illuminate\Support\Facades\Auth::user()->department_name }}</p>
      <div class="p-2 bg-orange-400 hover:bg-transparent text-white hover:text-orange-400 border border-orange-400 w-fit transition rounded-md my-4">
          <a href="/">トップへ</a>
      </div>
    </div>
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
        <div class="card-body text-2xl gap-6">
            <div class="hover:bg-sky-400 p-3 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-sky-400">
                <a class="flex gap-2 items-center" href="{{ route('bookIndex') }}" >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <p>書籍一覧へ</p>
                </a>
            </div>
        @if(\Illuminate\Support\Facades\Auth::user()->department_id == 1)
            {{-- システム部社員 --}}
            <div class="hover:bg-sky-400 p-3 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-sky-400">
                <a class="flex gap-2 items-center" href="{{ route('bookRegister') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                    書籍登録へ
                </a>
            </div>
            <div class="hover:bg-sky-400 p-3 rounded-md grid place-items-center hover:text-amber-50 transition border-2 border-sky-400">
                <a class="flex gap-2 items-center" href="{{ route('bookErase' )}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                    書籍削除へ
                </a>
            </div>
        @else
            {{-- 一般社員 --}}
        @endif
        </div>
    </div>
  </div>
</div>


@endsection