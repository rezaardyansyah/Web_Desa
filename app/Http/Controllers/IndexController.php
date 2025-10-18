<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
     public function Home(Request $request)
    {
        return view('index');
    }

     public function Profile(Request $request)
    {
        return view('pages.profile');
    }

    public function News(Request $request)
    {
        return view('pages.berita');
    }

    public function DetailsNews(Request $request)
    {
        return view('pages.detail-berita');
    }

     public function Infografis(Request $request)
    {
        return view('pages.infografis');
    }

     public function Lembaga(Request $request)
    {
        return view('');
    }

     public function PPID(Request $request)
    {
        return view('');
    }
}
