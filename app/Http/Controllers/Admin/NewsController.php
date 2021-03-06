<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function add()
    {
        $type_Tools = array('' => '選択してください',
                            'rod' => 'ロッド',
                            'reel' => 'リール',
                            'line' => 'ライン',
                            'rure' => 'ルアー',
                            'hook' => 'フック',
                            'feed' => '餌',
                            'ice' => '氷',
                            'coolerbox' => 'クーラーボックス',
                            'other' => 'その他'
                            );
                            
        $conditions= array('' => '選択してください',
                           'verynice' => '非常に良い',
                           'good' => '良い',
                           'usually' => '普通',
                           'bad' => '悪い',
                           'verybad' => '非常に悪い'
                           );
                           
        
        return view('admin.news.create',['type_Tools' => $type_Tools,'conditions' => $conditions]);
    }
    
    public function create(Request $request)
    { 
        $this->validate($request, News::$rules);
        
        $news = new News;
        $form = $request->all();
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
      } else {
          $news->image_path = null;
      }
      
       unset($form['_token']);
       unset($form['image']);
       
       $news->fill($form);
       $news->save();
       
        return redirect('admin/news/create');
    }
    
   public function index(Request $request)
    {   
        $type_Tools = array('' => '選択してください',
                            'rod' => 'ロッド',
                            'reel' => 'リール',
                            'line' => 'ライン',
                            'rure' => 'ルアー',
                            'hook' => 'フック',
                            'feed' => '餌',
                            'ice' => '氷',
                            'coolerbox' => 'クーラーボックス',
                            'other' => 'その他'
                            );
                            
        $conditions= array ('' => '選択してください',
                           'verynice' => '非常に良い',
                           'good' => '良い',
                           'usually' => '普通',
                           'bad' => '悪い',
                           'verybad' => '非常に悪い'
                           );
                           
       
        $query = News::query();
        //検索時に入力した項目を取得する
        $search1 = $request->input('rental_Listing');
        $search2 = $request->input('type_Tools');
        $search3 = $request->input('conditions');
        $search4 = $request->input('body');
        
        //貸出品入力フォームで入力した文字列を含むカラムで取得
        if ($request->has('rental_Listing') && $search1 != '') {
            $query->where('rental_Listing', 'like', '%'.$search1.'%')->get();
        }
            
        //プルダウンメニューで選択してください以外を選択した場合、$query->whereで選択した道具の種類と一致するカラムを取得する
        if ($request->has('type_Tools') && $search2 != ('選択してください')) {
            $query->where('type_Tools', $search2)->get();
        }
    
        if ($request->has('conditions') && $search3 != ('選択してください')) {
            $query->where('conditions', $search3)->get();
        }
        
        if ($request->has('body') && $search4 != '') {
            $query->where('body', $search4)->get();
        }
       
        //貸出品を1ページにつき10件ずつ表示
        $data = $query->paginate(10);
        
        return view('admin/news/index',['data' => $data,'type_Tools' => $type_Tools,
        'conditions' => $conditions,'search1' => $search1,'search2' => $search2,'search3' => $search3]);
            
      }   
      
      
       
    public function edit(Request $request)
    {
        $news = News::find($request->id);
        if(empty($news)) {
            abort(404);
        }
        return view('admin.profile.edit',['news' => $news]);
    }
    
    public function update()
    {
        return redirect('admin/news/edit');
    }
    
    public function  datails() 
    {
        //次回ここから
        
    }
    
}
