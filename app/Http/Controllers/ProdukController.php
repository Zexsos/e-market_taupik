<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Http\Requests\StoreprodukRequest;
use App\Http\Requests\UpdateprodukRequest;
use Exception;
use Illuminate\Database\QueryException;
use PDO;
use PDOException;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $data['produk']= produk::orderBy('created_at','DESC')->get();

            return view('produk.index')->with($data);
        }catch(QueryException|Exception|PDOException $error){
            return"terjadi kesalahan" . $error->getMessage();
        }
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
    public function store(StoreprodukRequest $request)
    {
        //try{
            //DB::beginTransaction();
            
            produk::create($request->all());
            
            //DB::commit();
            
            return redirect('produk')-> with('success','Data produk berhasil ditambahkan');

        //}catch(QueryException|Exception|PDOException $error){
          //  DB::rollBack();
            //$this->failResponse($error->getMessage(),$error->getCode());
        //}
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateprodukRequest $request, produk $produk)
    {
    $produk->update($request->all());
        return redirect('produk')->with('success','Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        try{
            $produk->delete();
            return redirect('produk')->with('success','Data Berhasil di hapus');
        }catch(QueryException | Exception | PDOException $error){
            $this -> failResponse($error -> getMessage(),$error->getCode());
        }
    }
}
