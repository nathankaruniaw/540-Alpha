<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Response;
use Carbon\Carbon;
use Auth;
use File;

class AdminController extends Controller
{

    // Controller untuk dashboard admin

    public function dashboard(){

        return view('admin.dashboard');
    }

    // START CLIENT
    public function client(){
        $data = DB::table("client")
            ->get();

        return view("admin.client.client", compact('data'));
    }

    public function clientInsert(Request $request){
        $data = request()->validate([
            'name' => 'required|max:100'
        ]);
 
        DB::table('client')
            ->insert([
                'name' => $request->name
            ]);

        $maks = DB::table('client')
            ->max('id');

        $client = DB::table('client')
            ->where('id', $maks)
            ->first();

        $file = $request->file('photo');
        if($file != null) {
            $name= 'fotoClient' . $client->id . '.' . $file->getClientOriginalExtension();
            $tujuan='images/client';
            $file->move($tujuan, $name);

            DB::table('client')
                ->where('id', $maks)
                ->update([
                    'photo' => $name
                ]);
        }

        return redirect('admin/client');
    }

    public function editClient($id){
        $client = DB::table("client")
            ->where('id', $id)
            ->first();

        return view("admin.client.editclient", compact("client"));
    }

    public function updateClient(Request $request){
        $data = request()->validate([
            'name' => 'required|max:100'
        ]);

        DB::table('client')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name
            ]);

        $file=$request->file('photo');
        if ($file != null) {
            $name='fotoClient' . $request->id . '.' . $file->getClientOriginalExtension();
            if(File::exists(public_path('images/client/. $name .'))){
                File::delete(public_path('images/client/. $name .'));
                $tujuan='images/client';
                $file->move($tujuan, $name);
            }else{
                $tujuan='images/client';
                $file->move($tujuan, $name);
            }

            DB::table('client')
            ->where('id', $request->id)
            ->update([
                'photo' => $name
            ]);

        }

        return redirect()->back()->with(['success' => 'Data telah terupdate']);
    }

    public function deleteClient(Request $request){
        $client = DB::table('client')
            ->where('id', $request->id_delete_client)
            ->first();

        File::delete('images/client/'.$client->photo);

        DB::table('client')
            ->where('id', $request->id_delete_client)
            ->delete();

        return redirect('admin/client');
    }
    // END CLIENT


    // START PORTFOLIO
    public function portfolio(){
        $data = DB::table("portfolio")
            ->get();

        return view("admin.portfolio.portfolio", compact('data'));
    }

    public function portfolioInsert(Request $request){

        $data = request()->validate([
            'name' => 'required|max:100'
        ]);
 
        DB::table('portfolio')
            ->insert([
                'name' => $request->name
            ]);

        $maks = DB::table('portfolio')
            ->max('id');

        $portfolio = DB::table('portfolio')
            ->where('id', $maks)
            ->first();

        $file = $request->file('photo');
        if($file != null) {
            $name= 'fotoPortfolio' . $portfolio->id . '.' . $file->getClientOriginalExtension();
            $tujuan='images/portfolio';
            $file->move($tujuan, $name);

            DB::table('portfolio')
                ->where('id', $maks)
                ->update([
                    'photo' => $name
                ]);
        }

        return redirect('admin/portfolio');
    }

    public function editPortfolio($id){
        $portfolio = DB::table("portfolio")
            ->where('id', $id)
            ->first();

        return view("admin.portfolio.editportfolio", compact("portfolio"));
    }
    
    public function updatePortfolio(Request $request){
        $data = request()->validate([
            'name' => 'required|max:100'
        ]);

        DB::table('portfolio')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name
            ]);

        $file=$request->file('photo');
        if ($file != null) {
            $name='fotoPortfolio' . $request->id . '.' . $file->getClientOriginalExtension();
            if(File::exists(public_path('images/portfolio/. $name .'))){
                File::delete(public_path('images/portfolio/. $name .'));
                $tujuan='images/portfolio';
                $file->move($tujuan, $name);
            }else{
                $tujuan='images/portfolio';
                $file->move($tujuan, $name);
            }

            DB::table('portfolio')
            ->where('id', $request->id)
            ->update([
                'photo' => $name
            ]);

        }

        return redirect()->back()->with(['success' => 'Data telah terupdate']);
    }

    public function deletePortfolio(Request $request){
        $portfolio = DB::table('portfolio')
            ->where('id', $request->id_delete_portfolio)
            ->first();

        File::delete('images/portfolio/'.$portfolio->photo);

        DB::table('portfolio')
            ->where('id', $request->id_delete_portfolio)
            ->delete();

        return redirect('admin/portfolio');
    }
    // END PORTFOLIO
}