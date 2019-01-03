<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    return view('admin.index');
  }

  // page creator
  public function pagecreator()
  {
    return view('admin.pagecreator');
  }
    //
}
