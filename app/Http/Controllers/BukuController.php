<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = DB::table('buku')->Paginate(5);
        return view('blog.buku', compact('buku'));
    }

    public function create()
    {
        return view('blog.buku.insertBuku');
    }

    public function insert(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:35',
            'tahunBuku' => 'required|min:4',
            'stockBuku' => 'required'
        ]);

        DB::table('buku')->insert([
            'nama_buku' => $request->name,
            'kategori_buku' => $request->kategori,
            'penerbit_buku' => $request->penerbit,
            'tahun_buku' => $request->tahunBuku,
            'jumlah_buku' => $request->stockBuku,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/buku');
    }

    public function edit($id)
    {
        $buku = DB::table('buku')->where('id', $id)->get();
        return view('blog/buku/editBuku', ['buku' => $buku]);
    }

    public function update(Request $request)
    {
        DB::table('buku')->where('id', $request->id)->update([
            'nama_buku' => $request->name,
            'kategori_buku' => $request->kategori,
            'penerbit_buku' => $request->penerbit,
            'tahun_buku' => $request->tahunBuku,
            'jumlah_buku' => $request->stockBuku
        ]);
        return redirect('/buku');
    }
    public function delete(Request $request, $id)
    {
        //Menghapus data dari database berdasarkan id yang telah dikirim
        DB::table('buku')->where('id',$request->id)->delete();
        return redirect('/buku');
        }
    

}

