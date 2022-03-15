<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pays;

class PaysController extends Controller
{
    //
    public function index()
    {
        $pays = Pays::all();
        return view('pays.index', ['pays' => $pays]);
    }
}
