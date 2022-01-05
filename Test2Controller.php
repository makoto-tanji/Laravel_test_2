<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\Test2;

class Test2Controller extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function thanks(Request $request)
    {
        $this->validate($request, Test2::$rules);
        $form = $request->all();
        Test2::create($form);
        // return view('thanks', ['items=>$form']);
        return view('thanks');
    }
}
