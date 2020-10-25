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
                        <label class="col-md-3">貸出品</label>
                             <div class="form-control" name="rental_Listing" value="{{ old('rental_Listing') }}"
                          </div>
                      </div>  
                      
                      <div class="form-group row">
                         <label class="col-md-2">画像</label>
                           <input type="file" class="form-control-file" name="image">
                      <div class="col-md-10">
                           <input type="file" class="form-control-file" name="image">
                           {{ csrf_filed() }}
                           <input type="submit" class="btn btn-primary" value="アップロード">
                         </div>
                      </div>   
                           
                     <div class="form-group row">
                           <label class="col-md-5">道具の種類</label>
                              @foreach($type_Tools as $type_Tool)
                              <select name="items">
                              <option value='$type_Tool'>{{$type_Tool}}</option>
                              @endforeach
                     </div>
                            
                     <div class="form-group row">
                         <label class="col-md-5">商品の状態</label>
                         @foreach($conditions as $condition)
                         <select name="conditon">
                         <option value='$condtion'>{{$condition}}</option>
                     </div>
                     
                     <div class="form-group row">
                         <label class="col-md-2">説明</label>
                         <div class="col-md-10">
                           <textarea class="form-contorl" name="body">{{ old('body') }}
                           </textarea>
                         </div>
                     </div>
                     
                     
                     </form>
                    </div>
                   </div>
                       
               </div>
           </div>
       </div>
@endsection


