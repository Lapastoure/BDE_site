<?php

namespace App\Http\Controllers;
use App\Manifestations;
use App\Images;
use App\Comments;
use App\ImageLikes;
use App\Inscribesmanifs;
use App\Usersreportcomments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserReportImgs;
use Carbon\Carbon;
use Auth;
use DB;

class EventController extends Controller

{
     // get futur event  with the date 
    public function futurevent(){

        $manifestations = Manifestations::where('date', '>=', Carbon::now())->get();
        return view('site/event', ['manifestations' => $manifestations]);
    }


    // Verification Date 
    public function pastevent(){

        $manifestations = Manifestations::where('date', '<', Carbon::now())->get();
        $comments = Comments::all();
        $images = Images::all();
        return view('site/past_event', ['manifestations' => $manifestations, 'images' => $images, 'comments' => $comments]);
        
    }

     // get all image
    public function index(){
       
         $images = Images::all();
         return redirect()->route('past_event');
 
     }


     // upload image, params $request, id manifestation
    public function uploadImage(Request $request, $manifestation){
       
        $iduser = Auth::user()->id;


        $images = new Images;
        $images->image_url = $request->image_url;
        $images->id_manifestations = $manifestation;
        $images->id_users =$iduser;
        $images->save();
        $manifestations = Manifestations::where('date', '<', Carbon::now())->get();
         $images = Images::all();
         return redirect()->back();

    }

  // upload comment, params : request, id image
    public function uploadCom(Request $request, $image){
        
        $iduser = Auth::user()->id;
        
        $comments = new Comments;
        $comments->description = $request->description;
        $comments->id_users = $iduser;
        $comments->id_images = $image;
        $comments->save();
        $manifestations = Manifestations::where('date', '<', Carbon::now())->get();
        $comments = Comments::all();
        return redirect()->back();
        
    }


    //get user inscribi by id manifestation
    public function getUserInscribe($manifestation){
        
        $iduser = Auth::user()->id;

        $inscribesmanif = new Inscribesmanifs;
        $inscribesmanif->id_manifestations = $manifestation;
        $inscribesmanif->id_users = $iduser;
        $inscribesmanif->save();
        return redirect()->back();


    }


        // get like by id image
    public function getLike($image){

        $iduser = Auth::user()->id;

        $imagelike = new ImageLikes;
        $imagelike->id_users = $iduser;
        $imagelike->id_images = $image;
        $imagelike->save();
        return redirect()->back();
        
    }

    // get remove image by image comment 
    public function getRemoveImageByIdea($image, $comment){
           // dd($images);
         //$ter = DB::table('comment')->where('id', $id)->get();
        
        $aSuppr = DB::select('DELETE FROM usersimageslike WHERE id_images = ?', [$image]);
        $aSuppr = DB::select('DELETE FROM userscommentsreport WHERE id_comments = ?', [$comment]);
        $aSuppr = DB::select('DELETE FROM usersimagesreport WHERE id_images = ?', [$image]);
        $aSuppr = DB::select('DELETE FROM comments WHERE id_images = ?',[$image]);
        $aSuppr = DB::select('DELETE FROM images WHERE id = ?', [$image]);
        


        return redirect()->back();

 

    }
   
    public function getReportImage($image){

        $iduser = Auth::user()->id;


        $UserReportImg = new UserReportImgs;
        $UserReportImg->id_users = $iduser;
        $UserReportImg->id_images = $image;
        $UserReportImg->save();
        return redirect('report');

    }


    public function getReportComment($comment){


        $iduser = Auth::user()->id;

        $usersreportcomment = new Usersreportcomments;
        $usersreportcomment->id_comments = $comment;
        $usersreportcomment->id_users = $iduser;
        return redirect()->back();


    }


   /* public function getRemoveReport(){


    }*/




}

