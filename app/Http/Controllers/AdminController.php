<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Response;
// use Carbon\Carbon;
// use Auth;
// use File;

class AdminController extends Controller
{

    // Controller untuk dashboard admin

    public function dashboard(){

        return view('admin.dashboard');
    }
}