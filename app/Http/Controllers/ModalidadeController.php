<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function index(){

        return view('site.modalidade');

    }

    public function artesmarciais(){
        return view('site.modalidades.artesmarciais');
    }

    public function cardiovascular(){
        return view('site.modalidades.cardiovascular');
    }

    public function musculacao(){
        return view('site.modalidades.musculacao');
    }

    public function pilates(){
        return view('site.modalidades.pilates');
    }

    public function powerlifting(){
        return view('site.modalidades.powerlifting');
    }

    public function spa(){
        return view('site.modalidades.spa');
    }
}
