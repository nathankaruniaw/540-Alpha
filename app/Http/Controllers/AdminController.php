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
}