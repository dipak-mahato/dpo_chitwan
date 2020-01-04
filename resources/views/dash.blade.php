 <!DOCTYPE html>
 <html>
 <head>

 	<title>
 		
 	</title>
    <meta charset="utf-8"> 	
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">

<!-- jQuery library -->
 <script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>


<!-- Popper JS -->
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>

<!-- Latest compiled JavaScript -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script> 
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
 
   <script type="text/javascript">
$(document).ready(function () {
    $('video').on('play', function (e) {
        setTimeout(function() {
          $('#myCarousel').carousel('pause'); 
        }, 500);
    });
 
    $('video').on('stop pause ended', function (e) {
      $("#myCarousel").carousel();
    });
}); 
</script>

 



 </head>
 <body class="container">
<div class="text-danger text-center">
	<h2>सेवा सुविधाको बिबरण</h2>
</div>
  
   <div class="row"><div class="col-lg-8">
		 					<table class="table table-striped table1">
				    <thead>
					<tr>
 					    <th style="width:16%;">सेवा सुविधाको बिबरण</th>
					    <th style="width:21%;">आवश्यक पर्ने कागजपत्र र प्रमाणहरु</th>
					    <th style="width:14%;">लाग्ने शुल्क</th>
					    <th style="width:14%;">लाग्ने समय</th>
					    <th style="width:13%;">जिम्मेवार कर्मचारी शाखा / उप-शाखा</th>
					    <th style="width:10%;">गुनासो सुन्ने अधिकारी</th>
					    <th style="width:12%;">कैफियत</th>
					</tr>
				    </thead>
				<tbody>
					<tr>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>

					</tr>
					<tr>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
					</tr>
					<tr>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
					</tr>
					<tr>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
						<td>sss</td>
					</tr>
				</tbody>
				

				</table>
	</div>


	<div class="col-lg-4">

		 	
<!--Carousel Wrapper-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <video  width="100%" autoplay  muted controls>
        <source src="{{asset('flags/vid.mp4')}}" type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
      <video width="100%" autoplay   muted  >
        <source src="{{asset('flags/vid2.mp4')}}" type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
      <video width="100%" autoplay   muted  >
        <source src="{{asset('flags/vid.mp4')}}" type="video/mp4" />
      </video>
    </div>
    <div class="carousel-item">
 <img src="{{asset('flags/sd2.jpg')}}" height="500px" width="600px">
    </div>
      </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"  ></span>
    <span class="sr-only">Prehttps://www.w3schools.com/html/tryit.asp?filename=tryhtml5_video_autoplayvious</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->
	</div>
	
</div>



 </body>
 </html>