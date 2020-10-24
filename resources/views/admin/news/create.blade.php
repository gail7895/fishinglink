{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

@section('title','Fishing Link')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
      <div class="container">
          <div class="row">
              <div class="col-md-8 mx-auto">
                   <h2>貸し出す</h2>
                   <div class="containr">
                       <div class="row">
                           <form action="{{action('Admin\NewsController@create') }} method="post"
                           enctype="multipart/form-data">
                           
                           <div class="form-group row">
                           <label class="col-md-3">道具の種類</label>
                            <div class="col-md-9">
                              @foreach($type_Tools as $type_Tool)
                              <option>{{$type_Tool}}</option>
                              @endforeach
                            </div>
                            
                     <div class="form-condition">
                         <label for="condition">商品の状態</label>
                         @foreach($conditions as $condition)
                         <option>{{$type-Tool}}</option>
                     </div>
                     
                     </form>
                    </div>
                   </div>
                       
                      
                      {{-- 画像を埋め込む --}}
                      
                      
                       
                       
            
                   
                   
                      
  {{-- 調整中ここまで --}}
               </div>
           </div>
       </div>
@endsection


