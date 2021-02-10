<?php

namespace App\Http\Controllers;

use App\Models\Ingrediant;
use Illuminate\Http\Request;

class IngrediantController extends Controller
{
    public function show($id){
        $show=Ingrediant::find($id);
        return view('show',compact('show'));
    }
}
