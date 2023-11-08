<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CitasAdminController extends Controller
{
    public function index() {
        $citas = DB::table("citas")->get();
        return view("citas.lista", ["listaCitas" => $citas]);
    }
}
