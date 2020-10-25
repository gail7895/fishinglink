{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

@section('title','Fishing Link')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
         <div class="container">
          <div class="row">
              <div class="col-md-8 mx-auto">
                  <div class="site-description text-center">
                    <h1>Fishing Link</h1>
                    <h3 style="font-size: 16px">釣り人の道具の貸し借り専用マッチングサービスです</h3>
                     <p class='mt-5'>■ ■ ■このWEBサイトについて ■ ■ ■</p>
                     <p>あの魚を釣って見たい！けど道具を買うのはもったいない...</p>
                     <p>道具を保管したり処分したりするのがめんどくさい...</p>
     　　　             <p class="mb-5">Fishing Linkでは、貸したい人と借りたい人をつなげます！</p>
                     <p class='mt-5'>■ ■ ■ テストログイン ■ ■ ■</p>
                     <p>Email : test@test.com</p>
                     <p>Password : password</p>
                     @guest
                     <a class="btn" href="{{ route('login') }}" role="button"></a>
                     <button class="btn-lg btn-info" type="submit">ログイン</button>
                     @endguest
                  </div>
  
                