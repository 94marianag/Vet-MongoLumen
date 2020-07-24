<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Validator;

class PerroController extends Controller
{
    // GET
    public function index(Request $request) {
        return Perro::all();
    }

    // POST
    /* public function store(Request $request) {

        $perrito = new Perro();
        $perrito->nombre = $request->get('nombre');
        $perrito->save();
    
        return redirect('perrito')->with('success', 'Perrito has been successfully added');
      } */

      public function store(Request $request) {

        $perrito = new Perro();
        $perrito->nombre = $request->get('nombre');
        $perrito->save();
    
        return ($perrito);
      }
}