<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Souscategorie;

class SouscategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $c= Categorie::find($id);
        return response()->json($c->souscategories,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $a=  Souscategorie::create($request->all());
 
        return response()->json( $a,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categorie_id , $souscategorie_id)
    {
        $a=Souscategorie::where([ "categorie_id" => $categorie_id , "id" => $souscategorie_id])->get();
        
       return response()->json( $a->articles,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $a=Souscategorie::find($id);
        $a->update($request->all());
        return response()->json( $a,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a=Souscategorie::find($id);
        $a->delete();
        return response()->json(["message" => "l'article a été supprimé" ], 200);
        // return response()->json( "l'article a été supprimé", 204); si on mit 204 on ne pourra pas affiché le message
    }


    public function souscategories(){

        $a = Souscategorie::all();
         return response()->json( $a,200);
     }
 
     public function souscategorie($id){
 
         $a = Souscategorie::find($id);
          return response()->json( $a,200);
      }

}
