<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Souscategorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c= Categorie::all();
        return response()->json($c,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c=  Categorie::create($request->all());
 
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
        $c= Categorie::find($id);
        return response()->json( $c,200);
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
        $c=Categorie::find($id); 
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
        $c=Categorie::find($id);
        $c->delete();
        return response()->json(["message" => "l'article a été supprimé" ], 200);
        // return response()->json( "l'article a été supprimé", 204); si on mit 204 on ne pourra pas affiché le message
    }
}
