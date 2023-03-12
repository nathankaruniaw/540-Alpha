<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Response;
// use Carbon\Carbon;
// use Auth;
// use File;

class DashboardController extends Controller
{

    // Controller untuk dashboard non admin
    public function dashboard(){

        $portfolio_ids = DB::table('portfolio')
            ->get();

        return view('portal/home', compact('portfolio_ids'));
    }

    public function portfolio(){

        $portfolio_ids = DB::table('portfolio')
            ->get();

        return view('portal/portfolio', compact('portfolio_ids'));
    }

    public function getAdvisory($count){
        $advisory = DB::table('client')
            ->limit($count)
            ->get();
        $countAdvisory = DB::table('client')
            ->count();

        $data = [$advisory, $countAdvisory];

        return response()->json($data);
    }
    

}