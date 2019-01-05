<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\comment;
use Illuminate\Support\Facades\DB;

class Ovoblogsimple extends Controller
{          // Function to accept users' comment using eloquent model
      public function insertcomment(Request $request)
      {
        $request->validate([
          'username'=>'required|max:10',
          'useremail'=> 'required',
          'usercomment' => 'required'
        ]);
            $data = new comment;
            //"new comment", the 'comment' is the model name
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

        public function post()
        {
          return view('post');

        }




}
