<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css ') }}" integrity="" crossorigin="anonymous">
       <!--Magnific popup--image-->
            <link rel="stylesheet" href="{{ asset('public/admin')}}/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="{{ asset('public/admin')}}/vendor/magnific-popup/magnific-popup.css">
    <!--TEMPLATE css-->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="{{ asset('public/admin')}}/stylesheets/css/style.css">
    <!--Magnific popup--image end -->
    <link rel="stylesheet" href="{{ asset('public/css/style.css ') }}" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>বাংলা আমার</title>
  </head>
  <body>

    <div class="container mobilemenu">
           <div class="row">
            <div class="col-6 bangladate ">
                <h3><span style="font-family:SolaimanLipi; font-size:15px; margin: 0 0 0 5px; color: #000">শনিবার <span style="color: #cc0000">●</span> ২৩ মে ২০২০ <span style="color: #cc0000">●</span> ৯ জ্যৈষ্ঠ ১৪২৭</span>
                    </h3>
            </div>
             <div class="col-6 socialicon">
                <div class="icon-bar" style="padding-top:6px;float: right;">
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
               </div>
            </div>
          </div>
      <a href=""><img src="{{ asset('public/images/logo.png')}}" class="mobilemenu-img"></a>
       <form class="form-inline"  action="{{ route('search')}}" style="margin:0 auto;display:block;margin-top:10px;margin-bottom:5px;" method="get">
               @csrf
                      <div class="row" style="margin-left:4px;">
               <input class="col-9 form-control" type="text" name="search" placeholder="কী খুঁজত চান??">
               <input class=" col-3  " type="submit" value="খুঁজুন">
             </div>
               </form>

               <div class="container navbar2 " >
       <div class=" dropdown1">
    <button class="dropbtn1">সারাদেশ
      <i class="fa fa-caret-down"></i>
    </button>
    <div class=" dropdown-content1">
     <div class="container">
      <div class="row">
         @if(!empty($wholebdm1))
        @foreach($wholebdm1 as $wholebd1)
         <div class="col extramenu">
        

            <a href="{{ route('individiual',[$wholebd1->type1,$wholebd1->type1]) }} "  class=" alert alert-primary1">{{ $wholebd1->type1 }}</a>
          <a href="{{ route('individiual',[$wholebd1->type2,$wholebd1->type2]) }} "  class=" ">{{ $wholebd1->type2 }}</a> 
          <a href="{{ route('individiual',[$wholebd1->type3,$wholebd1->type3]) }} "  class=" ">{{ $wholebd1->type3 }}</a> 
          <a href="{{ route('individiual',[$wholebd1->type4,$wholebd1->type4]) }} " >{{ $wholebd1->type4 }}</a>
          <a href="{{ route('individiual',[$wholebd1->type5,$wholebd1->type5]) }} "  class=" ">{{ $wholebd1->type5 }}</a> 
          <a href="{{ route('individiual',[$wholebd1->type6,$wholebd1->type6]) }} "  class=" alert ">{{ $wholebd1->type6 }}</a>
          <a href="{{ route('individiual',[$wholebd1->type7,$wholebd1->type7]) }} "  class=" ">{{ $wholebd1->type7 }}</a> 
               <a href="{{ route('individiual',[$wholebd1->type8,$wholebd1->type8]) }} "  class=" ">{{ $wholebd1->type8 }}</a> 
          <a href="{{ route('individiual',[$wholebd1->type9,$wholebd1->type9]) }} "  class=" alert ">{{ $wholebd1->type9 }}</a>
          <a href="{{ route('individiual',[$wholebd1->type10,$wholebd1->type10]) }} "  class=" ">{{ $wholebd1->type10 }}</a> 
           <a href="{{ route('individiual',[$wholebd1->type11,$wholebd1->type11]) }} "  class=" ">{{ $wholebd1->type11 }}</a>

        </div>
        @endforeach
        @endif
  <div class="row">
            @if(!empty($wholebdm2))
        @foreach($wholebdm2 as $wholebd2)
         <div class="col extramenu">
        

            <a href="{{ route('individiual',[$wholebd2->type1,$wholebd2->type1]) }} "  class=" alert alert-primary1">{{ $wholebd2->type1 }}</a>
          <a href="{{ route('individiual',[$wholebd2->type2,$wholebd2->type2]) }} "  class=" ">{{ $wholebd2->type2 }}</a> 
         <a href="{{ route('individiual',[$wholebd2->type3,$wholebd2->type3]) }} "  class=" ">{{ $wholebd2->type3 }}</a> 
          <a href="{{ route('individiual',[$wholebd2->type4,$wholebd2->type4]) }} "  class=" ">{{ $wholebd2->type4 }}</a> 
           <a href="{{ route('individiual',[$wholebd2->type5,$wholebd2->type5]) }} "  class=" ">{{ $wholebd2->type5 }}</a> 
           <a href="{{ route('individiual',[$wholebd2->type6,$wholebd2->type6]) }} "  class=" ">{{ $wholebd2->type6 }}</a> 
            <a href="{{ route('individiual',[$wholebd2->type7,$wholebd2->type7]) }} "  class=" ">{{ $wholebd2->type7 }}</a> 
            <a href="{{ route('individiual',[$wholebd2->type8,$wholebd2->type8]) }} "  class=" ">{{ $wholebd2->type8 }}</a> 
              <a href="{{ route('individiual',[$wholebd2->type9,$wholebd2->type9]) }} "  class=" ">{{ $wholebd2->type9 }}</a> 
                <a href="{{ route('individiual',[$wholebd2->type10,$wholebd2->type10]) }} "  class=" ">{{ $wholebd2->type10 }}</a> 
        </div>
        @endforeach
        @endif

 </div>
         </div>
      </div>
    </div>
  </div>

    @if(!empty($catmobile))
  @foreach($catmobile as $catmobile)
  <a href="{{ route('individiual',[$catmobile->categories,$catmobile->bangla]) }}">{{ $catmobile->bangla }}</a>
  @endforeach
  @endif
  
 
