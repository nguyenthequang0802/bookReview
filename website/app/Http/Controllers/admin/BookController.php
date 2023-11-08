<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function index(){
        $books = DB::table('books')->get();
        return view('admin.content.book.index', ['books'=>$books]);
    }
}
