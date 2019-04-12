<?php

namespace treinamento\Http\Controllers;

use Illuminate\Http\Request;

class Administrator extends Controller
{
    public function __construct()
    {
        $this->middleware('sessao');
    }

    public function admPainel()
    {
        return view('admin.administrator.administratormenu');
    }
}
