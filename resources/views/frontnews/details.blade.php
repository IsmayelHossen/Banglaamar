@extends('frontnews.newshome')

@section('content1')
<div class="container">
	
	<h5 class="detailsheading">{{ $details->postt}}</h5>
	<div class="row">
    <div class="col-md-2">
       <div class="card">

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="https://meal-management.000webhostapp.com/mcount.php" 
    data-layout="button_count">
  </div>
        <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button_count&size=small&width=95&height=20&appId" width="95" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            
       </div>
    </div>
		<div class="col-md-6">
          <div class="card" style="width:100%">
     <img class="card-img-top" src="{{ asset($details->image) }}" alt="Card image" style="width:100%">
     <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">{{ $details->postdetails }}</p>
      
    </div>
  </div>
  <!-- commen-->
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
<div class="fb-comments" data-href="http://localhost/newspaper/details/{{ $details->postid }}" data-numposts="5" data-width=""></div> <!-- comment end-->
   </div>

			 
		<div class="col-md-4">
			
			  <div class="card">

     <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">সর্বশেষ খবর</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">সর্বাধিক পঠিত</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">আলোচিত</a>
  </li>
 
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="home">
  	<ul class="list-group">
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li ><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	 <li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li ><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	 <li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li ><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	
  </ul>
  </div>
  <div class="tab-pane container fade" id="menu1">
  	<ul class="list-group">
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  </ul>
  </div>
  <div class="tab-pane container fade" id="menu1">
  	<ul class="list-group">
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  	<li><a href="">আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</a></li>
  </ul>
  </div>
  
   </div>
           <div class="reader">
    	<h5>পাঠকের লেখা</h5>
    	<div class="row">
    		<div class="col-4"><img class="card-img-top" src="{{ asset('public/images/home3.jpg') }}" alt="Card image" style="width:100%"></div>
    		<div class="col-8"><p>আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস
    		আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</p></div>
    	</div>
    	 <div class="row">
    		<div class="col-4"><img class="card-img-top" src="{{ asset('public/images/home3.jpg') }}" alt="Card image" style="width:100%"></div>
    		<div class="col-8"><p>আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস
    		আজ পবিত্র জুমাতুল বিদা ও আল কুদস দিবস</p></div>
    	</div>
    </div>

    <div class="card">
			<iframe src="https://calendar.google.com/calendar/embed?height=250&amp;wkst=1&amp;bgcolor=%2333B679&amp;ctz=Asia%2FDhaka&amp;showTitle=0&amp;showNav=1&amp;showPrint=0&amp;showCalendars=1&amp;showTz=0&amp;showDate=1&amp;showTabs=0&amp;hl=bn" style="border:solid 1px #777" width="350" height="250" frameborder="0" scrolling="no"></iframe>
		</div>
		<div class="card">
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fmcubesit%2F&tabs=timeline&width=350&height=200&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			
		</div>

       <!-- end col-3 -->
		</div>

</div>
</div>
<div class="container">
  <h3>Related News</h3>
  <div class="row">
    @if(!empty($related))
    @foreach($related as $row)
    <div class="col-md-3">
         <div class="card" style="width:100%">
     <img class="card-img-top" src="{{ asset($row->image) }}" alt="Card image" style="width:100%">
     <div class="card-body">
      <h5 class="card-title">{{ $row->postt}}</h5>
      <p class="card-text">{{ Str::substr($row->postdetails,0,110)}}<a href="{{ url('details/'.$row->postid) }}" >বিস্তারিত..</a></p>
      
    </div>
  </div>
    </div>
  @endforeach
  @endif
    
    
    

    
  </div>
  </div>

@endsection