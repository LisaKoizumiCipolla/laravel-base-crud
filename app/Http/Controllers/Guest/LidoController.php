<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Lido;
use Illuminate\Http\Request;

class LidoController extends Controller
{
    //
    public function index(){
        $listLidi = Lido::all();

        return view('guest.lidi.index', compact('listLidi'));
    }
}
