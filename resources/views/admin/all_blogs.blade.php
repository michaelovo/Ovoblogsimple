@extends('admin.adminlayout')
@section('content')
<p> all blogs here</p>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Page Name</th>
      <th scope="col">Blog title</th>
      <th scope="col">Category</th>
      <th scope="col">Author</th>
      <th scope="col">Page Contents</th>
        <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($all_contacs as $v_contacts)
    <tr>
      <th scope="row">{{$v_contacts->id}}</th>
      <td>{{$v_contacts->pagename}}</td>
      <td>{{$v_contacts->blog_title}}</td>
      <td>{{$v_contacts->category}}</td>
      <td>{{$v_contacts->author}}</td>
      <td>{{$v_contacts->page_content}}</td>
      <td>
        <a href="{{URL::to('edit_blog/'.$v_contacts->id)}}" class="btn btn-warning">Edit |</a>
        <a href="{{URL::to('view_contact/'.$v_contacts->id)}}" class="btn btn-info">View |</a>
        <a href="{{URL::to('delete_contact/'.$v_contacts->id)}}" id="delete" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
