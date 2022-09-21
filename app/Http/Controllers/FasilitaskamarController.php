<?php

namespace App\Http\Controllers;

use App\Models\Fasilitashotel;
use App\Models\Fasilitaskamar;
use Illuminate\Http\Request;

class FasilitaskamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitaskamar = Fasilitaskamar::paginate(5);
        return view('fasilitaskamar/fasilitaskamar', compact('fasilitaskamar'));
    }

    public function detail($id)
    {
        $fasilitashotel = Fasilitashotel::find($id);
        $fasilitaskamar = Fasilitaskamar::with('fasilitashotel')->find($id);
        return view('fasilitaskamar.detailfasilitaskamar', compact('fasilitashotel','fasilitaskamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitashotel = Fasilitashotel::all();
        return view('fasilitaskamar/fasilitaskamarcreate', compact('fasilitashotel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tersedia = $request->jumlahkamar - $request->jumlahkamar_takterpakai;
        Fasilitaskamar::create([
            'tipekamar' => $request->tipekamar,
            'fasilitashotel_id' => $request->fasilitashotel_id,
            'jumlahkamar' => $request->jumlahkamar,
            'jumlahkamar_tersedia' => $tersedia,
            'jumlahkamar_takterpakai' => $request->jumlahkamar_takterpakai,
            'jumlahkamar_pinjam' => $request->jumlahkamar_pinjam,
            'tarif' => $request->tarif,
        ]);
        return redirect('/fasilitaskamar')->with('success','Data Fasilitaskamar Berhasil Di Tambahkan');

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
        $fasilitashotel = Fasilitashotel::all();
        $fasilitaskamar = Fasilitaskamar::findorfail($id);
        return view('fasilitaskamar/fasilitaskamaredit', compact('fasilitashotel','fasilitaskamar'));
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
        $fasilitaskamar = Fasilitaskamar::findorfail($id);
        $tersedia = $request->jumlahkamar - ($request->jumlahkamar_takterpakai + $fasilitaskamar->jumlahkamar_pinjam);
        $fasilitaskamar->update([
            'tipekamar' => $request->tipekamar,
            'fasilitashotel_id' => $request->fasilitashotel_id,
            'jumlahkamar' => $request->jumlahkamar,
            'jumlahkamar_tersedia' => $tersedia,
            'jumlahkamar_takterpakai' => $request->jumlahkamar_takterpakai,
            'jumlahkamar_pinjam' => $fasilitaskamar->jumlahkamar_pinjam,
            'tarif' => $request->tarif,
        ]);
        return redirect('/fasilitaskamar')->with('success','Data Fasilitas Kamar Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fasilitaskamar = Fasilitaskamar::findorfail($id);
        $fasilitaskamar->delete();
        return redirect('fasilitaskamar');
    }
}
