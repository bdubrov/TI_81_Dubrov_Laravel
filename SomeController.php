<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pages;
use App\UsersRegistration;



class SomeController extends Controller{
    public function getPages($page, $lib) {
        $s = new Pages($page, $lib);
        return view('index', ['obj'=> $s]);
    }

    public function postUsersData(Request $request) {
        $user = new UsersRegistration($request);
        return view('index', ['user'=>$user]);
    }
}
