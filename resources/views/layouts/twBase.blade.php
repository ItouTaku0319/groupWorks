<!DOCTYPE html>
<html lang="ja">
<head></head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    @section('css')
    @show

</head>
<body>
  <header class="bg-orange-400 text-gray-600 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center justify-between">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <span class="ml-0 text-2xl text-gray-600">LIBLALY of JATA</span>
        </a>
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('profile') }}" class="mr-5 hover:text-gray-900">ホーム</a>
                    <a href="{{ route('user.logout') }}" class="mr-5 hover:text-gray-900">ログアウト</a>
                @else
                    <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900">ログイン</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">新規登録</a>
                    @endif
                @endauth
            @endif
        </nav>
    </div>

        {{-- <nav>
            <div class="nav-wrapper amber accent-4">
                <a href="#!" class="brand-logo ">LIBLALY of JATA</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth   
                            <li>
                                <a href="{{ url('profile') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ホーム</a>
                            </li>
                            <li>
                                <a href="{{ route('user.logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ログアウト</a>
                                
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ログイン</a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">新規登録</a>
                                </li>
                            @endif
                        @endauth
                    </div>
                    @endif
                </ul>
            </div>
        </nav> --}}
    </header>

    @section('header')
    @show

    @section('main')
    @show

    <footer class="bg-orange-400 text-gray-600">
      <div class="container mx-auto py-8">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
              <div class="text-gray-600">
                  <h5 class="text-xl font-semibold mb-4">LIBLALY of JATA</h5>
                  <p class="text-gray-600">Our company philosophy is Justice, Ambition, Trust, and Precision.</p>
              </div>
              <div class="footer__inner text-gray-600">
                  <p>&copy; 2023 JATA書籍管理システム</p>
                  <p>〒566-0022 大阪府摂津市三島1丁目2番1号</p>
                  <p>電話06-6383-0949（代表）</p>
              </div>
          </div>
      </div>
      <div class="bg-gray-900 text-gray-300 py-2">
          <div class="container mx-auto text-center">&copy; 2023 JATA Inc.</div>
      </div>
  </footer>
  
    {{-- <footer>
        <div class="page-footer orange accent-3">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">LIBLALY of JATA</h5>
                        <p class="grey-text text-lighten-4">Our company philosophy is Justice, Ambition, Trust, and Precision.</p>
                    </div>
                    <div class="footer__inner">
                      
                    <p>&copy; 2023 JATA書籍管理システム</p>
                    <p>〒566-0022 大阪府摂津市三島1丁目2番1号</p>
                    <p>電話06-6383-0949（代表）</p>
                </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2023 JATA Inc.
                    <!-- The anchor tag here was not closed properly and has no content -->
                    <a class="grey-text text-lighten-4" href="#!"></a>
                </div>
            </div>
        </div>
    </footer> --}}

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script><script  src="/js/script.js"></script>
</body>
</html>