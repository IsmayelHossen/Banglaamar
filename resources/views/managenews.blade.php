@extends('layouts.app')
@section('content')

<script type="text/javascript">
    function myfile(){

        swal("Here's the title!", "...and here's the text!");
    }
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
                    <div class="col-sm-12 col-md-12">
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
                            <div class="row">
                                <div class="col-md-12">
                                     <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Postid</th>
                                        <th>Post Title</th>
                                        <th>Post Details</th>
                                        <th>Image</th>
                                           <th>Action</th>

                                        <th>Internationl/National</th>
                                        <th>Countery</th>
                                        <th>District</th>
                                        <th>Categories</th>
                                        <th>Top/Normal</th>
                                        <th>Date</th>
                                                                         </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=0)
                                        @if(!empty($managenews))
                                        @foreach($managenews as $manage)
                                        <tr>
                                            <td>{{ $i}}</td>
                                            <td>{{ $manage->postid}}</td>

                                         <td>{{ Str::substr($manage->postt,0,10) }}</td>

                                             <td>{{ Str::substr($manage->postdetails,0,20) }}</td>
                                               <td><img src="{{ asset($manage->image) }}" style="width:100px;"></td>
                                           <td><a class="btn btn-primary btn-xs"  id='edit' href="{{ route('postedit',$manage->postid)}}"><i class="fa fa-pencil"></i></a>
                                           

                                              <li id='delete' class="btn btn-danger btn-xs"  href="{{ route('allpostdelete',$manage->postid)}}"  data-token="{{ csrf_token()}}" data-id="{{$manage->postid}}"><i class="fa fa-trash-o"></i></li>
                                              <span class="fas fa-trash" onclick="
                                              event.preventDefault();
                                              if(confirm('Are You Sure Want To Delete?')){
                                                document.getElementById('form-delete-{{$manage->postid}}')
                                                 ;
                                              }
                                              "></span>
                                              <form style="display:none" action="{{route('deletepostall',$manage->postid)}}" method="post" id="form-delete-{{$manage->postid}}">
                                                @csrf
                                                @method('delete')
                                              </form>
                                            </td> 
                                             <td>{{ $manage->int_nat }}</td>
                                              <td>{{ $manage->country }}</td>
                                            <td>{{ $manage->district}}</td> 
                                             <td>{{ $manage->categories }}</td>  
                                              <td>{{ $manage->topnormal}}</td> 
                                              <td>{{ $manage->date1}}</td>
                                             
                                        </tr>
                                        @php($i++)
                                                                        <!-- Modal -->
                            
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                                </div>

                            </div>
                        </div>
                
             <script>
 function collectrecords(){
     $.get('/Ajaxcrud/data').then((data)=>{
       
          console(data);
    
     })

 }
  collectrecords();
</script>


<!--DEFAULT modal-->
                         
                    <!--TIMELINE left-->
                    
            <!-- RIGHT SIDEBAR -->
            <!-- =========<================================================ -->
          
            
                            </div>
                        </div>

                    </div>

                    
      
@endsection
