<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Pembeli;
use App\Dataayam;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::orderBy('created_at','desc')->get();
        return view('admin.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = Transaksi::all();
        $pembeli = Pembeli::all();
        $dataayam = Dataayam::all();
        return view('admin.transaksi.create', compact('pembeli','dataayam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->id_dataayam = $request->id_dataayam;
        $transaksi->jumlah_ayam = $request->jumlah_ayam;
        $transaksi->harga_total = $request->harga_total;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrfail($id);
        $pembeli = Pembeli::all();
        $dataayam = Dataayam::all();
        return view('admin.transaksi.edit', compact('transaksi','pembeli','dataayam'));
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
        $transaksi = Transaksi::findOrfail($id);
        $transaksi->id_pembeli = $request->id_pembeli;
        $transaksi->id_dataayam = $request->id_dataayam;
        $transaksi->jumlah_ayam = $request->jumlah_ayam;
        $transaksi->harga_total = $request->harga_total;
        $transaksi->save();

        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index');
    }
}
