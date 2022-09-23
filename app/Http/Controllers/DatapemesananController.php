<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Models\Datapemesanan;
use App\Models\Fasilitashotel;
use App\Models\Fasilitaskamar;

class DatapemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitashotel = Fasilitashotel::all();
        $fasilitaskamar = Fasilitaskamar::all();
        $datapemesanan = Datapemesanan::with('fasilitaskamar','fasilitashotel')->paginate(10);
        return view('tripstamu', compact('datapemesanan','fasilitaskamar','fasilitashotel'));
    }

    public function detail($id)
    {
        $fasilitashotel = Fasilitashotel::find($id);
        $fasilitaskamar = Fasilitaskamar::find($id);
        $datapemesanan = Datapemesanan::with('fasilitashotel','fasilitaskamar')->find($id);
        return view('', compact('fasilitashotel','fasilitaskamar','datapemesanan'));
    }
    
    public function cetakinvoice(PDF $pdfCreator, $id)
    {
        $fasilitashotel = Fasilitashotel::find($id);
        $fasilitaskamar = Fasilitaskamar::find($id);
        $datapemesanan = Datapemesanan::with('fasilitashotel','fasilitaskamar')->find($id)->all();
        view()->share('datapemesanan', '$datapemesanan');
        $pdf = $pdfCreator->loadView('myinvoicepdf', ['datapemesanan' => $datapemesanan]);
        return $pdf->download('myinvoice.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fasilitashotel = Fasilitashotel::all();
        $fasilitaskamar = Fasilitaskamar::all();
        $datapemesanan = Datapemesanan::with('fasilitashotel','fasilitaskamar')->paginate('5');
        return view('room-detail', compact('fasilitashotel','datapemesanan','fasilitaskamar'));
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
        return redirect('/index/account/mytrip')->with('success','Data Pemesanan Berhasil Di Tambahkan');
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
        $fasilitaskamar = Fasilitaskamar::all();
        $datapemesanan = Datapemesanan::findorfail($id);
        return view('datakamar.datapemesananedit', compact('fasilitashotel','fasilitaskamar','datapemesanan'));
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
        $datapemesanan->update([
            'bprorng' => $request->bprorng,
            'fasilitaskamar_id' => $request->fasilitaskamar_id,
            'fasilitashotel_id' => $request->fasilitashotel_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'status' => $request->status,
            'jumlahkamar_pinjam' => $request->jumlahkamar_pinjam,
            'notelp' => $request->notelp,
            'tanggal_checkin' => $request->tanggal_checkin,
            'tanggal_checkout' => $request->tanggal_checkout,
            'spesialrequest' => $request->spesialrequest,
        ]);
        return redirect('checkpemesanan')->with('success','Data Pemesanan Berhasil Di Edit');
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
        return redirect('/index/account/mytrip');
    }
}