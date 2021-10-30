<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todocontroller extends Controller
{
    public function presenter(){

        $donnees = todo :: all();
        //retour des donnees
        //dd($donnees);
        return view('welcome',[
            "donnees" => $donnees
        ]);
    }

    public function save(Request $request){
        $donne = new todo;
        $donne->tache = $request->tache;
        $donne->description = $request->description;
        $donne->save();
        //dd($donne);
        return view('succes');
    }

    public function upddate(Request $request){
        //$donne= new todo;
        $idd=$request->id;
        $post= todo ::find($idd);
        //dd($post);
        $post->tache=$request->newtache;
        $post->description=$request->newdescription;
        $post->save();
        //update([
          //  'tache'=>'nouvelle tache'
        //]);
        //$post->tache=$request->newtache;
        //$post->description=$request->newdescription;
        /*$post->update([
                'tache'=>$request->$tache,
                'description'=>$request->$description
        ]);
        //$post->save();
        */
        return view('confirm');
    }
    public function update(){
        return view('formupdate');
    }
    public function delet(Request $request){
        $idd=$_GET['id'];
        $donne = new todo;
        $post= todo :: find($idd);
        try {
            $post->delete();
        } catch (\Throwable $th) {
            return "echec de la supression";
        }
        //dd($post);

           return view('confirm');
    }
}
