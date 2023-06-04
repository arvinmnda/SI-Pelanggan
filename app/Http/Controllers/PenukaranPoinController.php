<?php

namespace App\Http\Controllers;

use App\Models\DataPoin;
use App\Models\Konsumen;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\PenukaranPoin;
use App\Models\RiwayatTransaksiKonsumen;
use App\Models\RiwayatTransaksiPelanggan;

class PenukaranPoinController extends Controller
{
    public function index(){

        $penukaranpoin = PenukaranPoin::get();

        return view('penukaranpoin.index',['penukaranpoin'=>$penukaranpoin]);
      }
      public function tambah()
	  {
		$riwayattransaksikonsumen =RiwayatTransaksiKonsumen::all();
    	$riwayattransaksipelanggan =RiwayatTransaksiPelanggan::all();
		$datapoin = DataPoin::all();
		$pelanggan = Pelanggan::all();
		$konsumen = Konsumen::all();
		$data = array_merge(compact('riwayattransaksipelanggan'),compact('riwayattransaksikonsumen'), compact('datapoin'), compact('pelanggan'), compact('konsumen'));
		return view('penukaranpoin.form', $data);
	  }
	public function downloadpdf()
	{
		$penukaranpoin= PenukaranPoin::all();
		view()->share('penukaranpoin', $penukaranpoin);
		$pdf = PDF::loadview('penukaranpoin.cetak');
		return $pdf->download('laporan_penukaranpoin.pdf');;
	}
    
    public function simpan(Request $request)
	{
		$data = [
			'kode_poin' => $request->kode_poin,
            'jumlah_poin' => $request->jumlah_poin,
			'nama_pelanggan' => $request->nama_pelanggan,
			'nama_konsumen' => $request->nama_konsumen,
            'nama_barang_konsumen' => $request->nama_barang_konsumen,
			'nama_barang_pelanggan' => $request->nama_barang_pelanggan,
			'tanggal_penukaran' => $request->tanggal_penukaran,
		];

		PenukaranPoin::create($data);

		return redirect()->route('penukaranpoin');
	}

	public function edit($id)
	{
		$penukaranpoin =PenukaranPoin::find($id);
		$riwayattransaksikonsumen =RiwayatTransaksiKonsumen::all();
    	$riwayattransaksipelanggan =RiwayatTransaksiPelanggan::all();
		$datapoin = DataPoin::all();
		$pelanggan = Pelanggan::all();
		$konsumen = Konsumen::all();
		return view('penukaranpoin.form', ['penukaranpoin' => $penukaranpoin, 'riwayattransaksikonsumen' => $riwayattransaksikonsumen,'riwayattransaksipelanggan' => $riwayattransaksipelanggan, 'datapoin' => $datapoin, 'pelanggan' => $pelanggan, 'konsumen' => $konsumen]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'kode_poin' => $request->kode_poin,
            'jumlah_poin' => $request->jumlah_poin,
			'nama_pelanggan' => $request->nama_pelanggan,
			'nama_konsumen' => $request->nama_konsumen,
            'nama_barang_konsumen' => $request->nama_barang_konsumen,
			'nama_barang_pelanggan' => $request->nama_barang_pelanggan,
			'tanggal_penukaran' => $request->tanggal_penukaran,
		];

		PenukaranPoin::find($id)->update($data);

		return redirect()->route('penukaranpoin');
	}

	public function hapus($id)
	{
		PenukaranPoin::find($id)->delete();

		return redirect()->route('penukaranpoin');
	}
}
