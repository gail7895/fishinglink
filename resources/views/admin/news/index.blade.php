@extends('layouts.admin')
@section('title','貸し出した道具一覧')

@section('content')
   <div class="container">
       <div class="row">
           <div class="text-center col-md-5">
              <h2>貸出品を検索</h2>
           </div>
              <form action="{{ action('Admin\NewsController@index') }}" method="get">
                 <div class="form-group">
                     {{ Form::label('text', '貸出品名') }}
                     {{ Form::text('rental_Listing','',['class'  => 'form-control'] ) }}
                 </div>
                 
                 <div class="form-group">
                     {{ Form::label('items', '貸出品の種類') }}
                     {{ Form::select('items', $type_Tools) }}
                 </div>
                 <div class="form-group">
                     {{ Form::label('condition', '貸出品の状態') }}
                     {{ Form::select('condition',$condition ) }}
                 </div>
                 <div>
                     {{ Form::submit('検索', ['class' => 'btn btn-primary']) }}
                     {{ Form::close() }}
                 </div>
                   
                 <div class="col-md-7">
                    <div class="text-center">
                       <h2>貸出品一覧</h2>
                    </div>
                 
                 <!-- 検索ボタンが押されたとき -->
                 <div class="container">
                    @if(!empty($data))
                    <div class="row text-center">
                       <div class="col-md-4">
                          <p>貸出品名</p>
                       </div>
                       <div>
                          <div class="col-md-4">
                          <p>貸出品の種類</p>
                       </div>
                       <div class="col-md-4">
                          <p>貸出品の状態</p>
                       </div>
                    </div>
                    
                    @foreach($data as $item)
                     <div class="row text-center">
                        <div class="col-md-3">
                            //投稿された画面へ遷移
                           <a href="">{{ $item->text }}</a>
                        </div>
                        
                        <div class="row text-center">
                           <div class="col-md-3">
                              {{ $item->items }}
                           </div>
                        
                        <div class="row text-center">
                           <div class="col-md-3">
                              {{ $item->condition }}
                           </div>
                         </div>
                        
                        <div class="row text-center">
                            <div class="col-md-3">
                                {{ $item->body }}
                            </div>
                        </div> 
                         
                    </div>
                    @endforeach
                     </div>
                  @endif
               </form>
           </div>
       </div>
   </div>
@endsection