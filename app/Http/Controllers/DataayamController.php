<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dataayam;
use App\Pembelian;

class DataayamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataayam = Dataayam::all();
        return view('admin.Dataayam.index', compact('dataayam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.Dataayam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataayam = new Dataayam();
        $dataayam->jenis = $request->jenis;
        $dataayam->harga = $request->harga;
        $dataayam->berat = $request->berat;
        // gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = public_path() .'/assets/img/dataayam';
            $filename = Str::random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $dataayam->gambar = $filename;
        }
        $dataayam->save();
        return redirect()->route('Dataayam.index');
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
        $dataayam = Dataayam::findOrfail($id);
        return view('admin.Dataayam.edit',compact('dataayam'));
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
        $dataayam = Dataayam::findOrfail($id);
        $dataayam->jenis = $request->jenis;
        $dataayam->harga = $request->harga;
        $dataayam->berat = $request->berat;
        // gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $path = public_path() .'/assets/img/cerpen';
            $filename = Str::random(6) . '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $dataayam->gambar = $filename;
        }
        $dataayam->save();
        $dataayam->save();

        return redirect()->route('Dataayam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataayam = Dataayam::findOrfail($id);
        if(!dataayam::destroy($id)) return redirect()->back();
        return redirect()->route('Dataayam.index');
    }
}
