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

    //PRODUCT 
    public function product(){

        return view('admin.product.product');
    }
    
    public function email(){
        
        return view('admin.email');
    }
    
    public function emailGetData(){

        $data = DB::table('email_user')
            ->get();

        // dd($data);

        return dataTables::of($data)
            ->make(true);
    }

    public function productGetData(){

        $data = DB::table('product')
            ->get();

        // dd($data);

        return dataTables::of($data)
            ->addColumn('btnDetail', function($data){
                return '<a id="buttonDetail" href="/admin/product/edit/'. $data->id .'"><i style="color: black;" class="icon-pencil7"></i></a>';
            })
            ->addColumn('btnDelete', function($data){
                return '<a id="buttonDelete" data-id="'. $data->id .'"><i style="color: red;" class="icon-trash-alt"></i></a>';
            })
            ->rawColumns(['btnDetail', 'btnDelete'])
            ->make(true);
    }

    public function productInsert(Request $request){

        $data = request()->validate([
            'namaProduct' => 'required|max:100',
        ]);
 
        DB::table('product')
            ->insert([
                'namaProduct' => $request->namaProduct,
            ]);

        $maks = DB::table('product')
            ->max('id');

        $Product = DB::table('product')
            ->where('id', $maks)
            ->first();

        $file = $request->file('fotoProduct');
        if($file != null) {
            $name= 'fotoProduct' . $Product->id . '.' . $file->getClientOriginalExtension();
            $tujuan='images/product';
            $file->move($tujuan, $name);

            DB::table('product')
                ->where('id', $maks)
                ->update([
                    'photoProduct' => $name
                ]);
        }
    }

    public function editProduct($id){

        $Product=DB::table('product')
                ->where('id', $id)
                ->first();

        return view('admin/product/editproduct', compact('Product'));
    }

     public function updateProduct(Request $request){
            // dd($request);
 
            $data = request()->validate([
                'namaProduct' => 'required|max:100',
            ]);
 
            DB::table('product')
                ->where('id', $request->idProduct)
                ->update([
                    'namaProduct' => $request->namaProduct,
                ]);
                
            $product = DB::table('product')
                ->where('id', $request->idProduct)
                ->first();
 
            $file=$request->file('fotoProduct');
            if ($file != null) {
 
                File::delete('images/product/'.$product->photoProduct);
                
                $name='fotoProduct' . $request->idProduct . '.' . $file->getClientOriginalExtension();
                $tujuan='images/product/';
                $file->move($tujuan, $name);

                DB::table('product')
                ->where('id', $request->idProduct)
                ->update([
                    'photoProduct' => $name,
                ]);
 
            }
 
            return redirect()->action('AdminController@product');
    }
 
    public function deleteProduct(Request $request){
 
        $Product = DB::table('product')
                ->where('id', $request->id)
                ->first();
 
        File::delete('images/product/'.$Product->photoProduct);

        DB::table('product')
            ->where('id', $request->id)
            ->delete();

        return redirect(url()->previous());
    }

    //NEWS 
    public function news(){

        $data = DB::table('news')
            ->get();

        return view('admin.news.news', compact('data'));
    }

    public function newsInsert(Request $request){

        $data = request()->validate([
            'judulNews' => 'required|max:100',
            'isiNews' => 'required',
            'tanggalNews' => 'required',
            'kategoriNews' => 'required',
        ]);
 
        DB::table('news')
            ->insert([
                'judulNews' => $request->judulNews,
                'isiNews' => $request->isiNews,
                'tanggalNews' => $request->tanggalNews,
                'kategoriNews' => $request->kategoriNews,
            ]);

        $maks = DB::table('news')
            ->max('id');

        $news = DB::table('news')
            ->where('id', $maks)
            ->first();

        $file = $request->file('fotoNews');
        if($file != null) {
            $name= 'fotoNews' . $news->id . '.' . $file->getClientOriginalExtension();
            $tujuan='images/news/';
            $file->move($tujuan, $name);

            DB::table('news')
                ->where('id', $maks)
                ->update([
                    'photoNews' => $name
                ]);
        }
    }

    public function editNews($id){

        $news=DB::table('news')
                ->where('id', $id)
                ->first();

        return view('admin/news/editnews', compact('news'));
    }

     public function updateNews(Request $request){
            // dd($request);
 
            $data = request()->validate([
                'judulNews' => 'required|max:100',
                'deskripsiNews' => 'required',
                'tanggalNews' => 'required',
                'kategoriNews' => 'required',
            ]);
 
            DB::table('news')
                ->where('id', $request->idNews)
                ->update([
                    'judulNews' => $request->judulNews,
                    'deskripsiNews' => $request->deskripsiNews,
                    'tanggalNews' => $request->tanggalNews,
                    'kategoriNews' => $request->kategoriNews,
                ]);
 
            $file=$request->file('fotoNews');
            if ($file != null) {
 
                $name='fotoNews' . $request->idNews . '.' . $file->getClientOriginalExtension();
                if(File::exists(public_path('images/news/. $name .'))){
                    File::delete(public_path('images/news/. $name .'));
                    $tujuan='images/news/';
                    $file->move($tujuan, $name);
                }else{
                    $tujuan='images/news';
                    $file->move($tujuan, $name);
                }

                DB::table('news')
                ->where('id', $request->idNews)
                ->update([
                    'photoNews' => $name,
                ]);
 
            }

            return redirect()->action('AdminController@news');
    }
 
    public function deleteNews(Request $request){
 
        $news = DB::table('news')
                ->where('id', $request->id)
                ->first();
 
        File::delete('images/news/'.$news->photoNews);

        DB::table('news')
            ->where('id', $request->id)
            ->delete();

        return redirect(url()->previous());
    }
}