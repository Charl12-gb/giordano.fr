<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayementController extends Controller
{
    public function payeemnt(){
        return view('content.payement');
    }
}