</div> 
       
    </div>
    <div class="container top-header">
        <div class="row">
            <div class="col-sm-4 bangladate ">
                <h3><span style="font-family:SolaimanLipi; font-size:15px; margin: 0 0 0 5px; color: #000">শনিবার <span style="color: #cc0000">●</span> ২৩ মে ২০২০ <span style="color: #cc0000">●</span> ৯ জ্যৈষ্ঠ ১৪২৭</span>
                    </h3>
            </div>
            <div class="col-sm-4 searchoption">
                     <form class="form-inline"  action="{{ route('search')}}" style="margin-top:10px;margin-bottom:5px;" method="get">
                      @csrf
                      <div class="row" style="margin-left:4px;">
               <input class="col-md-9 form-control" type="text" name="search" placeholder="কী খুঁজত চান??" data-validation="required">
               <input class=" col-md-3 btn btn-default  " type="submit" value="খুঁজুন">
             </div>
               </form>
            </div>
            <div class="col-sm-4 socialicon">
                <div class="icon-bar">
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
           
                  <a href="#" class="google"><i class="fa fa-google"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
               </div>
            </div>
        
     </div>
    </div>
    <div class="container logo">
        <div class="col">
       <a href="{{ url('/') }}"> <img src="{{ asset('public/images/logo.png') }}" align="বাংলা আমার"></a>
        </div>
    </div>
    <div class="container navbar1 " >
       <div class=" dropdown1">
    <button class="dropbtn1">সারাদেশ
      <i class="fa fa-caret-down"></i>
    </button>
    <div class=" dropdown-content1">
     <div class="container">
      <div class="row">
        <style type="text/css">
         .alert-primary1 {
   /* background-color: #e3dbdb; */
  border-color: #8e8585;
   margin-top: 13px;
}
        </style>
            @if(!empty($wholebd))
        @foreach($wholebd as $wholebd)
         <div class="col extramenu">
        

            <a href="{{ route('individiual',[$wholebd->type1,$wholebd->type1]) }} "  class=" alert alert-primary1">{{ $wholebd->type1 }}</a>
          <a href="{{ route('individiual',[$wholebd->type2,$wholebd->type2]) }} "  class=" ">{{ $wholebd->type2 }}</a> 
          <a href="{{ route('individiual',[$wholebd->type3,$wholebd->type3]) }} "  class=" ">{{ $wholebd->type3 }}</a> 
           <a href="{{ route('individiual',[$wholebd->type4,$wholebd->type4]) }} "  class=" ">{{ $wholebd->type4 }}</a> 
           <a href="{{ route('individiual',[$wholebd->type5,$wholebd->type5]) }} "  class=" ">{{ $wholebd->type5 }}</a> 
            <a href="{{ route('individiual',[$wholebd->type6,$wholebd->type6]) }} "  class=" ">{{ $wholebd->type6 }}</a> 
            <a href="{{ route('individiual',[$wholebd->type7,$wholebd->type7]) }} "  class=" ">{{ $wholebd->type7 }}</a> 
           <a href="{{ route('individiual',[$wholebd->type8,$wholebd->type8]) }} "  class=" ">{{ $wholebd->type8 }}</a> 
            <a href="{{ route('individiual',[$wholebd->type9,$wholebd->type9]) }} "  class=" ">{{ $wholebd->type9 }}</a>
            <a href="{{ route('individiual',[$wholebd->type10,$wholebd->type10]) }} "  class=" ">{{ $wholebd->type10 }}</a> 
            <a href="{{ route('individiual',[$wholebd->type11,$wholebd->type11]) }} "  class=" ">{{ $wholebd->type11 }}</a>
        </div>
             @endforeach
        @endif
     

 
         </div>
      </div>
    </div>
  </div>
  @if(!empty($cat))
  @foreach($cat as $cat)
  <a href="{{ route('individiual',[$cat->categories,$cat->bangla]) }}">{{ $cat->bangla }}</a>
  @endforeach
  @endif
  
  
 
