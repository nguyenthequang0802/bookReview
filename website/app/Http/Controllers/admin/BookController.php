<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        $books = [
          ['id'=>'1', 'name'=>'Doraemon', 'category'=>'Truyện tranh'],
          ['id'=>'2', 'name'=>'Shin-cậu bé bút chì', 'category'=>'Truyện tranh'],
          ['id'=>'3', 'name'=>'Harry porter', 'category'=>'Tiểu thuyết'],
          ['id'=>'4', 'name'=>'Thát tịch không mưa', 'category'=>'Ngôn tình']
        ];
        return view('admin.content.book.index', ['books'=>$books]);
    }
}
