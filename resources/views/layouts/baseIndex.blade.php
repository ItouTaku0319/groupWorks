<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  {{-- <title>CodePen - A Pen by 加藤仁平</title> --}}
  <title>@yield('title')</title>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
    <body>
      <header>
        <nav>
          <div class="nav-wrapper orange accent-3">
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
                            {{--
                                <form action="{{ route('user.logout') }}" method="post">
                                @csrf
                                <input type="submit" value="ログアウト">
                                </form>
                            --}}
                            
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
            @section('logins')
            @show
            </ul>
          </div>
        </nav>
    </header>

    <main style="height: 700px;">
      <section>
        <div class="slider" >
          <ul class="slides" >
            <li>
              <img src=" https://get.wallhere.com/photo/1920x1080-px-dark-galaxy-planet-space-stars-666724.jpg"> <!-- random image -->
              <div class="caption center-align">
                <h3>LIBLALY of JATA</h3>
                <h5 class="light grey-text text-lighten-3">Share Knowledge, Build the Future​.</h5>
              </div>
            </li>
            <li>
              <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
              <div class="caption left-align">
                <h3>LIBLALY of JATA</h3>
                <h5 class="light grey-text text-lighten-3">One Book Can Change a Team.</h5>
              </div>
            </li>
            <li>
              <img src=" https://get.wallhere.com/photo/1920x1080-px-dark-galaxy-planet-space-stars-666724.jpg"> <!-- random image -->
              <div class="caption right-align">
                <h3>LIBLALY of JATA</h3>
                <h5 class="light grey-text text-lighten-3">Information is Power, Knowledge is the Future.</h5>
              </div>
            </li>
            <li>
              <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
              <div class="caption center-align">
                <h3>LIBLALY of JATA</h3>
                <h5 class="light grey-text text-lighten-3">Read Today, Change Tomorrow.</h5>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <footer>
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
    </footer>

    <!-- Other scripts... -->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script><script  src="/js/script.js"></script>
  
  
</body>
</html>


