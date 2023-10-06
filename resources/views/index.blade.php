

@extends('layouts.twBase')
@section('title','ホーム')



@section('css')
<link rel="stylesheet" href="/css/kadai_css.css">
@endsection

@section('logins')

{{-- 基本のページ 出来ることは新規登録かログインのみ--}}


@endsection

@section('main')
<!--  -->
<main class="mt-10">
    <div class="swiper-container w-screen h-screen">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide flex items-center justify-center">
                <img src="https://images4.alphacoders.com/132/1326368.png" alt="Image 1" class="object-cover w-full h-full">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide flex items-center justify-center">
                <img src="https://get.wallhere.com/photo/1920x1080-px-dark-galaxy-planet-space-stars-666724.jpg" alt="Image 2" class="object-cover w-full h-full">
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide flex items-center justify-center">
                <img src="https://example.com/your-image-file-3.svg" alt="Image 3" class="object-cover w-full h-full">
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide flex items-center justify-center">
                <img src="https://example.com/your-image-file-4.svg" alt="Image 4" class="object-cover w-full h-full">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</main>

@endsection

