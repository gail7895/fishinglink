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
                           <form action="{{action('Admin\NewsController@create') }}" method= "post">
                           enctype="multipart/form-data">
                           
                           @if (count($errors) > 0)
                             <ul>
                               @foreach($errors->all() as $e)
                                  <li>{{ $e }}</li>
                               @endforeach
                             </ul>
                           @endif
                           
                      <div class="form-group row">
                        <label class="col-md-3">貸出品</label>
                             <input class="form-control" name="rental_Listing" value="{{ old('rental_Listing') }}"
                          </div>
                      </div>  
                      
                      <div class="form-group row">
                         <label class="col-md-2">画像</label>
                           <div class="col-md-10">
                           <input type="file" class="form-control-file" name="image">
                          </div>
                      </div>
                           
                     <div class="form-group row">
                          {{ Form::label('type_Tools', '貸出品の種類' ) }}
                          {{ Form::select('type_Tools', $type_Tools ) }}
                     </div>
                            
                     <div class="form-group row">
                          {{ Form::label('condition', '商品の状態') }}
                          {{ Form::select('condition',  $conditions ) }}
                     </div>
                     
                     <div class="form-group row">
                         <label class="col-md-2">説明</label>
                           <div class="col-md-10">
                           <textarea class="form-contorl" name="body" rows="6" cols="60
                           ">
                           ここに貸出品の説明を記入してください。
                           （例）ダイワのソルティガ４５００Hです
                           週二日の釣行を半年ぐらい使用していましたが特にトラブルはなかったです
                           若干ラインローラーのところに傷がありますが気になる方はご遠慮ください
                           {{ old('body') }}
                           </textarea>
                     </div>
                    </div>
                    
                    @csrf
                    <input type="submit" class="btn btn-primary" value="本当に貸し出しますか？">
                     
                     
                     </form>
                    </div>
                   </div>
                       
               </div>
           </div>
       </div>
@endsection


