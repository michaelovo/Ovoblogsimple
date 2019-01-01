<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use DB;
use App\comment;
use Illuminate\Support\Facades\DB;
class Ovoblogsimple extends Controller
{

              public function post()
              {

                return view('post');

              }


              public function insertcomment(Request $request)
              {
                $request->validate([
                  'username'=>'required',
                  'useremail'=> 'required',
                  'usercomment' => 'required'
                ]);
                    $data = new comment;
                    //"new contact", the 'comment' is the model name
                    $data->username=$request->username;
                    $data->useremail=$request->useremail;
                    $data->usercomment=$request->usercomment;

                    $data->save();

                    if($data)
                    {
                      $notification=array(
                        'messege'=>'Submitted Successfully',
                        'alert-type'=>'success'
                      );
                      return Redirect()->back()->with($notification);
                    }
                    else
                    {
                      echo "error!";
                    }



              }


}
