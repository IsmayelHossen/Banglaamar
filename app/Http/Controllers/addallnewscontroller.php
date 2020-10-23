<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Addnews;
use App\Mail\Welcome;
use DB;
use Mail;

class addallnewscontroller extends Controller
{
    public function addallnews(){
    	return view('addallnews');
    }
    public function saveallnews(Request $request){
        // $validatedData = $request->validate([
    // 'name' => ['required', 'unique:addnews', 'max:255'],
    // 'email' => ['required'],
    // 'text1' => ['required'],
// ]);
    	$add= new Addnews();
    	$add->name=$request->name;
    	$add->email=$request->email;
    	$add->text1=$request->text1;
    	$add->save();
     // Mail::to($request->email)->send(new Welcome($request->name));

    	return Redirect()->back()->with('status', 'Successfully inserted Data');

    }
    //ajaxcrud
    public function ajaxget(){
      $data=DB::table('newspaper')->get();
      return response()->json($data,'success');
    }

  
    public function managenews(){
         $managenews1=DB::table('newspaper')->orderByRaw('postid DESC')->get();

    	return view('managenews',compact('managenews1'));

    }
     public function managebreakingnews(){
        $manage=Addnews::get();
       return   view('managebreakingnews',compact('manage'));
    }
    public function allpostdelete($id){
      $image=DB::table('newspaper')->where('postid',$id)->first();
      
            $name=$image->image;
          if(!empty($name)){

            unlink($name);
          }
      $delete=DB::table('newspaper')->where('postid',$id)->delete();
      return Redirect()->back();
    }
    //submit delete
    public function deleteall(Request $request){
      $id=$request->id;
      $delete=DB::table('newspaper')->where('postid',$id)->delete();
      return Redirect()->back();
    }
    public function postedit($id){
        $editpost=DB::table('newspaper')->where('postid',$id)->first();
       return view('edit_all_post',compact('editpost'));
    }
    public function editpostsave( Request $request){
         $postid=$request->postid;
                $data=array();
       
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
            $image=DB::table('newspaper')->where('postid',$postid)->first();
            $name=$image->image;
          
            unlink($name);
        
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
         $add=DB::table('newspaper')->where('postid',$postid)->update($data);
            return redirect()->back()->with('status', 'Successfully Updated Data');
       }
       else{
                  $add=DB::table('newspaper')->where('postid',$postid)->update($data);
          return redirect()->back()->with('status', 'Successfully Updated Data');
        
       }
     

    }
    public function OpinionEdit(Request $request){
       $id=$request->id;
      $data=array();
      $data['name']=$request->name;
      $data['email']=$request->email;
       $data['text1']=$request->text1;
       $result=DB::table('addnews')->where('id',$id)->update($data);
       return Redirect()->back()->with('status','Successfully Updated');



    }
    public function inactive(){
       
    }
    public function status1($id){
        
              $ab=DB::table('users')->where('id',$id)->update(['name' =>'Hasan']);;
              return Redirect()->back();

  

    }
    public function changeStatus(Request $request)

    {

        $id=$request->user_id;
         
        $status=$request->status;



        $ab=DB::table('addnews')->where('id',$id)->update(['status' =>$status]);;

  

        return response()->json(['success'=>'Status change successfully.']);

    }

} ?>

