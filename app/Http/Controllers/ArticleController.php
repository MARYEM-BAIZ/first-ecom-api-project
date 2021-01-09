<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Souscategorie;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c=  Article::create($request->all());
 
        return response()->json( $c,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $c= Article::find($id); 
        $c->update($request->all());
        return response()->json( $c,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $c= Article::find($id);
        $c->delete();
        return response()->json(["message" => "l'article a été supprimé" ], 200);
        // return response()->json( "l'article a été supprimé", 204); si on mit 204 on ne pourra pas affiché le message
    }


    public function articles(){

        $c= Article::all();
        return response()->json($c,200);
     }
 
     public function article($id){
 
         $a = Article::find($id);
          return response()->json( $a,200);
      }
}
