@extends('frontnews.newshome')
@section('content1')
<script src="{{asset('public/js')}}/jquery.min.js"></script>

<div class="container">
	<div class="row">
	
	<div class="col-sm-3 col-md-3">
        @if(!empty($leftnews))
        @foreach( $leftnews as $leftnews)
		 <div class="card" style="width:100%">
     <img class="card-img-top leftnews-img" src="{{ asset($leftnews->image) }}" alt="Card image" style="width:100%;">
     <div class="card-body">
      <h5 class="card-title">{{ $leftnews->postt }}</h5>
      <p class="card-text">{{ Str::substr($leftnews->postdetails,0,100) }} <a href="{{ url('details/'.$leftnews->postid) }}" >বিস্তারিত..</a></p>
      
    </div>
  </div>  
  @endforeach
  @endif

	</div>
	<div class="col-sm-6 col-md-6">
		 @if(!empty($topnew))
		 @foreach($topnew as $topnew)
		 <div class="card" style="width:100%">
     <img class="card-img-top" src="{{ asset($topnew->image) }} " alt="Card image" style="width:100%">
     <div class="card-body">
      <h5 class="card-title">{{ $topnew->postt }} </h5>
      <p class="card-text">{{ Str::substr($topnew->postdetails,0,200) }} <a href="{{ url('details/'.$topnew->postid) }}" >বিস্তারিত..</a></p>
      
    </div>
    
  </div> 
  @endforeach
  @endif
  @if(!empty($topbottom))
		 @foreach($topbottom as $topbottom)
    <div class="card" style="margin-bottom:10px;">
      <div class="row">
      	
      	 <div class="col-6">
      	 	<img class="card-img-top" src="{{ asset($topbottom->image) }}" alt="Card image" style="width:100%;height:95%;">
      	 </div>
      	 <div class="col-6">
      	 	  <p class="card-text">{{ Str::substr($topbottom->postdetails,0,200) }} <a href="{{ url('details/'.$topbottom->postid) }}" >বিস্তারিত..</a></p>

      	 </div>
    
      </div>
  </div>
        @endforeach
      @endif
      

    

	</div>
	<div class="col-sm-3 col-md-3">
		@if(!empty($rightnews))
        @foreach( $rightnews as $rightnews)
		 <div class="card" style="width:100%">
     <img class="card-img-top rightnews-img" src="{{ asset($rightnews->image) }}" alt="Card image">
     <div class="card-body">
      <h5 class="card-title">{{ $rightnews->postt }}</h5>
      <p class="card-text">{{ Str::substr($rightnews->postdetails,0,100) }} <a href="{{ url('details/'.$rightnews->postid) }}" >বিস্তারিত..</a></p>
      
    </div>
  </div> 
  @endforeach
  @endif
   
	</div>

</div>
</div>
<div class="container ">
	<div class="submain">
	<div class="row ">

	   
          <div class="col-sm-8 col-md-8">
          	<div class="row">
          		
          	@if(!empty($normal))
		 @foreach($normal as $normal)
		 <div class="col-md-6">
    <div class="card" style="margin-bottom:10px;">
      <div class="row">
      	
      	 <div class="col-md-6">
      	 	<img src="{{ asset($normal->image) }}" alt="Card image" style="width:100%;padding-bottom: 8px;">
      	 </div>
      	 <div class="col-md-6">
      	 	<h5 class="card-title">{{ $normal->postt }}</h5>
      	 	  <p class="card-text">{{ Str::substr($normal->postdetails,0,60) }} <a href="{{ url('details/'.$normal->postid) }}" >বিস্তারিত..</a></p>

      	 </div>
    
      </div>
  </div>
</div>
        @endforeach
      @endif
  
