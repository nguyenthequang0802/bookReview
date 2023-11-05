<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = [
            ['id'=>'1', 'name'=>'Truyện tranh'],
            ['id'=>'2', 'name'=>'Ngôn tình'],
            ['id'=>'3', 'name'=>'Tiểu thuyết'],
            ['id'=>'4', 'name'=>'Khoa học'],
            ['id'=>'5', 'name'=>'Truyện cổ tich']
        ];
        return view('admin.content.category.index', ['categories'=>$categories]);
    }
}
