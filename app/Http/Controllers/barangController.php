<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\Role;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new barang();
        $barang->jenis = $request->jenis;
        $barang->harga = $request->harga;
        $barang->save();
        Session::flash("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menyimpan<b>"
                        . $barang->jenis,"</b>"
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = barang::findOrFail($id);
        return view('barang.show',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = barang::findOrFail($id);
        return view('barang.edit',compzct('barang'));
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
        $barang = new barang();
        $barang->jenis = $request->jenis;
        $barang->harga = $request->harga;
        $barang->save();
        Session::flash("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menyimpan<b>"
                        . $barang->jenis,"</b>"
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::findOrFail($id);
        if(!barang::destory($id)) return redirect()->back();
        Session::flah("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menghapus<b>"
                        . $barang->jenis."</b>"
        ]);
        return redirect()->route('barang.index');
    }
}
