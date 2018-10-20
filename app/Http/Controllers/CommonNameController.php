<?php

namespace App\Http\Controllers;

use App\CommonName;
use App\Tree;
use Request;

class CommonNameController extends Controller
{
    public function add()
    {
        $input = Request::all();

        $commonName = new CommonName();

        $commonName->name = $input['name'];
        $commonName->tree_id = $input['tree_id'];
        $commonName->language_id = $input['language_id'];
        $commonName->user_id = $input['user_id'];

        $commonName->save();

        $tree = Tree::id($commonName->tree_id)[0];

        $genus = $tree->genus;
        $species = $tree->species;

        return redirect()->action('TreesController@showSpecies', compact('genus', 'species'));
    }
}
