<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang=Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'tanggal_produksi' => 'required',
            'tanggal_expired' => 'required',
            'stok' => 'required',
            'harga' => 'require'
        ]);
        Barang::create($request->all());

        return redirect()->route('')
        ->with('succes', 'Barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $nama_barang)
    {
        $Barang = Barang::find($nama_barang);
        return view('barang.detail', compact('Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($nama_barang)
    {
        $Barang = Barang::find($nama_barang);
        return view('barang.detail', compact('Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nama_barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'tanggal_produksi' => 'required',
            'tanggal_expired' => 'required',
            'stok' => 'required',
            'harga' => 'require'
        ]);
        Barang::find($nama_barang)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($nama_barang)
    {
        Barang::find($nama_barang)->delete();
        return redirect()->route()
        ->with('succes', 'Barang berhasil Dihapus');
    }
}
