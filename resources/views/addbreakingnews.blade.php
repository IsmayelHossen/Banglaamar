@extends('layouts.app')

@section('content')

<div class="content">
   @if (session('status'))
                     
                       <button id="pnotify-position-topRight" class="btn btn-wide btn-o btn-primary">{{ session('status') }}</button>  
                         
                            @endif
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12 col-md-8 col-md-offset-2">
                                       <div class="panel b-primary bt-md">
                        <div class="panel-content">
                            <div class="row">

                             
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
                                    <form class="form-horizontal" method="post" action="{{ route('breakinnewssave')}}" enctype="multipart/form-data">
                                           @csrf
                                        
                                        <div class="form-group">
                                            <label for="postid" class="col-sm-2 control-label">Postid</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="postid" class="form-control"   id="name" placeholder="Postid" data-validation="required">
                                            </div>

                                        </div>
                                       @error('postid')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                       @enderror
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-2 control-label">Post Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="postt" class="form-control"  id="postt" placeholder="Post Title" data-validation="required">
                                            </div>

                                        </div>
                                       @error('postt')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                       @enderror
                                       
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-2 control-label">International National</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="international_national" class="form-control"  id="international_national" placeholder="international_national" data-validation="required">
                                            </div>

                                        </div>
                                       @error('international_national')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                       @enderror
                                       <div class="form-group">
                                            <label for="email2" class="col-sm-2 control-label">Country</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="country" class="form-control"  id="country" placeholder="Country" data-validation="required">
                                            </div>

                                        </div>
                                       @error('country')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                       @enderror
                                        <div class="form-group">
                                            <label for="District" class="col-sm-2 control-label">District</label>
                                            <div class="col-sm-10">
                                                                             
                                             <select name="district" class="form-control">
                                              @if(!empty($wholebd))
                                              @foreach($wholebd as $wholebd)
                                               <option value=" " style="color:red">Select</option>
                            <option value="{{ $wholebd->type1}}" style="color:red">{{ $wholebd->type1}}</option>
                            <option value="{{ $wholebd->type2}}">{{ $wholebd->type2}}</option>
                              <option value="{{ $wholebd->type3}}">{{ $wholebd->type3}}</option>
                                <option value="{{ $wholebd->type4}}">{{ $wholebd->type4}}</option>
                             <option value="{{ $wholebd->type5}}">{{ $wholebd->type5}}</option>
                                <option value="{{ $wholebd->type6}}">{{ $wholebd->type6}}</option>
                                  <option value="{{ $wholebd->type7}}">{{ $wholebd->type7}}</option>
                                <option value="{{ $wholebd->type8}}">{{ $wholebd->type8}}</option> 
                                 <option value="{{ $wholebd->type9}}">{{ $wholebd->type9}}</option>
                                <option value="{{ $wholebd->type10}}">{{ $wholebd->type10}}</option>
                                 <option value="{{ $wholebd->type11}}">{{ $wholebd->type11}}</option>
                              @endforeach
                              @endif
                          </select>

                                            </div>

                                        </div>
                                       @error('District')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                       @enderror



                                        <div class="form-group">
                                            <label for="password2" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-10">
                                      
                                                <input type="file" class="form-control" name="image" id="image_file" multiple>
                                            </div>
                                        </div>
                                          @error('email')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                          @enderror
                                        <div class="form-group">
                                            <label for="select2-example-multiple" class="col-sm-2 control-label">Multiple</label>
                                            <div class="col-sm-10">
                                                
                                                    
                                             <select name="topnormal" class="form-control">
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
                                         @error('topnormal')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                          @enderror
                                          <div class="form-group">
                                            <label for="select2-example-multiple" class="col-sm-2 control-label">Categories</label>
                                            <div class="col-sm-10">
                                                <select name="categories" class="form-control" >
                                                    
                             <option value="national">National</option>
                            <option value="sports">Sports</option>
                            <option value="international">International</option>
                            <option value="politics">Politics</option>
                            <option value="crime">Crime</option>
                            <option value="entairtainment">Entairtainment</option>
                              <option value="economics">Economics</option>


                                             </select>
                                            </div>
                                        </div>
                                         @error('email')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                          @enderror

                                         <div class="form-group">
                                             <label for="password2" class="col-sm-2 control-label">Post Details</label>
                                             <div class="col-sm-10">
                                                <textarea class="col-sm-9 form-control col-sm-offset"  name="postd" rows="3" id="text1" placeholder="Write a comment" data-validation="required"></textarea>
                                            </div>
                                            
                                        </div>

                                            @error('text1')
                      <strong class="alert-danger">{{ $message }}</strong>
                           @enderror
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10 text-right">
                                                <button type="submit" id="allsave" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
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
