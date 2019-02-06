<?php

namespace App\Http\Controllers;

use App\Suggestions;
use App\UsersVote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resquest;
use Auth;



class Idea_BoxController extends Controller


{
    //show all idea
    public function index(){

        $suggestions = Suggestions::all();
        return view('site/idea_box', ['suggestions' => $suggestions]);
    }



    // store idea data into database
    public function store(Request $request){
        $iduser = Auth::user()->id;
        //return $request;
        $suggestions = new Suggestions;
        $suggestions->label = $request->label;
        $suggestions->description = $request->description;
        $suggestions->date = $request->date;
        $suggestions->image_url = $request->image_url;
        // ID_Users default value temporarily
        $suggestions->id_users = $iduser;
        $suggestions->save();
        
        $suggestions = Suggestions::all();
        return view('site/idea_box', ['suggestions' => $suggestions]);
        
    }

    //delete idea 
    public function getRemoveIdea($id){
        
        $suggestions = Suggestions::where('id',$id)->delete();
        return redirect()->route('idea.index');
    }

    // get vote and return id_users and id_suggestions
    public function getVote($suggestion){

        $iduser = Auth::user()->id;

        //TODO : ajouter le User des que Hugo aura fini
        $usersvote = new UsersVote;
        $usersvote->id_suggestions = $suggestion;
        $usersvote->id_users = $iduser;
        $usersvote->save();
        return redirect()->route('idea.index');

    }
}

