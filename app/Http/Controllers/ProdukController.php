<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Produk;
use File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        $brand = Brand::all();
        
        return view('admin.produk.index',compact('produk','brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        return view('admin.produk.create',compact('brand'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_produk'=> 'required',
            'brand_id'=> 'required',
            'stok'=> 'required',
            'deskripsi'=> 'required',
            'lokasi'=> 'required',
            'foto_produk' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
     
        $foto = $request->file('foto_produk');
        $nama_foto = time()."_".$foto->getClientOriginalName();
        $foto->move('img/produk',$nama_foto);
     
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'brand_id' => $request->brand_id,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'lokasi' => $request->lokasi,
            'foto_produk' => $nama_foto
        ]);

        return redirect()->route('produk.index')->with('sukses', 'Data Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $brand = Brand::all();
        return view('admin.produk.edit',compact('produk','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'nama_produk'=> 'required',
            'brand_id'=> 'required',
            'stok'=> 'required',
            'deskripsi'=> 'required',
            'lokasi'=> 'required',
            'foto_produk' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $produk = Produk::find($id);
        $produk->update($request->all());
        // // update foto            
        if($request->hasFile('foto_produk')){
            File::delete('img/produk/'.$produk->foto_produk);
            $foto = $request->file('foto_produk');
            $nama_foto = time()."_".$foto->getClientOriginalName();
            $foto->move('img/produk',$nama_foto);
            $produk->foto_produk = $nama_foto;
            $produk->update();            
        }
        return redirect()->route('produk.index')->with('sukses', 'Data Produk Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        File::delete('img/produk/'.$produk->foto_produk);
        
        $produk->delete();
        return redirect()->route('produk.index')->with('sukses','Data Produk Berhasil Dihapus');
    }
}
