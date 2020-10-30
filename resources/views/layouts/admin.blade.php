<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        
        {{-- laravelで用意されているjavascript読み込む --}}
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        
        <!--Styles -->
        {{-- laravel標準で用意されているcssを読み込む --}}
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        
        <link href="{{ secure_asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body>
        {{-- navbar --}}
            <nav class="navbar navbar-expand-md  navbar-light bg-light">
                <button type="button" class="navbar-toggler" data-toggle="collapse" 
                data-target="#bs-navi" aria-controls="bs-navi" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="bs-navi">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('/') }}">トップページ</a></li>
                        
                        {{-- ミドルウェアでログインページに飛ばす --}}
                        <li class="nav-item"><a class="nav-link" href="#">借りる</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ action('Admin\NewsController@create') }}">貸す</a></li>
                        {{-- ここまで --}}
                        
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">新規登録</a></li>
                    
                        @if(Auth::check())
                          <span class="my-navbar-item"></span>
                          <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">ログアウト</a></li>
                       <form id="logout-from" action="{{ route('logout') }}"method="POST">
                            @csrf
                        </form> 
                        @else
                          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">ログイン</a></li>
                        @endif
                        <li class="nav-item"><a class="nav-link" href="#">お問い合わせ</a></li>
                        </ul>
                </div>
            </nav>
{{-- navbarここまで --}}

          <main class="py-4">
    {{-- コンテンツを入れる --}}
    @yield('content')
          </main>
        </div>
    </body>
</html>