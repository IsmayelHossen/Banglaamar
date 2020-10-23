<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class individual extends Controller
{
    public function national1(){
    	 return view('individual');
    } 
  
    public function details($postid){
        $details=DB::table('newspaper')->where('postid',$postid)->first();

        //details related news
        $categories=$details->categories;
        $related=DB::table('newspaper')->where('categories',$categories)->where('topnormal','top')->take(4)->orderByRaw('postid DESC')->get();
        //categories navbar
         $cat=DB::table('newspapercat')->get();
              $topbreak='BreakingNews';
                 $catmobile=DB::table('newspapercat')->get();
              //breakingnews
         $breakingnews=DB::table('newspaper')->where('topnormal',$topbreak)->skip(0)->take(5)->orderByRaw('postid DESC')->get();
          $wholebd=DB::table('wholebd')->get();
          $wholebdm1=DB::table('wholebd')->take(4)->get();
           $wholebdm2=DB::table('wholebd')->skip(4)->take(4)->get();
    return  view('frontnews.details',compact('details','cat','catmobile','breakingnews','related','wholebd','wholebdm1','wholebdm2'));
    }
    public function search2(Request $request){

       $district=$request->district;
       return view('frontnews.index',compact('district'));
    }
    public function search(Request $request){
        $search=$request->search;
        $searchr=DB::table('newspaper')->where('postt', 'LIKE', "%{$search}%")->orwhere('postdetails','LIKE',"%{$search}%")->orwhere('categories','LIKE',"%{$search}%")->paginate(3);  
         $searchcount=DB::table('newspaper')->where('postt', 'LIKE', "%{$search}%")->orwhere('postdetails','LIKE',"%{$search}%")->orwhere('categories','LIKE',"%{$search}%")->count();  
         $cat=DB::table('newspapercat')->get();
          $catmobile=DB::table('newspapercat')->get();
            $wholebd=DB::table('wholebd')->get();
                      $wholebdm1=DB::table('wholebd')->take(4)->get();
           $wholebdm2=DB::table('wholebd')->skip(4)->take(4)->get();
              $topbreak='BreakingNews';
         $breakingnews=DB::table('newspaper')->where('topnormal',$topbreak)->skip(0)->take(5)->orderByRaw('postid DESC')->get();
         //top news for search page location above footabove
         $search_top_news=DB::table('newspaper')->where('topnormal','top')->skip(0)->take(4)->orderByRaw('postid DESC')->get();
        if($searchcount>0){
            return view('frontnews.searchnews',compact('searchr','cat','searchr','searchcount','catmobile','wholebd','wholebdm1','wholebdm2','search_top_news'));
        }
       // print_r($searchr);
       else{
        $searchnotfound="No Result Found";
         return view('frontnews.searchnews',compact('searchr','cat','searchnotfound','searchcount','catmobile','wholebd','wholebdm1','wholebdm2','search_top_news'));

       }
       
    }

}
