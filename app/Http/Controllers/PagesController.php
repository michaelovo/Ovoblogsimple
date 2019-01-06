<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function post()
    {
      return view('post');
    }

    public function landing()
    {
      return view('landing');
    }

    public function blog()
    {
      return view('blog');
    }

    public function about()
    {
      return view('about');
    }

    public function contactus()
    {
      return view('contactus');
    }

    public function faceb()
    {
      return view('faceb');
    }

}