</div>
           </div>
         
          <div class="col-sm-4 col-md-4">
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
   
	</div>


    </div>
	</div>
	</div>

	<div class="container">
		<div class="navbardetails">
			<div class="row">
				<div class="col heading">
				</div>
				
					<h3 style="text-align:center;">খেলা</h3>
				
				<div class="col heading">
				</div>
			</div>
			
			<div class="row">
				@if(!empty($sports))
		 @foreach($sports as $sports)
				<div class="col-sm-6 col-md-4">
					<div class="card" style="width:100%">
     <img class="card-img-top" src="{{ asset($sports->image) }}" alt="Card image" style="width:100%">
     <div class="card-body">
      <h5 class="card-title">{{ $sports->postt }}</h5>
       <p class="card-text">{{ Str::substr($sports->postdetails,0,80) }} <a href="{{ url('details/'.$sports->postid) }}" >বিস্তারিত..</a></p>
      
		    </div>
		  </div> 

		</div>
		@endforeach
		@endif
		
		 <div class="col-sm-8 col-md-8">
          	<div class="row">
          		
          	@if(!empty($sportsnormal))
		 @foreach($sportsnormal as $sportsnormal)
		 <div class="col-md-6">
    <div class="card" style="margin-bottom:10px;">
      <div class="row">
      	
      	 <div class="col-md-6">
      	 	<img src="{{ asset($sportsnormal->image) }}" alt="Card image" style="width:100%;display:block;max-width:100%;margin-bottom:5px;">
      	 </div>
      	 <div class="col-md-6">
      	 	<h5 class="card-title">{{ $sportsnormal->postt }}</h5>
      	 	  <p class="card-text">{{ Str::substr($sportsnormal->postdetails,0,60) }} <a href="{{ url('details/'.$sportsnormal->postid) }}" >বিস্তারিত..</a></p>

      	 </div>
    
      </div>
  </div>
</div>
        @endforeach
      @endif
  
