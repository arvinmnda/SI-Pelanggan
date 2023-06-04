<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Barryvdh\DomPDF\facade\PDF;
use Illuminate\Http\Request;
use App\Models\TransaksiPenjualan;
use App\Models\RiwayatTransaksiKonsumen;
use App\Models\RiwayatTransaksiPelanggan;

class TransaksiPenjualanController extends Controller
{
    public function index(){

        $transaksipenjualan =TransaksiPenjualan::get();

        return view('transaksipenjualan.index',['transaksipenjualan'=>$transaksipenjualan]);
      }
      public function tambah()
	  {
		$riwayattransaksikonsumen =RiwayatTransaksiKonsumen::all();
    	$riwayattransaksipelanggan =RiwayatTransaksiPelanggan::all();
		$barang = Barang::all();
    	$data = array_merge(compact('riwayattransaksikonsumen'), compact('riwayattransaksipelanggan'), compact('barang'));
		return view('transaksipenjualan.form', $data);
	  }
	public function downloadpdf()
	{
		$transaksipenjualan=  TransaksiPenjualan::all();
		view()->share('transaksipenjualan',  $transaksipenjualan);
		$pdf = PDF::loadview('transaksipenjualan.cetak');
		return $pdf->download('laporan_transaksipenjualan.pdf');;
	}
    
  public function simpan(Request $request)
	{
		$data = [
			'id_transaksi' => $request->id_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'total_harga' => $request->total_harga,
            'jumlah_barang' => $request->jumlah_barang,
		];

		TransaksiPenjualan::create($data);

		return redirect()->route('transaksipenjualan');
	}

	public function edit($id)
	{
		$transaksipenjualan= TransaksiPenjualan::find($id);
		$riwayattransaksikonsumen =RiwayatTransaksiKonsumen::all();
    	$riwayattransaksipelanggan =RiwayatTransaksiPelanggan::all();
		$barang = Barang::all();
		return view('transaksipenjualan.form', ['transaksipenjualan' => $transaksipenjualan, 'riwayattransaksikonsumen' => $riwayattransaksikonsumen, 'riwayattransaksipelanggan' => $riwayattransaksipelanggan, 'barang' => $barang]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'id_transaksi' => $request->id_transaksi,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'total_harga' => $request->total_harga,
            'jumlah_barang' => $request->jumlah_barang,
		];

		TransaksiPenjualan::find($id)->update($data);

		return redirect()->route('transaksipenjualan');
	}

	public function hapus($id)
	{
		TransaksiPenjualan::find($id)->delete();

		return redirect()->route('transaksipenjualan');
	}
}
