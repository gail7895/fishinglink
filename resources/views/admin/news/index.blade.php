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
                 </div>
                 
              </form>
        </div>         
     </div>     
     
     <!--検索ボタンが押されたときの表示される-->
    <div class="container">
       @if(!empty($data))        
     <div class="row">
         <div class="list-news col-md-12 mx-auto">
             <div class="row">
                 <div class="table table-striped">
                     <thead>
                         <th>ID</th>
                         <th>貸出品名</th>
                         <th>貸出品の種類</th>
                         <th>貸出品の状態</th>
                     </thead>
                 </div>
             </div>
         </div>
     </div> 
    
                <!-- 検索条件に一致した場合表示 -->    
                    @foreach($data as $news)
                     <div class="row">
                         <div class="list-news col-md-12 mx-auto">
                             <div class="row">
                                 <div class="table table-striped">
                                     <thead>
                                         <th>{{ $serach1->text }}</th>
                                         <th>{{ $serach2->items }}</th>
                                         <th>{{ $serach3->condition }}</th>
                                     </thead>
                                 </div>
                             </div>
                         </div>
                     </div>
                     @endforeach
        @endif
     </div>         
@endsection