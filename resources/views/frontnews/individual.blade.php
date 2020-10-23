@extends('frontnews.newshome')

@section('content1')
<div class="container">
	
	<h3 style="text-align:center;padding-top:3px;">
    {{ $catb }}
  </h3>
	<div class="row">
		<div class="col-md-8">


			 
               <div class="row">
                @if(!empty($navbar))
                @foreach($navbar as $navbar1)
               	  <div class="col-md-6">
               	  	
               	  	 <div class="card">
          <div class="row">
      	  <div class="col-md-6 ">
      	 	<img  src="{{ asset( $navbar1->image) }}" alt="Card image" style="width:100%;margin-bottom:5px;">
      	    </div>
      	    <div class="col-md-6 " >
      	 	 <h5 class="card-title" style="padding-bottom: 4px;padding-left:4px;">{{ $navbar1->postt }}</h5>
      <p class="card-text">{{ Str::substr($navbar1->postdetails,0,120) }} <a href="{{ url('details/'.$navbar1->postid) }}" >বিস্তারিত..</a></p>
            

      	     </div>
              </div>
               </div>
               	  </div>
                  @endforeach
                  @endif

           {{ $navbar->links() }}

               	 
               </div>
                


			
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
@endsection