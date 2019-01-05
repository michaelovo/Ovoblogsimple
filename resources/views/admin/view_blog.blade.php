@extends('admin.adminlayout')
@section('content')
<table class="table">
  <a  href="{{url('all_blogs')}} " class="btn btn-success"> Goto all Blogs </a>
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">page name</th>
      <th scope="col">blog title</th>
      <th scope="col">category</th>
      <th scope="col">author</th>
      <th scope="col">page contents</th>


    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">{{$sngle_view->id}}</th>
      <td>{{$sngle_view->pagename}}</td>
      <td>{{$sngle_view->blog_title}}</td>
      <td>{{$sngle_view->category}}</td>
      <td>{{$sngle_view->author}}</td>
      <td>{{$sngle_view->page_content}}</td>

    </tr>

  </tbody>
</table>
@endsection
