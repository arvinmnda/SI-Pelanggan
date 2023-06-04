<?php

namespace App\Http\Controllers;
use App\Models\Konsumen;
use Barryvdh\DomPDF\facade\PDF;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\JenisTransaksi;

class JenisTransaksiController extends Controller
{
    public function index(){

        $jenistransaksi = JenisTransaksi::get();

        return view('jenistransaksi.index',['jenistransaksi'=>$jenistransaksi]);
      }
      public function tambah()
	  {
		$konsumen = Konsumen::all();
    	$pelanggan = Pelanggan::all();
    	$data = array_merge(compact('konsumen'), compact('pelanggan'));
    	return view('jenistransaksi.form', $data);
	  }
	  public function downloadpdf()
	{
		$jenistransaksi = JenisTransaksi::all();
		view()->share('jenistransaksi', $jenistransaksi);
		$pdf = PDF::loadview('jenistransaksi.cetak');
		return $pdf->download('laporan_jenistransaksi.pdf');
	}
    
  public function simpan(Request $request)
	{
		$data = [
			'kode_jenis_transaksi' => $request->kode_jenis_transaksi,
			'nama_jenis_transaksi' => $request->nama_jenis_transaksi,
			'id_konsumen' => $request->id_konsumen,
			'id_pelanggan' => $request->id_pelanggan,
		];

		JenisTransaksi::create($data);

		return redirect()->route('jenistransaksi');
	}

	public function edit($id)
	{
		$jenistransaksi = JenisTransaksi::find($id);
		$konsumen = Konsumen::all();
		$pelanggan = Pelanggan::all();
		return view('jenistransaksi.form', ['konsumen' =>$konsumen, 'jenistransaksi' => $jenistransaksi, 'pelanggan' => $pelanggan]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'kode_jenis_transaksi' => $request->kode_jenis_transaksi,
			'nama_jenis_transaksi' => $request->nama_jenis_transaksi,
			'id_konsumen' => $request->id_konsumen,
			'id_pelanggan' => $request->id_pelanggan,
		];

		JenisTransaksi::find($id)->update($data);

		return redirect()->route('jenistransaksi');
	}

	public function hapus($id)
	{
		JenisTransaksi::find($id)->delete();

		return redirect()->route('jenistransaksi');
	}
}
