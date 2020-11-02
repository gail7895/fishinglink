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
                    
                    @foreach($data as $news)
                     <div class="row text-center">
                        <div class="col-md-3">
                            //投稿された画面へ遷移
                           <a href="">{{ $serach1->text }}</a>
                        </div>
                        
                        <div class="row text-center">
                           <div class="col-md-3">
                              {{ $serach2->items }}
                           </div>
                        
                        <div class="row text-center">
                           <div class="col-md-3">
                              {{ $search3->condition }}
                           </div>
                         </div>
                        
                        <div class="row text-center">
                            <div class="col-md-3">
                                {{ $search4->body }}
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