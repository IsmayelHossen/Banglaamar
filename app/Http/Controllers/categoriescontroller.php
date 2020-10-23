<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class categoriescontroller extends Controller
{
	public function national1($category,$catb){
	$categories=$category;
	$catb=$catb;
    $navbar=DB::table('newspaper')->where('categories',$categories)->orwhere('district',$categories)->orderByRaw('postid DESC')->paginate(8);
     $cat=DB::table('newspapercat')->get();
      $catmobile=DB::table('newspapercat')->get();

        $topbreak='BreakingNews';
         $breakingnews=DB::table('newspaper')->where('topnormal',$topbreak)->skip(0)->take(5)->orderByRaw('postid DESC')->get();
          $wholebd=DB::table('wholebd')->get();
           $wholebdm1=DB::table('wholebd')->take(4)->get();
           $wholebdm2=DB::table('wholebd')->skip(4)->take(4)->get();
     return  view('frontnews.individual',compact('navbar','catb','cat','breakingnews','catmobile','wholebd','wholebdm1','wholebdm2'));
    //print_r($navbar);
 }
}
