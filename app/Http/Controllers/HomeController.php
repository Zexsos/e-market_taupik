<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('Home.home');
    }

    public function contact(){
        return view('contact.contact');
    }

    public function profil(){
        return view('profil.profil');
    }

    public function faq(){
        return view('faq.faq');
    }
}

