<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Response;
use Carbon\Carbon;
use Auth;
use File;

class MainController extends Controller
{
    public function newslist(){

        $data = DB::table('news')
            ->get();

        return view('news', compact('data'));
    }

    public function homepage(){
        $data = DB::table('news')
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();

        $product = DB::table('product')
            ->get();

        return view('homepage', compact('product', 'data'));
    }

    public function newsdetail($id){

        $data=DB::table('news')
                ->where('id', $id)
                ->first();

        $next = DB::table('news')
                ->where('id', '>', $id)
                ->first();

        return view('news_detail', compact('data', 'next'));
    }

    public function newsLoadMore($count){

            $news = DB::table('news')
            ->limit($count)
            ->get();

            $count = DB::table('news')
                ->count();

            $data = [$news, $count];

        return response()->json($data);
    }
    
    public function sendEmailUser(Request $request){
        $data = request()->validate([
            'emailInput' => 'required|email|max:50'
        ]);
 
        DB::table('email_user')
            ->insert([
                'namaEmail' => $request->emailInput
            ]);
            
        return redirect()->action('MainController@homepage');
    }
}
