<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function indexHandler (Request $request) {

        return view('index');

    }
    public function search (Request $request) {

        $sText = $request->query('searchText'); //texto de pesquisar

        // Realizando a pesquisa com pelo nome e email com base no texto recuperado como queryString.
        $foundUsers = User::query()
            ->where('name', 'LIKE', "%$sText%")
            ->orWhere('email', 'LIKE', "%$sText%")
            ->get();

        return view('search-result', compact('foundUsers', 'sText'));

    }
}
