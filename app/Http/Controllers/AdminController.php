<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogpage;
use Illuminate\Support\Facades\DB;
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



    // to view all blogpages
    public function Allblogs()
{

// HERE ELOQUENT MODEL IS USED TO RETRIEVED DATA FROM THE DATABASE
$data=blogpage::all(); //the 'contact' here is the model name
  return view('admin.all_blogs')->with('all_contacs',$data);

}
}
