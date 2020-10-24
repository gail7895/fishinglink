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
        
        
        return view('admin.news.create');
    }
    
    public function create(Request $request)
    {
        return redirect('admin/profile/create');
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
