<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\RiwayatTransaksiPelanggan;
use Barryvdh\DomPDF\Facade\PDF;

class RiwayatTransaksiPelangganController extends Controller
{
    public function index(){

        $riwayattransaksipelanggan =RiwayatTransaksiPelanggan::get();

        return view('riwayattransaksipelanggan.index',['riwayattransaksipelanggan'=>$riwayattransaksipelanggan]);
      }
      public function tambah()
	  {
		$barang = Barang::all();
		return view('riwayattransaksipelanggan.form', compact('barang'));
	  }
	  public function downloadpdf()
	{
		$riwayattransaksipelanggan = RiwayatTransaksiPelanggan::all();
		view()->share('riwayattransaksipelanggan', $riwayattransaksipelanggan);
		$pdf = PDF::loadview('riwayattransaksipelanggan.cetak');
		return $pdf->download('laporan_riwayattransaksipelanggan.pdf');
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

		RiwayatTransaksiPelanggan::create($data);

		return redirect()->route('riwayattransaksipelanggan');
	}

	public function edit($id)
	{
		$riwayattransaksipelanggan = RiwayatTransaksiPelanggan::find($id);
		$barang = Barang::all();
		return view('riwayattransaksipelanggan.form', ['riwayattransaksipelanggan' => $riwayattransaksipelanggan, 'barang' => $barang]);
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

		RiwayatTransaksiPelanggan::find($id)->update($data);

		return redirect()->route('riwayattransaksipelanggan');
	}

	public function hapus($id)
	{
		RiwayatTransaksiPelanggan::find($id)->delete();

		return redirect()->route('riwayattransaksipelanggan');
	}
}
