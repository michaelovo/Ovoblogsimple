@extends('admin.adminlayout')
@section('content')

<div class="box-content">
  <form class="form-horizontal" action="{{URL::to('updateblog/'.$sngle_edit->id)}}" method="post">
    @csrf

    <!--{{@csrf_field()}}-->

    <fieldset>
      <div class="control-group">
      <label class="control-label" for="focusedInput">pagename</label>
      <div class="controls">
        <input class="input-xlarge focused" required="required" id="focusedInput" type="text" name="pagename" value="{{$sngle_edit->pagename}}">
      </div>
      </div>

      <div class="control-group">
      <label class="control-label" for="focusedInput">blog title</label>
      <div class="controls">
        <input class="input-xlarge focused" id="focusedInput" required="required" type="text" name="blog_title" value="{{$sngle_edit->blog_title}}">
      </div>
      </div>
      <div class="control-group">
      	<label class="control-label" for="selectError">BLOG CATEGORIES</label>
      	<div class="controls">
      			<select id="selectError" data-rel="chosen"  name="category" value="{{$sngle_edit->category}}" >
      		      <option>BUSINESS</option>
      		      <option>TECHNOLOGY</option>
      		      <option>FASHION</option>
      		      <option>ECONOMY</option>
      		      <option>SPORTS</option>
      			</select>
      	</div>
      </div>
      <div class="control-group">
      <label class="control-label" for="focusedInput">Author</label>
      <div class="controls">
        <input class="input-xlarge focused" id="focusedInput" required="required" type="text" name="author" value="{{$sngle_edit->author}}">
      </div>
      </div>



      <div class="control-group hidden-phone">
        <label class="control-label" for="textarea2" >Contents</label>
        <div class="controls">
        <textarea class="cleditor" id="textarea2" rows="10"  name="page_content" value="{{$sngle_edit->page_content}}"></textarea>
        </div>
      </div>


      <div class="form-actions">
      <button type="submit" class="btn btn-primary">Create</button>

      </div>
    </fieldset>
    </form>

</div>

@endsection
