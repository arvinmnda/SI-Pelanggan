<?php

namespace App\Http\Controllers;
use App\Models\DataPoin;
use App\Models\Konsumen;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class DataPoinController extends Controller
{
    public function index(){

        $datapoin = DataPoin::get();

        return view('datapoin.index',['datapoin'=>$datapoin]);
      }
      public function tambah()
	  {
		$konsumen = Konsumen::all();
    	$pelanggan = Pelanggan::all();
    	$data = array_merge(compact('konsumen'), compact('pelanggan'));
		return view('datapoin.form', $data);
	  }
	  public function downloadpdf()
	{
		$datapoin = DataPoin::all();
		view()->share('datapoin', $datapoin);
		$pdf = PDF::loadview('datapoin.cetak');
		return $pdf->download('laporan_datapoin.pdf');
	}
    
    public function simpan(Request $request)
	{
		$data = [
			'kode_poin' => $request->kode_poin,
            'jumlah_poin' => $request->jumlah_poin,
			'nama_konsumen' => $request->nama_konsumen,
			'nama_pelanggan' => $request->nama_pelanggan,
		];

		DataPoin::create($data);

		return redirect()->route('datapoin');
	}

	public function edit($id)
	{
		$datapoin = DataPoin::find($id);
		$konsumen = Konsumen::all();
		$pelanggan = Pelanggan::all();
		return view('datapoin.form', ['datapoin' => $datapoin, 'konsumen' => $konsumen, 'pelanggan' => $pelanggan]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'kode_poin' => $request->kode_poin,
            'jumlah_poin' => $request->jumlah_poin,
			'nama_konsumen' => $request->nama_konsumen,
			'nama_pelanggan' => $request->nama_pelanggan,
		];

		DataPoin::find($id)->update($data);

		return redirect()->route('datapoin');
	}

	public function hapus($id)
	{
		DataPoin::find($id)->delete();

		return redirect()->route('datapoin');
	}
}
