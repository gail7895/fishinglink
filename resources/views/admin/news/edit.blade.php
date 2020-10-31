{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
@section('title', '投稿画面の編集')

@section('content')
     <div class="container">
         <div class="row">
             <div class="text-center col-md-5">
              <h2>貸出品の編集</h2>
              <form action="{{ action('Admin\NewsController@update') }}" 
              method="post" enctype="multipart/form-data">
                  @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                  @endif
                  
                  <div class="form-group">
                      { Form::label('text', '貸出品名') }
                      { Form::text('rental_Listing','',['class'  => 'form-control', '選択してください'] ) }
                  </div>
                  <div class="form-group">
                     { Form::label('items', '貸出品の種類') }
                     { Form::select('items', ['選択してください' => '選択してください'],compact('type_Tools') }
                  </div>
                  <div class="form-group">
                     { Form::label('condition', '貸出品の状態') }
                     { Form::select('condition', ['選択してください' => '選択してください'],compact('conditions') }
                 </div>
                 <div class="form-group">
                     { Form::label('body', '説明')  }
                     
                 </div>
              </form>
     </div>