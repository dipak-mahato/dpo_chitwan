@extends('admin.admindash')
@section('services')
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addNotice">
Add Notice
</button>

<!-- The Modal -->
<div class="modal" id="addNotice">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Notice</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group" action="/addNotice" method="post">
          @csrf
          Heading:<br>
           <input type="text" name="heading" required class="UnicodeNepali"><br>
          Notice:<br>
          <input type="text" name="notice" required class="UnicodeNepali"   ><br>

          <input type="submit" name="submit" class="btn btn-success" value="Add">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<table class="table">
	<thead>
		<th><h3>Heading</h3></th>
		<th><h3>Notice</h3></th>
		<th><h3>Action</h3></th>
	</thead>

@foreach($notices as $notice)
<tr><td>{{$notice->heading}}</td><td><p>{{$notice->notice}}</p>
</td>
<td>
  <i  style="margin-left: 20px;" type="button" class="fa fa-edit" data-toggle="modal" data-target="#notice{{$notice->id}}"></i>
  <a href="/notice/delete/<?php echo $notice->id; ?>"> <i class="fa fa-trash"></i> </a>
</td>
</tr>
@endforeach
</table>
@foreach($notices as $notice)
<!-- The Modal -->
<div class="modal" id="notice{{$notice->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Notice</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group editNotice" method="post" action="/editNotice">
          @csrf
          {{method_field('patch')}}
                     

          <input type="text" name="heading" class="UnicodeNepali" ><br>
          <input type="text" name="notice" placeholder="{{$notice->notice}}" class="UnicodeNepali"><br>
          <input type="text" name="id" value="{{$notice->id}}" hidden>
          <input type="submit" name="submit" value="submit" class="form-control">

        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

@endforeach
 
@endsection