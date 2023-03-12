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
    public function dashboard(){

        return view('admin.dashboard');
    }

    //clients 
    public function clients(){

        return view('admin.clients.clients');
    }

    public function clientGetData(){

        $data = DB::table('advisory_client')
            ->get();

        // dd($data);

        return dataTables::of($data)
            ->addColumn('btnDetail', function($data){
                return '<a id="buttonDetail" href="/admin/clients/edit/'. $data->id .'"><i style="color: black;" class="icon-pencil7"></i></a>';
            })
            ->addColumn('btnDelete', function($data){
                return '<a id="buttonDelete" data-id="'. $data->id .'"><i style="color: red;" class="icon-trash-alt"></i></a>';
            })
            ->rawColumns(['btnDetail', 'btnDelete'])
            ->make(true);
    }

    public function clientsInsert(Request $request){

        $data = request()->validate([
            'client_name' => 'required|max:100',
        ]);
 
        DB::table('advisory_client')
            ->insert([
                'client_name' => $request->client_name,
            ]);

        $maks = DB::table('advisory_client')
            ->max('id');

        $clients = DB::table('advisory_client')
            ->where('id', $maks)
            ->first();

        $file = $request->file('client_photo');
        if($file != null) {
            $name= 'client_photo' . $clients->id . '.' . $file->getClientOriginalExtension();
            $tujuan='images/clients';
            $file->move($tujuan, $name);

            DB::table('advisory_client')
                ->where('id', $maks)
                ->update([
                    'client_photo' => $name
                ]);
        }
    }

    public function editclients($id){

        $clients=DB::table('advisory_client')
                ->where('id', $id)
                ->first();

        return view('admin/clients/editclients', compact('clients'));
    }

     public function updateclients(Request $request){
            // dd($request);
 
            $data = request()->validate([
                'client_name' => 'required|max:100',
            ]);
 
            DB::table('advisory_client')
                ->where('id', $request->id)
                ->update([
                    'client_name' => $request->client_name,
                ]);
                
            $clients = DB::table('advisory_client')
                ->where('id', $request->id)
                ->first();
 
            $file=$request->file('client_photo');
            if ($file != null) {
 
                File::delete('images/clients/'.$clients->client_photo);
                
                $name='client_photo' . $request->idclients . '.' . $file->getClientOriginalExtension();
                $tujuan='images/clients/';
                $file->move($tujuan, $name);

                DB::table('advisory_client')
                ->where('id', $request->id)
                ->update([
                    'client_photo' => $name,
                ]);
 
            }
 
            return redirect()->action('AdminController@clients');
    }
 
    public function deleteclients(Request $request){
 
        $clients = DB::table('advisory_client')
                ->where('id', $request->id)
                ->first();
 
        File::delete('images/clients/'.$clients->client_photo);

        DB::table('advisory_client')
            ->where('id', $request->id)
            ->delete();

        return redirect(url()->previous());
    }

    //portfolio 
    public function portfolio(){

        $data = DB::table('portfolio')
            ->get();

        return view('admin.portfolio.portfolio', compact('data'));
    }

    public function portfolioInsert(Request $request){

        $data = request()->validate([
            'portfolio_name' => 'required|max:100',
        ]);
 
        DB::table('portfolio')
            ->insert([
                'portfolio_name' => $request->portfolio_name
            ]);

        $maks = DB::table('portfolio')
            ->max('id');

        $portfolio = DB::table('portfolio')
            ->where('id', $maks)
            ->first();

        $file = $request->file('portfolio_photo');
        if($file != null) {
            $name= 'fotoportfolio' . $portfolio->id . '.' . $file->getClientOriginalExtension();
            $tujuan='images/portfolio/';
            $file->move($tujuan, $name);

            DB::table('portfolio')
                ->where('id', $maks)
                ->update([
                    'portfolio_photo' => $name
                ]);
        }
    }

    public function editportfolio($id){

        $portfolio=DB::table('portfolio')
                ->where('id', $id)
                ->first();

        return view('admin/portfolio/editportfolio', compact('portfolio'));
    }

     public function updateportfolio(Request $request){
            // dd($request);
 
            $data = request()->validate([
                'judulportfolio' => 'required|max:100',
                'deskripsiportfolio' => 'required',
                'tanggalportfolio' => 'required',
                'kategoriportfolio' => 'required',
            ]);
 
            DB::table('portfolio')
                ->where('id', $request->idportfolio)
                ->update([
                    'judulportfolio' => $request->judulportfolio,
                    'deskripsiportfolio' => $request->deskripsiportfolio,
                    'tanggalportfolio' => $request->tanggalportfolio,
                    'kategoriportfolio' => $request->kategoriportfolio,
                ]);
 
            $file=$request->file('fotoportfolio');
            if ($file != null) {
 
                $name='fotoportfolio' . $request->idportfolio . '.' . $file->getClientOriginalExtension();
                if(File::exists(public_path('images/portfolio/. $name .'))){
                    File::delete(public_path('images/portfolio/. $name .'));
                    $tujuan='images/portfolio/';
                    $file->move($tujuan, $name);
                }else{
                    $tujuan='images/portfolio';
                    $file->move($tujuan, $name);
                }

                DB::table('portfolio')
                ->where('id', $request->idportfolio)
                ->update([
                    'photoportfolio' => $name,
                ]);
 
            }

            return redirect()->action('AdminController@portfolio');
    }
 
    public function deleteportfolio(Request $request){
 
        $portfolio = DB::table('portfolio')
                ->where('id', $request->id)
                ->first();
 
        File::delete('images/portfolio/'.$portfolio->photoportfolio);

        DB::table('portfolio')
            ->where('id', $request->id)
            ->delete();

        return redirect(url()->previous());
    }
}