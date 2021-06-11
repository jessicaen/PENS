<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KFSales;

class KFSalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $KFSales = KFSales::all();
        return response()->json($KFSales , 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $KFSales = KFSales::create([
            'Nama_Produk' => $request->Nama_Produk,
            'Nama_Bisnis_Manager' => $request->Nama_Bisnis_Manager,
            'Provinsi' => $request->Provinsi,
            'Qty_Sales' => $request->Qty_Sales,
            'Satuan' => $request->Satuan,
            'Tanggal_Upload' => $request->Tanggal_Upload

        ]);

        $data = ['message' =>'Nama Produk berhasil ditambahkan.'];
        return response()->json($data, 200);

 }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $KFSales = KFSales::where('id',$id)->first();
        return response()->json($KFSales , 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $KFSales = KFSales::where('id',$id)->update([
            'Nama_Produk' => $request->Nama_Produk,
            'Nama_Bisnis_Manager' => $request->Nama_Bisnis_Manager,
            'Provinsi' => $request->Provinsi,
            'Qty_Sales' => $request->Qty_Sales,
            'Satuan' => $request->Satuan,
            'Tanggal_Upload' => $request->Tanggal_Upload
        ]);
        $data = ['message' =>'Nama Produk berhasil diupdate.'];
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $KFSales = KFSales::where('id',$id)->delete();
        $data = ['message' =>'Nama Produk berhasil dihapus.'];
        return response()->json($data, 200);
    }
}
