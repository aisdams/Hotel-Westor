<?php

namespace App\Http\Controllers;

use App\Models\Datapemesanan;
use App\Models\Fasilitaskamar;
use App\Models\User;
use Illuminate\Http\Request;

class DatapemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitaskamar = Fasilitaskamar::all();
        $datapemesanan = Datapemesanan::with('fasilitaskamar')->get();
        return view('datakamar/datapemesanan', compact('datapemesanan','fasilitaskamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitaskamar = Fasilitaskamar::all();
        $datapemesanan = Datapemesanan::with('fasilitaskamar')->paginate('5');
        return view('room-book', compact('datapemesanan','fasilitaskamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Datapemesanan::create($request->all());
        return redirect('/datapemesanan')->with('success','Data Pemesanan Berhasil Di Tambahkan');
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
        $fasilitaskamar = Fasilitaskamar::all();
        $datapemesanan = Datapemesanan::findorfail($id);
        return view('datakamar/datapemesananedit', compact('fasilitaskamar','datapemesanan'));
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
        $datapemesanan = Datapemesanan::findorfail($id);
        $datapemesanan->update();
        $datapemesanan->save();
        return redirect('/datapemesanan')->with('success','Data Pemesanan Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datapemesanan = Datapemesanan::findorfail($id);
        $datapemesanan->delete();
        return redirect('datapemesanan');
    }
}