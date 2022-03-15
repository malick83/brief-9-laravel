<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Models\Quartier;

class EntrepriseController extends Controller
{
    public function create() {
        $quartiers = Quartier::all();
        return view('entreprises.create',['quartiers' => $quartiers]);
    }
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('entreprises.index', ['entreprises' => $entreprises]);
    }
    public function store(Request $request) {

        //TODO: Refactoring cette partie de code
        $inputsData = $request->all();
        $inputsData['dispositifFormation'] = $request->has('dispositifFormation') ? true : false;
        $inputsData['organigramme'] = $request->has('organigramme') ? true : false;
        $inputsData['contrat'] = $request->has('contrat') ? true : false;

        Entreprise::create($inputsData);
        return redirect()->route('entreprises.index');
    }

    public function show (Entreprise $entreprise)
    {
        return view('entreprises.show', ['entreprise' => $entreprise]);
    }
}
