@extends('admin.admindash')

@section('services')

<p>Services</p>
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addService">
Add Services
</button>
<!-- The Modal -->
<div class="modal" id="addService">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Service</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group" action="/addService" method="post">
          @csrf
                    serial no:<br>
        <input type="text" name="s_n"   class="UnicodeNepali"><br>
          Service:<br>
        <input type="text" name="service"   class="UnicodeNepali"><br>
        Required Document:<br>
        <textarea type="text" name="document"   class="UnicodeNepali"></textarea><br>
        Rate:<br>
        <input type="text" name="rate"   class="UnicodeNepali">
        <br>Time:<br>
        <input type="text" name="time"   class="UnicodeNepali">
        <br>Responsibility:<br>
        <input type="text" name="responsible"   class="UnicodeNepali">
        <br>Listener:<br>
        <input type="text" name="listener"   class="UnicodeNepali">
        <br>related office:<br>
        <input type="text" name="related_office"   class="UnicodeNepali">
        <br>remarks:<br>
         <input type="text" name="remarks"  class="UnicodeNepali">   
         <input type="submit" name="submit" class="btn btn-success">
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<?php 
$count=1;
 ?>
<table class="table">
	<tr>
		<th>S.N</th>
		<th>Service</th>
		<th>Action</th>
	</tr>

	@foreach($services as $service)
     
     <tr>
     	<td>{{$count++}}</td>
     	<td>{{$service->service}}</td>
     	<td><i class="fa fa-trash"></i>
               <i  style="margin-left: 20px;" type="button" class="fa fa-edit" data-toggle="modal" data-target="#service{{$service->id}}"></i> 
        </td>
     </tr>
  @endforeach   

   </table>
  @foreach($services as $service)

     <!-- The Modal -->
<div class="modal" id="service{{$service->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Notice</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-group myform" method="post" action="/editService">
          @csrf
          {{method_field('patch')}}
          services:<br>
        <input type="text" name="service" placeholder="{{$service->service}}" class="UnicodeNepali"><br>
        Required Document:<br>
        <textarea type="text" name="document" placeholder=" {{$service->document}} " class="UnicodeNepali"></textarea><br>
        Rate:<br>
        <input type="text" name="rate" placeholder="{{$service->rate}}" class="UnicodeNepali">
        <br>Time:<br>
        <input type="text" name="time" placeholder="{{$service->time}}" class="UnicodeNepali">
        <br>Responsibility:<br>
        <input type="text" name="responsible" placeholder="{{$service->responsible}}" class="UnicodeNepali">
        <br>Listener:<br>
        <input type="text" name="listener" placeholder=" " class="UnicodeNepali">
        <br>related office:<br>
        <input type="text" name="related_office" placeholder="{{$service->related_office}}" class="UnicodeNepali">
        <br>remarks:<br>
        <input type="text" name="remarks" placeholder="{{$service->remarks}}" class="UnicodeNepali">   
        <input type="text" name="id" value="{{$service->id}}" hidden>  
        <input type="submit" name="submit" class="btn btn-success">
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