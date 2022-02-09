<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
         {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
         
        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        {{-- この章の後半で作成するCSSを読み込みます --}}
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
        @yield('css_field')
    </head>
    <body>
        　
            {{-- ナビゲーションバーです --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-light py-2 fixed-top">
              <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">WanWan</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('select') }}">健康チェック</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('all_history') }}">チェック履歴</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('dog_register') }}">愛犬登録</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href={{ route('logout') }} onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          ログアウト
                      </a>
                      <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
                      @csrf
                      </form>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>  
            {{-- ここまでナビゲーションバー --}}

                {{-- コンテンツをここに入れるため、@yieldで空けておきます。 --}}
              <div class="main py-4">  
                @yield('content')
              </div>
            
            {{-- footerー --}}
            <footer class="fixed-bottom py-2 bg-info">
              <div class="container">
                <p class="text-right m-0">copyright kohadog</p>
              </div>  
            </footer>
            
            {{-- ここまでfooter --}}
    </body>
</html>