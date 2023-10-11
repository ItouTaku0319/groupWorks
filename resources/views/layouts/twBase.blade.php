<!DOCTYPE html>
<html lang="ja" data-theme="wireframe">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap"
            rel="stylesheet"
        />

        <script src="https://cdn.tailwindcss.com"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/daisyui@3.9.2/dist/full.css"
            rel="stylesheet"
            type="text/css"
        />
        <script>
            module.exports = {
                //...
                tailwind: {
                    daisyui: {
                        themes: ["retro", "wireframe"],
                    },
                },
                theme: {
                    extend: {
                        colors: {
                            clifford: "#da373d",
                        },
                    },
                },
            };
        </script>
        <style type="text/tailwindcss">
            @layer base {
                html {
                    font-family: "Yusei Magic", sans-serif !important;
                }
            }
        </style>
        @section('css') @show
    </head>
    <body class="min-h-screen flex flex-col justify-between bg-base-200">
        <header class="bg-orange-400 text-gray-600 body-font">
            <div
                class="container mx-auto py-5 flex flex-wrap flex-col md:flex-row items-center justify-between"
            >
                <a
                    class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
                    href="/"
                >
                    <span class="ml-0 text-2xl text-gray-600"
                        >LIBRARY of JATA</span
                    >
                </a>
                <nav
                    class="md:ml-auto flex flex-wrap items-center text-base justify-center"
                >
                    @if (Route::has('login')) @auth
                    <a
                        href="{{ url('profile') }}"
                        class="mr-5 hover:text-gray-900"
                        >メニュー</a
                    >
                    <a
                        href="{{ route('user.logout') }}"
                        class="mr-5 hover:text-gray-900"
                        >ログアウト</a
                    >
                    @else
                    <a
                        href="{{ route('login') }}"
                        class="mr-5 hover:text-gray-900"
                        >ログイン</a
                    >
                    @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="mr-5 hover:text-gray-900"
                        >新規登録</a
                    >
                    @endif @endauth @endif
                </nav>
            </div>
        </header>

        @section('header') @show @section('main') @show

        <footer class="bg-orange-400 text-gray-600">
            <div class="container mx-auto py-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="text-gray-600">
                        <h5 class="text-xl mb-4">LIBLALY of JATA</h5>
                        <p class="text-gray-600">
                            Our company philosophy is Justice, Ambition, Trust,
                            and Precision.
                        </p>
                    </div>
                    <div class="footer__inner text-gray-600">
                        <p>&copy; 2023 JATA書籍管理システム</p>
                        <p>〒566-0022 大阪府摂津市三島1丁目2番1号</p>
                        <p>電話06-6383-0949（代表）</p>
                    </div>
                </div>
            </div>
            <div class="bg-gray-900 text-gray-300 py-2">
                <div class="container mx-auto text-center">
                    &copy; 2023 JATA Inc.
                </div>
            </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>
