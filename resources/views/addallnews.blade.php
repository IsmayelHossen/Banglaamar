@extends('layouts.app')

@section('content')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>//tinymce.init({ selector:'textarea.text1' });

// tinymce.init({
//   selector: "textarea.text1",  // change this value according to your HTML
//   plugins: "save",
//   toolbar: "save"
// });
</script>
<div class="content">
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

                              @if (session('status'))
                     <div class="alert alert-success">
                     {{ session('status') }}
                         </div>
                            @endif
                                <div class="col-md-6 col-sm-6">
                                    <h4>Add Opinion News</h4>
                      
                                </div>
                                <div class="col-md-6 col-sm-6"><a href="" class="btn bg-primary col-sm-offset-3">Manage Brand</a></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="post" action="{{route('allnewssave')}}">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" pattern="^([a-zA-Z0-9)$" id="name" placeholder="Name" data-validation="required">
                                            </div>

                                        </div>
                                       @error('name')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                       @enderror



                                        <div class="form-group">
                                            <label for="password2" class="col-sm-2 control-label">Opinion Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="email" class="form-control" id="email" placeholder="Opinion Title" data-validation="required">
                                            </div>
                                        </div>
                                          @error('email')
                                            <strong class="alert-danger">{{ $message }}</strong>
                                          @enderror
                                       <!-- <div class="form-group">
                                            <label for="select2-example-multiple" class="col-sm-2 control-label">Multiple</label>
                                            <div class="col-sm-10">
                                                <select name="country" class="form-control" >
                                                    
                                             <option value="AI" >Anguilla</option>
                                             <option value="AG">Antigua and Barbuda</option>
                                             </select>
                                            </div>
                                        </div> -->
                                         <div class="form-group">
                                             <label for="password2" class="col-sm-2 control-label">Text</label>
                                             <div class="col-sm-10">
                                                <textarea class="col-sm-9 form-control col-sm-offse text1"  name="text1" rows="3" id="text9" placeholder="Write a comment"  data-validation="required"></textarea>
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
