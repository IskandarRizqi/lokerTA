<?php

namespace App\Http\Controllers;

use App\Helper\GlobalHelper;
use App\Models\InputdataModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        $id = null;
        if (Auth::user()->role_id > 0) {
            if (!Auth::user()->kriteria_id) {
                return Redirect::to('/kriteria');
            }
        }
        if (Auth::user()->role_id < 1) {
            if (!Auth::user()->kriteria_id) {
                return redirect::to('/dashboard');
            }
        }

        $data['rekomendasi'] = GlobalHelper::getrecomend($id);
        // return $data;
        $data['inputdata'] = InputdataModel::get();
        return view('front.pages.home', $data);
    
    }
}