</div> 
<div class="container latestheading">
  <div class="row">
  <div class="col-md-2 latestheading1"><h6 style="padding-top:8px;">ব্রেকিং নিউজ</h6></div>
  <div class="col-md-10 latestheading2">
    <marquee direction="left" onmouseout="this.start()" onmouseover="this.stop()" scrolldelay="1" scrollamount="4">
         @if(!empty($breakingnews))
         @foreach($breakingnews as $breakingnews)       <!-- End Page-->
        <span><a href="{{ url('details/'.$breakingnews->postid) }}">●&nbsp;{{ $breakingnews->postt}} </a>&nbsp;&nbsp;&nbsp;</span>
        @endforeach
        @endif
                  <!-- End Page-->

                  </marquee>
  </div>
</div>
</div>
<!--yield -->
@yield('content1')
 @yield('content2')


<!-- footer  -->
<div class="container-fluid footer" >
    <div>

        <h3 class="logo">বাংলা আমার</h3>
        <div class="row">
            <div class="col-sm-12">
                <h4 class="authorname">সম্পাদক ও প্রকাশক: ইসমাইল হোসেন</h4>
            </div>
        </div>
          <div class="row">
            <div class="col-sm-12">
                <div class="container" style="text-align:center;">
                <h5>যোগাযোগ</h5>
                <p>সেক্টর -৬ উওরা,আজমপুর, ঢাকা</p>
  <p>মোবাইল ঃ০১৯৫২-১৫২৮৮৪</p>
    <p>&copy; 2020.All Right Reserved.</p>
      <a class="btn btn-primary popup-gmaps" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254083.63470273896!2d24.76009565589652!3d60.16370876542306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46920bc796210691%3A0xcd4ebd843be2f763!2sHelsinki%2C+Finlandia!5e0!3m2!1ses!2ses!4v1480450323000" style="text-align:right;color: white">Google Map</a>

            </div>
        </div>
        </div>
    </div>
</div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('public/js')}}/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{asset('public/js/fontmain.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('public/js/bootstrap.min.js ') }}" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!--Gallery with Magnific popup-->
<script src="{{ asset('public/admin') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!--Examples-->
<script src="{{ asset('public/admin') }}/javascripts/examples/ui-elements/lightbox.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
     <script>
  $.validate({
    lang: 'en'
  });
</script>
  </body>
</html>