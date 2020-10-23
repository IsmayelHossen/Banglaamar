<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class indexcontroller extends Controller
{
    public function topnews(){
    	$date1=date('d/m/y');
    	$top='top';
      $national='national';
     $topnew=DB::table('newspaper')->where('int_nat',$national)->where('topnormal',$top)->skip(0)->take(2)->orderByRaw('postid DESC')->get();
     $leftnews='leftnews';
    $leftnews=DB::table('newspaper')->where('topnormal',$leftnews)->skip(0)->take(4)->orderByRaw('postid DESC')->get();
      $rightnews='rightnews';
    $rightnews=DB::table('newspaper')->where('topnormal',$rightnews)->skip(0)->take(4)->orderByRaw('postid DESC')->get();
    $topbottom='topbottom';
    $topbottom=DB::table('newspaper')->where('topnormal',$topbottom)->skip(0)->take(2)->orderByRaw('postid DESC')->get();
    $normaltop='normal';
    $categories1='national';
    $normal=DB::table('newspaper')->where('topnormal',$normaltop)->where('categories',$categories1)->skip(0)->take(4)->orderByRaw('postid DESC')->get();
    $normal2=DB::table('newspaper')->where('topnormal',$normaltop)->where('categories',$categories1)->skip(0)->take(8)->orderByRaw('postid DESC')->get();
    $sport='sports';
    $sports=DB::table('newspaper')->where('topnormal',$top)->where('categories',$sport)->skip(0)->take(1)->orderByRaw('postid DESC')->get();
       
     $topsports='normal';
         $sportsnormal=DB::table('newspaper')->where('topnormal',$topsports)->where('categories',$sport)->skip(0)->take(4)->orderByRaw('postid DESC')->get();

         $entair='entairtainment';
         $entairtainmenttop='top';
         $entairtainment=DB::table('newspaper')->where('topnormal',$entairtainmenttop)->where('categories',$entair)->skip(0)->take(1)->orderByRaw('postid DESC')->get();
         $entair='entairtainment';
         $entairtainmenttop='normal';
         $entairtainment1=DB::table('newspaper')->where('topnormal',$entairtainmenttop)->where('categories',$entair)->skip(0)->take(3)->orderByRaw('postid DESC')->get();
         $categoriesbt='national';
         $top5='FooterAT';
         $footertop=DB::table('newspaper')->where('topnormal',$top5)->where('categories',$categoriesbt)->skip(0)->take(1)->orderByRaw('postid DESC')->get();
         //footer above international
          $categoriesbt='international';
         $top5='FooterAT';
         $footertopint=DB::table('newspaper')->where('topnormal',$top5)->where('categories',$categoriesbt)->skip(0)->take(1)->orderByRaw('postid DESC')->get();
         $top5='normal';
         $footertopint_n=DB::table('newspaper')->where('topnormal',$top5)->where('categories',$categoriesbt)->skip(0)->take(6)->orderByRaw('postid DESC')->get();

         //footer above politics
            $categoriesbt='politics';
         $top5='FooterAT';
         $footertop_politic=DB::table('newspaper')->where('topnormal',$top5)->where('categories',$categoriesbt)->skip(0)->take(1)->orderByRaw('postid DESC')->get();
             $categoriesbt='politics';
         $top5='normal';
         $footertop_politic_n=DB::table('newspaper')->where('topnormal',$top5)->where('categories',$categoriesbt)->skip(0)->take(6)->orderByRaw('postid DESC')->get();
         //economic footer above
          $categoriesbt='economics';
         $top5='FooterAT';
         $footertop_economics=DB::table('newspaper')->where('topnormal',$top5)->where('categories',$categoriesbt)->skip(0)->take(1)->orderByRaw('postid DESC')->get();
             $categoriesbt='economics';
         $top5='normal';
         $footertop_economics_n=DB::table('newspaper')->where('topnormal',$top5)->where('categories',$categoriesbt)->skip(0)->take(6)->orderByRaw('postid DESC')->get();
         $cat=DB::table('newspapercat')->get();
           $catmobile=DB::table('newspapercat')->get();

          $topbreak='BreakingNews';
         $breakingnews=DB::table('newspaper')->where('topnormal',$topbreak)->skip(0)->take(5)->orderByRaw('postid DESC')->get();
        $wholebd=DB::table('wholebd')->get();
          $wholebdm1=DB::table('wholebd')->take(4)->get();
           $wholebdm2=DB::table('wholebd')->skip(4)->take(4)->get();
           $photo_gallary=DB::table('newspaper')->where('topnormal','top')->take(10)->orderByRaw('postid DESC')->get();
           //Opinion
              $opinion=DB::table('addnews')->take(4)->orderByRaw('id DESC')->get();
         
      return  view('frontnews.index',compact('topnew','leftnews','rightnews','topbottom','normal','sports','sportsnormal','entairtainment','entairtainment1','footertop','normal2','cat','breakingnews','footertopint','catmobile','wholebd','wholebdm1','wholebdm2','footertop_politic','footertop_politic_n','footertop_economics','footertop_economics_n','footertopint_n','photo_gallary','opinion'));
     // print_r($leftnews);

      

    }
 
    
}
