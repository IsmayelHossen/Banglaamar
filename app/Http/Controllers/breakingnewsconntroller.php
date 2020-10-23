<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class breakingnewsconntroller extends Controller
{
      public function managebreakingnews(){
       return	view('managebreakingnews');
    }
      public function addbreaking(){
        $wholebd=DB::table('wholebd')->get();
       return	view('addbreakingnews',compact('wholebd'));
    }
     public function breakinnewssave(Request $request){
     	 $validatedData = $request->validate([
        'postid' => 'required|unique:newspaper',
        'postd' => 'required',
        
    ]);
     	$data=array();
        $data['postid']=$request->postid;
        $data['postt']=$request->postt;
        $data['postdetails']=$request->postd;
        $data['int_nat']=$request->international_national;
        $data['country']=$request->country;
        $data['district']=$request->district;
        $data['categories']=$request->categories;
         $data['topnormal']=$request->topnormal;
         $data['date1']=date('d/m/y');


          $image=$request->file('image');

          if ($image) {
        
        /* $ext=strtolower($image->getClientOriginalExtension());
         $imagefn=$image.'.'.$ext;
         $upload='public/font/img/';
         $imageurl=$upload.$imagefn;
         $success=$image->move($upload,$imagefn);
         $data['image']= $imagefn; */
          $file_name = $_FILES['image']['name'];
         $file_size = $_FILES['image']['size'];
         $file_temp = $_FILES['image']['tmp_name'];

   
          $uploaded_image="public/images/".$file_name;
           $uploaded_image1="public/images/".$file_name;
           $data['image']= $uploaded_image1;

         move_uploaded_file($file_temp, $uploaded_image);
         $add=DB::table('newspaper')->insert($data);
            return redirect()->back()->with('status', 'Successfully inserted Data');
       }
       else{
          $add=DB::table('newspaper')->insert($data);
          return redirect()->back()->with('status', 'Successfully inserted Data');
        
       }
     
        

        

        
       

     }
}
