

@extends('layouts.twBase')
@section('title','ホーム')



@section('css')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
@endsection

@section('logins')
{{-- 基本のページ 出来ることは新規登録かログインのみ--}}
@endsection

@section('main')
{{-- 
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
--}}

    <main class="mt-10 relative w-screen h-screen">
        <div x-data="slideshow()" x-init="init()" class="relative w-full h-full">
            <template x-for="(image, index) in images" :key="index">
                <div class="absolute inset-0 w-full h-full">
                    <img :src="image.src" :alt="image.alt" :class="{ 'opacity-0': index !== activeIndex }" class="transition-opacity duration-1000 ease-in-out absolute inset-0 w-full h-full object-cover"/>
                    <h2 x-show="index === activeIndex" x-transition:enter="transition ease-out duration-1000 transform" x-transition:enter-start="opacity-0 -translate-y-full" x-transition:enter-end="opacity-100 translate-y-0" class="absolute top-0 left-1/2 transform -translate-x-1/2 mt-10 text-white text-4xl font-bold">
                    <br>
                    <big>
                        <big>LIBLALY of JATA</big>
                    </big>
                    <font size="6">
                        <br>
                        One Book Can Change a Team.
                    </font>
                    </h2>
                </div>
            </template>
        </div>
    </main>
    
    <script>
    function slideshow() {
        return {
            activeIndex: 0,
            images: [
                {src: 'https://images4.alphacoders.com/132/1326368.png', alt: 'Image 1', text: 'Slide 1' },
                {src: 'https://images.unsplash.com/photo-1683009427513-28e163402d16?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', alt: 'Image 2', text: 'Slide 2' },
                {src: 'https://get.wallhere.com/photo/1920x1080-px-dark-galaxy-planet-space-stars-666724.jpg', alt: 'Image 3', text: 'Slide 3' },
                {src: 'https://images.unsplash.com/photo-1506880018603-83d5b814b5a6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80', alt: 'Image 4', text: 'Slide 4' },
                {src: 'https://images.unsplash.com/photo-1510146758428-e5e4b17b8b6a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', alt: 'Image 5', text: 'Slide 5' },        
                {src: 'https://images.unsplash.com/photo-1519309621146-2a47d1f7103a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2073&q=80', alt: 'Image 6', text: 'Slide 6' },
                {src: 'https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', alt: 'Image 7', text: 'Slide 7' },     
                {src: 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80', alt: 'Image 8', text: 'Slide 8' },              
            ],
            init() {
                setInterval(() => {
                    this.activeIndex = (this.activeIndex + 1) % this.images.length;
                }, 4500);
            }
        }
    }
    </script>
    




@endsection

