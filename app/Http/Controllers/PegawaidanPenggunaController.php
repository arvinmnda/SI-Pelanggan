<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\PegawaidanPengguna;
use Carbon\Carbon;

class PegawaidanPenggunaController extends Controller
{
    public function index(){

        $pegawaidanpengguna = PegawaidanPengguna::get();

        return view('pegawaidanpengguna.index',['pegawaidanpengguna'=>$pegawaidanpengguna]);
      }

      public function tambah()
	  {
		return view('pegawaidanpengguna.form');
	  }

	public function downloadpdf()
	{
		$pegawaidanpengguna = PegawaidanPengguna::all();
		view()->share('pegawaidanpengguna', $pegawaidanpengguna);
		$pdf = PDF::loadview('pegawaidanpengguna.cetak');
		return $pdf->download('laporan_pegawai.pdf');
	}
    
  public function simpan(Request $request)
	{
		$data = [
			'id_pegawai' => $request->id_pegawai,
			'nama_pengguna' => $request->nama_pengguna,
			'nama_pegawai' => $request->nama_pegawai,
			'jabatan_pegawai' => $request->jabatan_pegawai,
            'no_telepon_pegawai' => $request->no_telepon_pegawai,
			'email_pengguna' => $request->email_pengguna,
			'email_pegawai' => $request->email_pegawai,
		];

		PegawaidanPengguna::create($data);

		return redirect()->route('pegawaidanpengguna');
	}

	public function edit($id)
	{
		$pegawaidanpengguna = PegawaidanPengguna::find($id);
		return view('pegawaidanpengguna.form', ['pegawaidanpengguna' => $pegawaidanpengguna]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'id_pegawai' => $request->id_pegawai,
			'nama_pengguna' => $request->nama_pengguna,
			'nama_pegawai' => $request->nama_pegawai,
			'jabatan_pegawai' => $request->jabatan_pegawai,
            'no_telepon_pegawai' => $request->no_telepon_pegawai,
			'email_pengguna' => $request->email_pengguna,
			'email_pegawai' => $request->email_pegawai,
		];

		PegawaidanPengguna::find($id)->update($data);

		return redirect()->route('pegawaidanpengguna');
	}

	public function hapus($id)
	{
		PegawaidanPengguna::find($id)->delete();

		return redirect()->route('pegawaidanpengguna');
	}
}
