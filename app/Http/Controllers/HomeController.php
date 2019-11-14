<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        if (Auth::user()->action_id == 1) {
            return redirect('piket-kurikulum');
        }
        if (Auth::user()->action_id == 2) {
            return redirect('guru');
        }
        if (Auth::user()->action_id == 3) {
            return redirect('pemb-rayon');
        }
        if (Auth::user()->action_id == 4) {
            return redirect('kaprog-laboran');
        }
        if (Auth::user()->action_id == 5) {
            return redirect('orangtua');
        }
    }
}
