<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function add()
    {
        $type_Tools = array('ロッド','リール','ライン','ルアー','フック','餌','氷','クーラーボックス','その他');
        $conditions= array('非常に良い','良い','普通','悪い','非常に悪い');
        
        return view('admin.news.create'.compact(var_dump(implode($type_Tools,$conditions))));
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
        $type_Tools = array('ロッド','リール','ライン','ルアー','フック','餌','氷','クーラーボックス','その他');
        $conditions= array('非常に良い','良い','普通','悪い','非常に悪い');
        
        $query = News::query();
        //検索時に入力した項目を取得する
        $search1 = $request->input('rental_Listing');
        $search2 = $request->input('items');
        $search3 = $request->input('condition');
        $search4 = $request->input('body');
        
        //貸出品入力フォームで入力した文字列を含むカラムで取得
        if ($request->has('rental_Listing') && $search1 != '') {
            $query->where('rental_Listing', 'like', '%'.$search1.'%')->get();
        }
            
        //プルダウンメニューで選択してください以外を選択した場合、$query->whereで選択した道具の種類と一致するカラムを取得する
        if ($request->has('items') && $search2 != ('選択してください')) {
            $query->where('items', $search2)->get();
        }
    
        if ($request->has('condition') && $serach3 != ('選択してください')) {
            $query->where('condition', $serach3)->get();
        }
        
        if ($request->has('condition') && $serach4 != '') {
            $query->where('condition', $serach4)->get();
        }
        
        //貸出品を1ページにつき10件ずつ表示
        $data = $query->paginate(10);
        
        return view('news/index.search',[
            'data' => $data
            ]);
            
            return view('admin.news.index').compact('type_Tools','conditions');
      }   
      
       
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        return redirect('admin/news/edit');
    }
    
}
