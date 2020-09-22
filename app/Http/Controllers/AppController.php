<?php

namespace App\Http\Controllers;

use App\Armoire;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $armoires = Armoire::getArmoire();
        return view('app.index',[
            'armoires' => $armoires
        ]);
    }
}
