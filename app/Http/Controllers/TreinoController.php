<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function index(){

        return view('site.treino');

    }

    public function hiit(){

        return view('site.treinos.hiit');

    }

    public function emagrecimento(){

        return view('site.treinos.emagrecimento');

    }

    public function flexibilidade(){

        return view('site.treinos.flexibilidade');

    }

    public function reabilitacao(){

        return view('site.treinos.reabilitacao');

    }

    public function core(){

        return view('site.treinos.core');

    }

    public function dropset(){

        return view('site.treinos.dropset');

    }

    public function emom(){

        return view('site.treinos.emom');

    }
}
