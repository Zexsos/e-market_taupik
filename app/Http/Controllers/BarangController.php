<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //try{
            $data['Barang']= Barang::orderBy('created_at','DESC')->get();

            return view('Barang.index')->with($data);
        //}catch(QueryException|Exception|PDOException $error){
          //  return"terjadi kesalahan" . $error->getMessage();
        //}
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {
        Barang::create($request->all());
        return redirect('barang')-> with('success','Data produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, Barang $barang)
    {
        $barang->update($request->all());
        return redirect('barang')->with('success','Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //try{
            $barang->delete();
            return redirect('barang')->with('success','Data Berhasil di hapus');
        //}catch(QueryException | Exception | PDOException $error){
          //  $this -> failResponse($error -> getMessage(),$error->getCode());
        //}
    }
}
