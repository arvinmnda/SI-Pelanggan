<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\RiwayatTransaksiKonsumen;
use Barryvdh\DomPDF\Facade\PDF;
class RiwayatTransaksiKonsumenController extends Controller
{
    public function index(){

        $riwayattransaksikonsumen =RiwayatTransaksiKonsumen::get();

        return view('riwayattransaksikonsumen.index',['riwayattransaksikonsumen'=>$riwayattransaksikonsumen]);
      }
      public function tambah()
	  {
		$barang = Barang::all();
		return view('riwayattransaksikonsumen.form', compact('barang'));
	  }
	public function downloadpdf()
	{
		$riwayattransaksikonsumen = RiwayatTransaksiKonsumen::all();
		view()->share('riwayattransaksikonsumen', $riwayattransaksikonsumen);
		$pdf = PDF::loadview('riwayattransaksikonsumen.cetak');
		return $pdf->download('laporan_riwayattransaksikonsumen.pdf');
	}
    
  public function simpan(Request $request)
	{
		$data = [
			'id_transaksi' => $request->id_transaksi,
			'id_transaksi_penukaran_poin' => $request->id_transaksi_penukaran_poin,
			'nama_barang' => $request->nama_barang,
			'total_harga' => $request->total_harga,
            'jumlah_barang' => $request->jumlah_barang,
		];

		RiwayatTransaksiKonsumen::create($data);

		return redirect()->route('riwayattransaksikonsumen');
	}

	public function edit($id)
	{
		$riwayattransaksikonsumen = RiwayatTransaksiKonsumen::find($id);
		$barang = Barang::all();
		return view('riwayattransaksikonsumen.form', ['riwayattransaksikonsumen' => $riwayattransaksikonsumen, 'barang' => $barang]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'id_transaksi' => $request->id_transaksi,
			'id_transaksi_penukaran_poin' => $request->id_transaksi_penukaran_poin,
			'nama_barang' => $request->nama_barang,
			'total_harga' => $request->total_harga,
            'jumlah_barang' => $request->jumlah_barang,
		];

		RiwayatTransaksiKonsumen::find($id)->update($data);

		return redirect()->route('riwayattransaksikonsumen');
	}

	public function hapus($id)
	{
		RiwayatTransaksiKonsumen::find($id)->delete();

		return redirect()->route('riwayattransaksikonsumen');
	}
}
