<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\comment;
use App\blogpage;

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
        public function pagecreator()
        {
          return view('admin.pagecreator');
        }



// to create blog page Contents
public function createblog(Request $request)
{
  $request->validate([
    'pagename'=>'required',
    'blog_title'=> 'required',
    'category' => 'required',
    'author' => 'required',
    'page_content' => 'required'
  ]);
      $data = new blogpage;

      $data->pagename=$request->pagename;
      $data->blog_title=$request->blog_title;
      $data->category=$request->category;
      $data->author=$request->author;
      $data->page_content=$request->page_content;
      $data->save();

      if($data)
      {
        $notification=array(
          'messege'=>'Blog Added Successfully',
          'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
      }
      else
      {
        echo "error!";
      }

  }






        // to view all blogpages
        public function Allblogs()
      {

      // HERE ELOQUENT MODEL IS USED TO RETRIEVED DATA FROM THE DATABASE
      $data=blogpage::all(); //the 'contact' here is the model name
      return view('admin.all_blogs')->with('all_contacs',$data);

      }

      // to edit individual blog Contents
      public function editblog($id)
  {
    $edit=DB::table('blogpages')->where('id',$id)->first();
    return view('admin.edit_blog')->with('sngle_edit',$edit);
  }

  // to upadte edited blog file_get_contents
  public function updateblog(Request $request,$id)
    {
        //USING ELOQUENT Model
      $data=blogpage::find($id);
      $data->pagename=$request->pagename;
      $data->blog_title=$request->blog_title;
      $data->category=$request->category;
      $data->author=$request->author;
      $data->page_content=$request->page_content;
      $data->save();



            if($data->save())
            {
              $notification=array(
                 'messege'=>'Blog Updated Successfully',
                  'alert-type'=>'success'
                 );
                 //return Redirect()->route('admin.all_blogs')->with($notification);
                   return Redirect()->back()->with($notification);
           }
           else
           {
           echo "error!";
          }
    }
// view blog
    public function viewblog($id)
    {

          $view=blogpage::find($id)->first();// USING ELOQUENT MODEL
      return view('admin.view_blog')->with('sngle_view',$view);
    }


    //TO DELETE Blog
    public function deleteblog($id)
{

    //TO DELETE CONTACT FROM DATABASE USING Eloquent MODEL
    $delete=blogpage::find($id)->delete();
  if($delete)
  {
    $notification=array(
       'messege'=>'Blog Deleted Successfully',
        'alert-type'=>'success'
       );
    return Redirect()->back()->with($notification);
    //return route('all_contacts')->with($notification);
  }
  else
  {
    echo "error!";
  }
}


}
