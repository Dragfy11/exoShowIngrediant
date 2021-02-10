<?php

namespace App\Http\Controllers;

use App\Models\Ingrediant;
use Illuminate\Http\Request;

class IngrediantController extends Controller
{

    public function store(Request $request)
    {
        $store = new Ingrediant;
        $store->nom = $request->nom;
        $store->quantite = $request->quantite;
        $store->photo = $request->photo;
        $store->save();
        return redirect()->back();
    }
    public function show($id){
        $show=Ingrediant::find($id);
        return view('show',compact('show'));
    }
    public function destroy($id){
        $destroy=Ingrediant::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
