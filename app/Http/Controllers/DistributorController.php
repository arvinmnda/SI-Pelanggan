<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\facade\PDF;
use App\Models\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index(){

        $distributor = Distributor::get();

        return view('distributor.index',['distributor'=>$distributor]);
      }
      public function tambah()
	  {
		return view('distributor.form');
	  }
	public function downloadpdf()
	{
		$distributor= distributor::all();
		view()->share('distributor', $distributor);
		$pdf = PDF::loadview('distributor.cetak');
		return $pdf->download('laporan_distributor.pdf');;
	}
    
    public function simpan(Request $request)
	{
		$data = [
			'id_distributor' => $request->id_distributor,
            'nama_distributor' => $request->nama_distributor,
            'alamat_distributor' => $request->alamat_distributor,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
		];

		Distributor::create($data);

		return redirect()->route('distributor');
	}

	public function edit($id)
	{
		$distributor = Distributor::find($id);
		return view('distributor.form', ['distributor' => $distributor]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'id_distributor' => $request->id_distributor,
            'nama_distributor' => $request->nama_distributor,
            'alamat_distributor' => $request->alamat_distributor,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
		];

		Distributor::find($id)->update($data);

		return redirect()->route('distributor');
	}

	public function hapus($id)
	{
		Distributor::find($id)->delete();

		return redirect()->route('distributor');
	}
}
