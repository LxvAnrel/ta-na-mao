<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function create(){
        return view ('/materials/form');
    }

    public function store(Request $request){

        $request->validate([

        ]);

        $Material = new Material();

        $Material->description = $request->description;
        $Material->name = $request->name;
        $Material->user_id = 1;
        $Material->file_url = "https://ia800500.us.archive.org/16/items/codigo-limpo-robert-martin/codigo-limpo-completo-pt_text.pdf";

        $Material->save();
    }
}
