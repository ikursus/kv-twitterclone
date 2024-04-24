<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Dapatkan senarai post daripada database menerusi Query Builder
        $senaraiPost = DB::table('posts')
        //->select('id', 'content')
        ->get();

        // Passing data kepada template bila nak gunakan data tersebut
        return view('template-dashboard', [
            'senaraiPost' => $senaraiPost
        ]);
    }
}
