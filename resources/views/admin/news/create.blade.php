{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

@section('title','Fishing Link')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
       <div class="container">
           <div class="row">
               <div class="col-md-8 mx-auto">
                   <h2>Fishing Link</h2>
                   {{-- ここから機能実装 --}}
                   <div class="form">
                       <div class="form-title">
                           <label for="item">道具の種類</label>
                              @foreach($type_Tools as $type_Tool)
                              <option>{{$type_Tool}}</option>
                              @endforeach
                     <div class="form-condition">
                         <label for="condition">商品の状態</label>
                         @foreach($conditions as $condition)
                         <option>{{$type-Tool}}</option>
                     </div>
                     
                     
                    </div>
                   </div>
                       
                      
                      {{-- 画像を埋め込む --}}
                      
                      
                       
                       
            
                   
                   
                      
  {{-- 調整中ここまで --}}
               </div>
           </div>
       </div>
@endsection


