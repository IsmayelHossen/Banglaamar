@extends('layouts.app')

@section('content')
       <script>
  $.validate({
    lang: 'en'
  });
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
                    <div class="col-sm-12 col-lg-12">
                    <h3>Update Opinion</h3>
                   @if (session('status'))
                     <div class="alert alert-success">
                     {{ session('status') }}
                         </div>
                            @endif
                     <div class="table-responsive">
               <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
            <thead>

               <tr>
                <th>Id</th>
                  <th>Name</th>

                  <th>Opinion Title</th>
                  <th>Opinion Details</th>
                  <th>Action</th> 
                  <th>Status</th>

               </tr> 

            </thead>

            <tbody>

               @foreach($manage as $user)

                  <tr>
                      <td>{{ $user->id }}</td>
 
                     <td>{{ Str::substr($user->name,0,50) }}</td>

                     <td>{{ Str::substr($user->email,0,60) }}</td>
                          <td>{{ Str::substr($user->text1,0,60) }}</td>

                     
                      <td>
                        <?php $rand=rand(0,1000); ?>
                      <button  data-toggle="modal" data-target="#default-modal{{$rand}}"><i class="fa fa-pencil"></i></button>
                      </td>
                      <td>

                        <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>

                     </td>

                  </tr>

                            <!-- Modal -->
                         
                            <div class="modal fade" id="default-modal{{$rand}}" tabindex="-1" role="dialog" aria-labelledby="modal-label">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                          <form class="form-horizontal" method="post" action="{{route('opinion_edit')}}">
                                        @csrf
                                        <input style="display:none" type="text" name="id" value="{{$user->id}}">
                                        <div class="form-group">
                                            <label for="email2" class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" value="{{$user->name}}" id="name" placeholder="Name" data-validation="required">
                                            </div>

                                        </div>
                                   



                                        <div class="form-group">
                                            <label for="password2" class="col-sm-2 control-label">Opinion Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="email" class="form-control" value="{{$user->email}}" id="email" placeholder="Opinion Title" data-validation="required">
                                            </div>
                                        </div>
                                        
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
                                                <textarea class="col-sm-9 form-control col-sm-offse text1"  name="text1" rows="3" id="text9" placeholder="Write a comment"  data-validation="required">{{$user->text1}}</textarea>
                                            </div>
                                            
                                        </div>
                                            <style type="text/css">
                              .form-control {
                                margin-bottom:10px;
                              }
                            </style>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10 text-right">
                                                <button type="submit" id="allsave" class="btn btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                  </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- model end -->

               @endforeach

            </tbody>

        </table>
         </div>
        <script type="text/javascript">
            

  $(function() {

    $('.toggle-class').change(function() {

        var status = $(this).prop('checked') == true ? 1 : 0; 

        var user_id = $(this).data('id'); 

         

        $.ajax({

            type: "GET",

            dataType: "json",

            url: '/changeStatus',

            data: {'status': status, 'user_id': user_id},

            success: function(data){

              console.log(data.success);

            }

        });

    })

  })

</script>
        
                  


                    <!-- =-=-=-=-
                        =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                    <!--TIMELINE left-->
                    
            <!-- RIGHT SIDEBAR -->
            <!-- ========================================================= -->
            
                            </div>
                        </div>

                    </div>
                
            
@endsection
