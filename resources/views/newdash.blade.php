  <!DOCTYPE html>
 <html>
 <head>

 	<title>
 		DPO
 	</title>
    <meta charset="utf-8"> 	
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

<!-- custom style --> 
<link rel="stylesheet" href="{{asset('/css/style.css')}}">

<!-- jQuery library -->
 <script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>


<!-- Popper JS -->
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>

<!-- Latest compiled JavaScript -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<!-- custom javascript --> 
<script src="{{asset('/js/script.js')}}"></script>


 <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>

 
     <script type="text/javascript">
 
      $(document).ready(function(){

 $("#demo").on('slide.bs.carousel',function(e){
   var d= e.relatedTarget.children;
   console.log(d[0].nodeName);
   if (d[0].nodeName=='IMG') {
  
   }
   if(d[0].nodeName=='VIDEO'){
      d[0].currentTime = 0;
     $('#demo').carousel('pause');
    d[0].play();

     
    
   }

});
 
 
  });
    </script>

 </head>
 <body class="container-fluid">
 
    


<?php
if (!empty($sliders)) {
  foreach ($sliders as $slides) {
     $image = $slides->slider;

    //to check filetype
    if (preg_match('/^.*\.(mp4|mov|mpg|mpeg|wmv|mkv|webm)$/i', $image)) {
      $filetype = "video";
} elseif (preg_match('/^.*\.(gif|png|jpg|jpeg)$/i', $image)) {
  $filetype = "image";
} elseif (preg_match('/^.*\.(mp3)$/i', $image)) {
  $filetype = "audio";
} else {
  $filetype = "unknown";
}
 if($filetype=="video"){ ?>


   <script type="text/javascript">
 
      $(document).ready(function(){

        $("#video{{$slides->id}}").on('play',function(){
  $('#demo').carousel('pause');
  });
          $("#video{{$slides->id}}").on('pause ended',function(){
   
  $('#demo').carousel();
  
  });
 
  });
    </script>
 
  <?php
 }
 
}}
?>

  
 <div class="row top">
 	 	
 	 	<div class="flag  col-sm-2 flag1">
	   		<img src="{{asset('flags/flag1.gif')}}"  height="100%" width="auto">
        </div>
	   
	   <div class="flag col-sm-8   ">
	      <div class="row">

			   	<div class="col-sm-3 flag flag2" >
			   		<img src="{{asset('flags/logo4.svg')}}" height="100%" width="auto">
			   	</div>

			   	<div class="col-sm-6">
					    <h6 class="top_head" >नेपाल सरकार</h6>
					    <h5 class=" top_head" >गृह मन्त्रालय </h5>
					    <h4 class=" top_head" >जिल्ला प्रहरी कार्यालय चितवन</h4>
			   	</div>

			   	<div class="col-sm-3 flag"><img src="{{asset('flags/logo3.jpg')}}" height="100%" width="auto">
			   	</div>

		   </div>  
 	   </div>
	    
	    <div class="flag col-sm-2 ">
	   		<img src="{{asset('flags/flag2.gif')}}" height="100%" width="auto">
	    </div>
  </div>
    <div class="row middle">
    	<div class="col-lg-8 ">
    				<table class="table table-striped table1" style="width: 100%; padding: 0px; margin:0px;">
 					<tr class="tab_head">
 					    <th style="width:16%;">सेवा सुविधाको बिबरण</th>
					    <th style="width:19%;">आवश्यक पर्ने कागजपत्र र प्रमाणहरु</th>
					    <th style="width:14%;">लाग्ने शुल्क</th>
					    <th style="width:14%;">लाग्ने समय</th>
					    <th style="width:15%;">जिम्मेवार कर्मचारी शाखा / उप-शाखा</th>
					    <th style="width:10%;">गुनासो सुन्ने अधिकारी</th>
					    <th style="width:12%;">कैफियत</th>
					</tr>
 
				    		<tbody id="tab_scroll">
					@foreach($new as $item)
					<tr  >
						<td style="width:16%;"><?php echo $item->service; ?></td>
						<td style="width:19%;"><?php echo $item->document;   ?></td>
						<td style="width:14%;"><?php echo $item->rate; ?></td>
						<td style="width:14%;"><?php echo $item->time; ?></td>
						<td style="width:15%;"><?php echo $item->responsible; ?></td>
						<td style="width:10%;"><?php echo $item->listener; ?></td>
						<td style="width:12%;"><?php echo $item->remarks; ?></td>
					</tr>
					@endforeach
				</tbody>
                    </table>
     	</div>
 	<div class="col-lg-4 iv_notice">
 		<div class="i_vContainer">
 

<div id="demo" class="carousel slide" data-ride="carousel">

 
  
  <!-- The slideshow -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="{{asset('flags/sd2.jpg')}}" alt="Chicago" width="1100" height="500">
    </div>
     

<?php
if (!empty($sliders)) {
  foreach ($sliders as $slides) {
     $image = $slides->slider;

    //to check filetype
    if (preg_match('/^.*\.(mp4|mov|mpg|mpeg|wmv|mkv|webm)$/i', $image)) {
      $filetype = "video";
} elseif (preg_match('/^.*\.(gif|png|jpg|jpeg)$/i', $image)) {
  $filetype = "image";
} elseif (preg_match('/^.*\.(mp3)$/i', $image)) {
  $filetype = "audio";
} else {
  $filetype = "unknown";
}
if($filetype=="video"){
?>

    <div class="carousel-item "  >
               <video class="video-fluid" controls muted id="video{{$slides->id}}">
                 <source src="{{asset('uploads/'.$slides->slider)}}" width="1024" height="552" type="video/mp4">
               </video>  
                 </div>
<?php
}

else{  ?>

    <div class="carousel-item">
      <img src="{{asset('uploads/'.$slides->slider)}}" alt="Chicago" width="100%" height="auto">
    </div>
<?php
}
}}
?>

  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev" style="height: 50%;">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="height: 50%;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


 			
 		</div>
 		<div class="notice_board">
    <div id="demo1" class="carousel slide" data-ride="carousel">

 
  
  <!-- The slideshow -->
  <div class="carousel-inner" >

    <div class="carousel-item active"  >
<div style=" height: 400px; background-color:green;">
 
 <tr><td><h1 style="text-align: center;color:white"> gf]6L; af]8{</h1></td></tr></div>    </div>
@foreach($notices as $not) 
    <div class="carousel-item" style="height: 100%;" >
 <div style=" height: 400px; background-color:#ecdfe0" class="newclass">
<tr><th><h3 style="text-align: center;background-color: blue;color: white">{{$not->heading}}</h3></th></tr>
 <tr> <p class="par">         <?php if(strlen($not->notice)<=300){ echo $not->notice;}else{ $str = wordwrap($not->notice, 300);
$str = explode("\n", $str);
$str = $str[0] . '<span style="font-family:lohit Devanagari">....</span>';
echo $str;} ?></p></tr></div>
     </div>


    @endforeach

 
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo1" data-slide="prev" style="height: 50%;">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo1" data-slide="next" style="height: 50%;">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




 		</div>
    </div>

</div>
<?php  $count=count($foots); if($count>=1){   ?>
 <marquee class="marquee" width="105%" direction="left" height="50px" style="position: absolute; bottom: 0; background-color:blue; color:white; width: 100%;">
  @foreach($foots as $foot)
<a href="#" style="margin-left:30px;">>>>
{{$foot->footer}}
</a>
  @endforeach

  </marquee>
 <?php
}
?> 


 
 </body>
 </html>