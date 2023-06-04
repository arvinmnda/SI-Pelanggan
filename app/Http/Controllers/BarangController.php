<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Barang;
use Barryvdh\DomPDF\Facade\PDF;
class BarangController extends Controller
{
    public function index(){
      $barang = Barang::get();
      
      return view('barang/index', ['barang'=>$barang]);
    }

    public function tambah()
	  {
		return view('barang.form');
	  }
	  public function downloadpdf()
	  {
		  $barang = Barang::all();
		  view()->share('barang', $barang);
		  $pdf = PDF::loadview('barang.cetak');
		  return $pdf->download('laporan_barang.pdf');
	  }
  	public function simpan(Request $request)
	{
		$data = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'kategori_barang' => $request->kategori_barang,
			'harga' => $request->harga,
			'stok_barang' => $request->stok_barang,
		];

		Barang::create($data);

		return redirect()->route('barang');
	}

	public function edit($id)
	{
		$barang = Barang::find($id);
		return view('barang.form', ['barang' => $barang]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'kategori_barang' => $request->kategori_barang,
			'harga' => $request->harga,
			'stok_barang' => $request->stok_barang,
		];

		Barang::find($id)->update($data);

		return redirect()->route('barang');
	}

	public function hapus($id)
	{
		Barang::find($id)->delete();

		return redirect()->route('barang');
	}
}
