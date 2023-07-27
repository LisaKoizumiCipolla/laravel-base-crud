<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lido;
use Illuminate\Http\Request;

class LidoController extends Controller
{
    //

    
    public function index(){
        $listLidi = Lido::all();

        return view('admin.lidi.index', compact('listLidi'));
    }
}
