<?php

namespace App\Http\Controllers;

use App\Tree;

class TreesController extends Controller
{

    public function index()
    {
        $trees = Tree::name('florid');
        $context = 'Index';
        return view('layouts.index', compact('trees', 'context'));
    }

    public function show(Tree $tree)
    {
        $context = $tree->name . ' | ID ' . $tree->id;
        return view('layouts.show', compact('tree', 'context'));
    }

    public function showSpecies($genus, $species)
    {
        $tree = Tree::species($genus, $species);
        $context = $tree->name;
        return view('layouts.show', compact('tree', 'context'));
    }

    public function showGenus($val)
    {
        $trees = Tree::genus($val);
        $context = ucfirst($val);
        return view('layouts.index', compact('trees', 'context'));
    }
}
