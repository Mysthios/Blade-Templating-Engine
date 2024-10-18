<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard() {
        return view('dashboard'); // dalam ' ' sesuai dengan letak view / bladenya
    } //tujuannya untuk mengakses route dashboard 

    public function register(){
        return view('admin.pages.register'); //harus bener bener ditunjukan tanpa menggunakan / (garing)
    }

    public function login(){
        return view('admin.pages.login');
    }

    public function contact(){
        return view('admin.pages.contact');
    }

}
