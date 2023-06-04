<?php

namespace App\Http\Controllers;
use App\Models\Konsumen;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
class KonsumenController extends Controller
{
    public function index(){

        $konsumen = Konsumen::get();

        return view('konsumen.index',['konsumen'=>$konsumen]);
      }
      public function tambah()
	  {
		return view('konsumen.form');
	  }
	public function downloadpdf()
	{
		$konsumen = Konsumen::all();
		view()->share('konsumen', $konsumen);
		$pdf = PDF::loadview('konsumen.cetak');
		return $pdf->download('laporan_konsumen.pdf');
	}
    
  public function simpan(Request $request)
	{
		$data = [
			'id_konsumen' => $request->id_konsumen,
			'nama_konsumen' => $request->nama_konsumen,
			'alamat' => $request->alamat,
			'email' => $request->email,
		];

		Konsumen::create($data);

		return redirect()->route('konsumen');
	}

	public function edit($id)
	{
		$konsumen = Konsumen::find($id);
		return view('konsumen.form', ['konsumen' => $konsumen]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'id_konsumen' => $request->id_konsumen,
			'nama_konsumen' => $request->nama_konsumen,
			'alamat' => $request->alamat,
			'email' => $request->email,
		];

		Konsumen::find($id)->update($data);

		return redirect()->route('konsumen');
	}

	public function hapus($id)
	{
		Konsumen::find($id)->delete();

		return redirect()->route('konsumen');
	}
}
