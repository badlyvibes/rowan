<?php

namespace App\Http\Controllers;

use App\Tree;
use App\CommonName;
use App\Language;
use Request;

class TreesController extends Controller
{

    public function index()
    {
        $trees = [];
        for ($i = 0; $i <= 4; $i++) {
            $trees[] = Tree::id(rand(1, 60000))[0];
        }
        $context = ['type' => 'index', 'title' => 'Index'];
        return $this->returnLayout($trees, $context);
    }

    public function postTreeSearch()
    {
        return redirect()->action(
            'TreesController@getTreeSearch',
            ['search' => Request::all()['tree_search']]
        );
    }

    public function postCommonNameSearch()
    {
        return redirect()->action(
            'TreesController@getCommonNameSearch',
            ['search' => Request::all()['common_name_search']]
        );
    }

    public function getCommonNameSearch($search = '')
    {
        $trees = [];
        foreach (CommonName::search($search)->paginate(30) as $commonName) {
            $trees[] = Tree::id($commonName['tree_id'])[0];
        }

        $context = ['type' => 'common_name_search', 'term' => $search, 'title' => 'Common Name Search: ' . $search];
        return $this->returnLayout($trees, $context);
    }

    public function getTreeSearch($search = '')
    {
        $context = ['type' => 'tree_search', 'term' => $search, 'title' => 'Tree Search: ' . $search];
        return $this->returnLayout(Tree::search($search)->paginate(30), $context);
    }

    public function show(Tree $tree)
    {
        $context = ['type' => 'show', 'title' => $tree->name  . ' | ID ' . $tree->id];
        $languages = Language::selectList();
        return view('layouts.show', compact('tree', 'context', 'languages'));
    }

    public function showSpecies($genus, $species)
    {
        $tree = Tree::species($genus, $species);
        $context = ['type' => 'species', 'title' => 'Species: ' . $tree->name];
        $languages = Language::selectList();
        return view('layouts.show', compact('tree', 'context', 'languages'));
    }

    public function showSpeciesById(Tree $tree)
    {
        return $this->showSpecies($tree->genus, $tree->species);
    }

    public function showGenus($val)
    {
        $context = ['type' => 'genus', 'title' => 'Genus: ' . ucfirst($val)];
        return $this->returnLayout(Tree::genus($val), $context);
    }

    private function returnLayout($trees, $context)
    {
        $languages = Language::selectList();
        return view('layouts.index', compact('trees', 'context', 'languages'));
    }
}
