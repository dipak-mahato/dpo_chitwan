@extends('admin.admindash')
@section('services')
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addFooter">
Add Footer
</button>

<!-- The Modal -->
<div class="modal" id="addFooter">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Footer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group" action="/addFooter" method="post">
          @csrf
 
          Footer:<br>
          <input type="text" name="footer" required class="UnicodeNepali"   ><br>

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
 		<th><h3>Footer</h3></th>
		<th><h3>Action</h3></th>
	</thead>

@foreach($footers as $footer)
<tr> <td><p>{{$footer->footer}}</p>
</td>
<td>
  <i  style="margin-left: 20px;" type="button" class="fa fa-edit" data-toggle="modal" data-target="#footer{{$footer->id}}"></i>
  <a href="/footer/delete/<?php echo $footer->id; ?>"> <i class="fa fa-trash"></i> </a>
</td>
</tr>
@endforeach
</table>
@foreach($footers as $footer)
<!-- The Modal -->
<div class="modal" id="footer{{$footer->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Footer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group " method="post" action="/editFooter">
          @csrf
          {{method_field('patch')}}
                     

           <input type="text" name="footer" placeholder="{{$footer->footer}}" class="UnicodeNepali"><br>
          <input type="text" name="id" value="{{$footer->id}}" hidden>
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