</div>
           </div>
			
		</div>
      </div>
	</div>

	<div class="container">
		<div class="navbardetails">
			<div class="row">
				<div class="col heading">
				</div>
				
					<h3 style="text-align:center;">বিনোদন</h3>
				
				<div class="col heading">
				</div>
			</div>
			
			<div class="row">
				
				@if(!empty($entairtainment))
		 @foreach($entairtainment as $entairtainment)
				<div class="col-sm-6 col-md-4">
					<div class="card" style="width:100%">
     <img class="card-img-top" src="{{ asset($entairtainment->image) }}" alt="Card image" style="width:100%">
     <div class="card-body">
      <h5 class="card-title">{{ $entairtainment->postt }}</h5>
       <p class="card-text">{{ Str::substr($entairtainment->postdetails,0,80) }} <a href="{{ url('details/'.$entairtainment->postid) }}" >বিস্তারিত..</a></p>
      
		    </div>
		  </div> 

		</div>
		@endforeach
		@endif
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					@if(!empty($entairtainment1))
		 @foreach($entairtainment1 as $entairtainment1) 
               <div class="row" style="margin-bottom:4px;">
					<div class="col-md-6">
									 	
				     <img class="card-img-top" src="{{ asset($entairtainment1->image) }}" alt="Card image" style="width:100%;margin-bottom:4px;">
				     </div>
					<div class="col-md-6">
				      <h5 class="card-title">{{ $entairtainment1->postt }}</h5>
           <p class="card-text">{{ Str::substr($entairtainment1->postdetails,0,60) }} <a href="{{ url('details/'.$entairtainment->postid) }}" >বিস্তারিত..</a></p>
				     </div>
			          </div>
			          @endforeach
			          @endif
			              
		</div>
		<div class="col-sm-6 col-md-4">
		<div class="" style="width:100%">
         <h2>ভিডিও</h2>
                           <!--ZOOM EFFECT-->
                <div class="col-sm-12 col-md-12  mt-md">
                    <div class="panel">
                        <div class="panel-content">
                            <div class="col-sm-12 col-md-12">
                               <a class="btn popup-youtube" href="https://www.youtube.com/watch?v=NGLA_MqSgWE"><img src="{{ asset('public/images/1.jpg')}}" style="max-width:300px;"></a>

                            </div>
                            <div class="col-sm-12 col-md-12">
                               <a class="btn popup-youtube" href="http://www.youtube.com/watch?v=6NC_ODHu5jg"><img src="{{ asset('public/images/2.jpg')}}" style="max-width:300px;"></a>

                              </div>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- vedio end -->


		  </div> 
       </div>

		
			
		</div>
      </div>
	</div>

	<div class="container">
		<div class="navbardetailsall">
			
			
			<div class="row">
				
				<div class="col-sm-6 col-md-3">
					
					<div class="card" style="width:100%">
						<h3>জাতীয়</h3>
					
						@if(!empty($footertop))
		 @foreach($footertop as $footertop) 
     <img class="card-img-top" src="{{ asset( $footertop->image ) }}" alt="Card image" style="width:100%;max-height:200px;">
     <div class="card-body">
      <h5 class="card-title">{{ $footertop->postt }}</h5>
      <p class="card-text">{{ Str::substr($entairtainment1->postdetails,0,120) }} <a href="{{ url('details/'.$entairtainment->postid) }}" >বিস্তারিত..</a></p>
            
      
		    </div>
		    @endforeach
		    @endif
		    <div class="navbar_categories">
		  	<ol>
		  		@if(!empty($normal2))
		 @foreach($normal2 as $normal2)
		  		<li><a href="{{url('details/'.$normal2->postid)}}">{{ $normal2->postt }}</a></li>
		  		@endforeach
		  		@endif
		  		
		  	</ul>
		  </div>
		  </div> 
		  

		</div>
		<div class="col-sm-6 col-md-3">

					<div class="card" style="width:100%">
						<h3>রাজনীতি</h3>
              @if(!empty($footertop_politic))
		 @foreach($footertop_politic as $footertop_politic) 
     <img class="card-img-top" src="{{ asset( $footertop_politic->image ) }}" alt="Card image" style="width:100%;max-height:200px;">
     <div class="card-body">
      <h5 class="card-title">{{ $footertop_politic->postt }}</h5>
      <p class="card-text">{{ Str::substr($footertop_politic->postdetails,0,120) }} <a href="{{ url('details/'.$footertop_politic->postid) }}" >বিস্তারিত..</a></p>
         @endforeach
         @endif
		    </div>
		     <div class="navbar_categories">
		  	<ol>
		  		
		  			@if(!empty($footertop_politic_n))
		 @foreach($footertop_politic_n as $normal2)
		  		<li><a href="{{url('details/'.$normal2->postid)}}">{{ $normal2->postt }}</a></li>
		  		@endforeach
		  		@endif
		  	</ul>
		  </div>
		  </div> 

		</div>
		<div class="col-sm-6 col-md-3">
		<div class="card" style="width:100%">
			<h3>অর্থনীতি</h3>
       @if(!empty($footertop_economics))
		 @foreach($footertop_economics as $footertop_economics) 
     <img class="card-img-top" src="{{ asset( $footertop_economics->image ) }}" alt="Card image" style="width:100%;max-height:200px;">
     <div class="card-body">
      <h5 class="card-title">{{ $footertop_economics->postt }}</h5>
      <p class="card-text">{{ Str::substr($footertop_economics->postdetails,0,120) }} <a href="{{ url('details/'.$footertop_economics->postid) }}" >বিস্তারিত..</a></p>
         @endforeach
         @endif
      
		    </div>
		     <div class="navbar_categories">
		  	<ol>
		  		@if(!empty($footertop_economics_n))
		 @foreach($footertop_economics_n as $normal2)
		  		<li><a href="{{url('details/'.$normal2->postid)}}">{{ $normal2->postt }}</a></li>
		  		@endforeach
		  		@endif
		  	</ul>
		  </div>
		  </div> 

		</div>
		<div class="col-sm-6 col-md-3">
		<div class="card" style="width:100%">
			<h3>আন্তর্জাতিক</h3>
			@if(!empty($footertopint))
			@foreach($footertopint as $footertopint)
     <img class="card-img-top" src="{{ asset($footertopint->image) }}" alt="Card image" style="width:100%;max-height:200px;">
     <div class="card-body">
      <h5 class="card-title">{{ $footertopint->postt}}</h5>
      <p class="card-text">{{ Str::substr($footertopint->postdetails,0,120)}} <a href="{{ url('details/'.$footertopint->postid) }}" >বিস্তারিত..</a></p>
      
		    </div>
		    @endforeach
		    @endif
		     <div class="navbar_categories">
		  	<ol>
		  
		  		@if(!empty($footertopint_n))
		 @foreach($footertopint_n as $normal2)
		  		<li><a href="{{url('details/'.$normal2->postid)}}">{{ $normal2->postt }}</a></li>
		  		@endforeach
		  		@endif
		  	</ul>
		  </div>
		  </div> 

		</div>

		
			
		</div>
      </div>
	</div>

	<div class="container">
		<div class="navbardetails">
		<div class="row">
			<div class="col-sm-9 col-md-8">
			  <div class="row">
				      <div class="col heading">
				        </div>
				
					    <h3 style="text-align:center;">মতামত</h3>
				
				         <div class="col heading">
				          </div>
			     </div>
			
				<div class="row">
					@if(!empty($opinion))
					@foreach($opinion as $op)
					 <div class="col-md-3">
					 	<div class="card">
					 		<div class="card-body">
					 	<h5 style="text-align: left;">{{$op->email}}</h5>
					 	<p>{{ Str::substr($op->text1,0,100)}}</p>
					 	<?php $rand=rand(0,100); ?>
					 	          <!--DEFAULT modal-->
					 	   <style type="text/css">.modal-dialog {margin: 1% auto;}</style>
                            <button type="button" class="btn btn-wide btn-primary btn-o" data-toggle="modal" data-target="#default-modal{{$rand}}">বিস্তারিত..</button>
                            <!-- Modal -->
                            <div class="modal fade" id="default-modal{{$rand}}" tabindex="-1" role="dialog" aria-labelledby="modal-label">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          
                                        </div>
                                        <div class="modal-body">
                                        	 <h3 style="padding-top:1px;padding-bottom:10px;text-align:center">{{$op->email}}</h3>

                                            {{$op->text1}}
                                            <h3 style="padding-top:10px;">{{$op->name}}</h3>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- model end -->
					 </div>
					 </div>
					 </div>
					 @endforeach
					 @endif

					

				</div>
				<!-- search -->
				<!-- <div class="row">
			

 <form class="form-inline" action="/action_page.php">

    <div class="form-group">
      <label for="pwd">Division</label>
   

     <select name="district" class="custom-select custom-select-sm mb-3" id="district">
      <option selected>Small Custom Select Menu</option>
      <option value="Dhaka">Dhaka</option>
      <option value="chittagong">Chittagong</option>
      <option value="Khulna">Khulna</option>
    </select>
    </div>
    <div id="abc"></div>
    
      {{$district ?? ''}}
 
    <div class="form-group">
      <label for="pwd">Password:</label>
     <select class="custom-select custom-select-sm mb-3">
     	@if(!empty($district))
      <option selected>{{$district}}</option>
      @endif
      <option value="volvo">Volvo</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
    </div>
     <div class="form-group">
      <label for="pwd">Password:</label>
     <select class="custom-select custom-select-sm mb-3">
      <option selected>Small Custom Select Menu</option>
      <option value="volvo">Volvo</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
        <script type="text/javascript">
            

  $(function() {

    $('#district').change(function() {

      

        var district= $(this).val(); 

         alert(district);

        $.ajax({

            type: "GET",

            dataType: "json",

            url: '/district',

            data: {'district': district},

            success: function(data){

              console.log(data.success);

            }

        });

    })

  })

