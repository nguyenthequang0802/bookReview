<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $users = [
            ['name'=>'Nguyen van a', 'age'=>18],
            ['name'=>'Nguyen van b', 'age'=>19],
            ['name'=>'Nguyen thi c', 'age'=>20]
        ];
        return view("test", ['users'=>$users]);
    }
}
