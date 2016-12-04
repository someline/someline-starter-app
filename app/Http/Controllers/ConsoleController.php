<?php

namespace Someline\Http\Controllers;

use Illuminate\Http\Request;

class ConsoleController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('console.index');
    }

}
