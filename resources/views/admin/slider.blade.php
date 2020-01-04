@extends('admin.admindash')
@section('services')
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addSlider">
Add Footer
</button>

<!-- The Modal -->
<div class="modal" id="addSlider">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Slider</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group" action="/addSlider" method="post" enctype="multipart/form-data">
          @csrf
 
          Slider:
          <input type="file" name="slider" class="form-control">
          <input type="submit" name="submit">
 
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
 		<th><h3>Slider</h3></th>
 		<th></th>
		<th><h3>Action</h3></th>
	</thead>

@foreach($sliders as $slider)
<tr> <td><p>{{$slider->slider}}</p>
</td>
<td>
  <i  style="margin-left: 20px;" type="button" class="fa fa-edit" data-toggle="modal" data-target="#slider{{$slider->id}}"></i>
  <a href="/slider/delete/<?php echo $slider->id; ?>"> <i class="fa fa-trash"></i> </a>
</td>
</tr>
@endforeach
</table>
@foreach($sliders as $slider)
<!-- The Modal -->
<div class="modal" id="slider{{$slider->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Slider</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group " method="post" action="/editSlider">
          @csrf
          {{method_field('patch')}}
                     

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