@extends('layouts.app')

@section('content')

<div class="content">
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Edit All Post</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12 col-md-8 col-md-offset-2">
                                       <div class="panel b-primary bt-md">
                        <div class="panel-content">
                            <div class="row">

                              @if (session('status'))
                     <div class="alert alert-success">
                     {{ session('status') }}
                         </div>
                            @endif
                                <div class="col-md-6 col-sm-6">
                                    <h4>Add All News</h4>
                      
                                </div>
                                <div class="col-md-6 col-sm-6"><a href="" class="btn bg-primary col-sm-offset-3">Manage Brand</a></div>
                            </div>
                            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="{{ route('editpostsave')}}" enctype="multipart/form-data">
                                           @csrf
                                        @if(!empty($editpost))

                                        <div class="form-group">
                                            <label for="email2" class="col-sm-2 control-label">Post Title</label>
                                            <div class="col-sm-10">
                                              <input type="hidden" name="postid" class="form-control" value="{{ $editpost->postid}}" id="postt" placeholder="Post Title" data-validation="required">
                                                <input type="text" name="postt" class="form-control" value="{{ $editpost->postt}}" id="postt" placeholder="Post Title" data-validation="required">
                                            </div>

                                        </div>

                                       
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-2 control-label">International National</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{ $editpost->int_nat}}" name="international_national" class="form-control"  id="international_national" placeholder="international_national" data-validation="required">
                                            </div>

                                        </div>
                                      
                                       <div class="form-group">
                                            <label for="email2" class="col-sm-2 control-label">Country</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="country" class="form-control" value="{{ $editpost->country}}"  id="country" placeholder="Country" data-validation="required">
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="District" class="col-sm-2 control-label">District</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="{{ $editpost->district}}" name="district" class="form-control"  id="district" placeholder="District" >
                                            </div>

                                        </div>


                                        <div class="form-group">
                                            <label for="password2" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-10">
                                                <img src="{{asset($editpost->image)}}" width="100px" >
                                                <input type="file" class="form-control" name="image" id="image_file" multiple>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label for="select2-example-multiple" class="col-sm-2 control-label">Top/Normal</label>
                                            <div class="col-sm-10">
                                                
                                                    
                                             <select name="topnormal" class="form-control">
                                              <option value="{{ $editpost->topnormal}}" checked>{{ $editpost->topnormal}}</option>
                            <option value="top">Top News</option>
                            <option value="leftnews">Left News</option>
                            <option value="rightnews">Right News</option>
                            <option value="topbottom">Top Bottom</option>
                            <option value="normal">normal</option>
                            <option value="FooterAT">Footer Above Top</option>
                            <option value="BreakingNews">Breaking News</option>

                          </select>
                                             
                                            </div>
                                        </div>

                                          <div class="form-group">
                                            <label for="select2-example-multiple" class="col-sm-2 control-label">Categories</label>
                                            <div class="col-sm-10">
                                                <select name="categories" class="form-control" >
                                 <option value="{{$editpost->categories }}">{{$editpost->categories }}</option>     
                             <option value="national">National</option>
                            <option value="sports">Sports</option>
                            <option value="international">International</option>
                            <option value="politics">Politics</option>
                            <option value="crime">Crime</option>
                            <option value="entairtainment">Entairtainment</option>

                                             </select>
                                            </div>
                                        </div>

                                         <div class="form-group">
                                             <label for="password2" class="col-sm-2 control-label">Post Details</label>
                                             <div class="col-sm-10">
                                                <textarea value="{{ $editpost->postt}}" class="col-sm-9 form-control col-sm-offset"  name="postd" rows="7" id="text1" placeholder="Write a comment" data-validation="required">{{ $editpost->postdetails}}</textarea>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10 text-right">
                                                <button type="submit" id="allsave" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                 /* $(document).ready(function(){
                   $('#allsave').on('click',function(){
                    var name=$('#name').val();
                    var email=$('#email').val();

                    var text1=$('#text1').val();
                    $.ajax({
                      url:"allnewssave'",
                      method:'get',

                      success:function(html){

                      };

                    });
                   });
                  }); */
                </script>
                    <!--TIMELINE left-->
                    
            <!-- RIGHT SIDEBAR -->
            <!-- ========================================================= -->
            
                            </div>
                        </div>

                    </div>
                
            
@endsection
