<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use App\Http\Requests\StorepelangganRequest;
use App\Http\Requests\UpdatepelangganRequest;
use Exception;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Database\QueryException;
use PDOException;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // try{
            $data['pelanggan']= pelanggan::get();
            return view('pelanggan.index')->with($data);
        //}catch(QueryException|Exception|PDOException $error){
         //   $this->failResponse($error->getMessage(),$error->getCode());
       // }
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
    public function store(StorepelangganRequest $request)
    {

        pelanggan::create($request->all());
        return redirect('pelanggan')-> with('success','Data produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepelangganRequest $request, pelanggan $pelanggan)
    {
        $pelanggan->update($request->all());
        return redirect('pelanggan')->with('success','Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pelanggan $pelanggan)
    {
        try{
            $pelanggan->delete();
            return redirect('pelanggan')->with('success','Data Berhasil di hapus');
        }catch(QueryException | Exception | PDOException $error){
            $this -> failResponse($error -> getMessage(),$error->getCode());
        }
    }
}