</script>	
</div>
<div id="abc"></div> -->		
				<!-- search end -->
				
	<h3>ফটো গ্যালারি</h3>		
       <!-- photo gallary-->
       <!--MULTIPLES image gallary-->
                <div class="col-sm-12 col-md-12 mt-md">
                    <div class="panel">
                        <div class="panel-content">
                          
                            <div class="row" id="gallery">
                            	@if(!empty($photo_gallary))
                            	@foreach($photo_gallary as $photo)
                                <div class="col-xs-6 col-md-3">
                                	
                                    <a href="{{ asset($photo->image) }}" title="{{ $photo->postt}}">
                                        <img alt="{{ $photo->postt}}" src="{{ asset($photo->image) }}" class="img-responsive mb-sm photo-gallary-img" >
                                    </a>
                                </div>
                                @endforeach
                                @endif

                                


                                
                                
                            </div>
                        </div>
                    </div>
                </div>
      
       <!-- end photo gallary -->

			</div>
			<div class="col-sm-3 col-md-4" >
				<div class="card" style="margin-top:30px;display:block;text-align:center;">
			<iframe src="https://calendar.google.com/calendar/embed?height=250&amp;wkst=1&amp;bgcolor=%2333B679&amp;ctz=Asia%2FDhaka&amp;showTitle=0&amp;showNav=1&amp;showPrint=0&amp;showCalendars=1&amp;showTz=0&amp;showDate=1&amp;showTabs=0&amp;hl=bn" style="border:solid 1px #777" width="350" height="250" frameborder="0" scrolling="no"></iframe>
		</div>
		<div class="card" style="margin:0 auto;display:block;text-align:center;">
			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fmcubesit%2F&tabs=timeline&width=350&height=200&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			
		</div>
		<!-- prayer time-->

		<!-- prayer time end -->
				
			</div>

         </div>
		</div>
	</div>
@endsection