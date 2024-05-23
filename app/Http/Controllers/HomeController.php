<?php

namespace App\Http\Controllers;
use App\Models\InputdataModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['inputdata']= InputdataModel::get();
        return view('front.pages.home',$data);
    }
}
