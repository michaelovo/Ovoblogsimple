<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogpage;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
  public function index()
  {
    return view('auth.login');
  }

  // page creator
  public function pagecreator()
  {
    return view('admin.pagecreator');
  }
    //
    public function edit_blog()
    {
      return view('admin.edit_blog');
    }







}
