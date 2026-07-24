<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo (" Hai, Selamat Datang di Website Laravel"
        ); 
        
    }
    public function about()
    {
        echo (" NIM : 26029 <br> Nama : Zharif widi <br> Kelas : 2RPLB"
        ); 
        
    }
    public function articles($id)
    {
        echo ("Ini adalah halaman artikel dengan ID : $id"
        );
    }
}
