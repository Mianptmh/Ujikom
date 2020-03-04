<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dataayam;
use App\Role;

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
        $dataayam->jenis_ayam = $request->jenis_ayam;
        $dataayam->berat = $request->berat;
        $dataayam->save();

        return redirect()->route('dataayam.index');
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
        $dataayam->jenis_ayam = $request->jenis_ayam;
        $dataayam->berat = $request->berat;
        $dataayam->save();

        return redirect()->route('dataayam.index');
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
