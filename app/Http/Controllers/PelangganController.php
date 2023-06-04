<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
class PelangganController extends Controller
{
    public function index(){

        $pelanggan = Pelanggan::get();

        return view('pelanggan.index',['pelanggan'=>$pelanggan]);
      }
      public function tambah()
	  {
		return view('pelanggan.form');
	  }
	  public function downloadpdf()
	{
		$pelanggan = Pelanggan::all();
		view()->share('pelanggan', $pelanggan);
		$pdf = PDF::loadview('pelanggan.cetak');
		return $pdf->download('laporan_pelanggan.pdf');
	}
    
  public function simpan(Request $request)
	{
		$data = [
			'id_pelanggan' => $request->id_pelanggan,
			'nama_pelanggan' => $request->nama_pelanggan,
			'alamat' => $request->alamat,
			'email' => $request->email,
		];

		Pelanggan::create($data);

		return redirect()->route('pelanggan');
	}

	public function edit($id)
	{
		$pelanggan = Pelanggan::find($id);
		return view('pelanggan.form', ['pelanggan' => $pelanggan]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'id_pelanggan' => $request->id_pelanggan,
			'nama_pelanggan' => $request->nama_pelanggan,
			'alamat' => $request->alamat,
			'email' => $request->email,
		];

		Pelanggan::find($id)->update($data);

		return redirect()->route('pelanggan');
	}

	public function hapus($id)
	{
		Pelanggan::find($id)->delete();

		return redirect()->route('pelanggan');
	}
}
