<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use PDF;
use Carbon\Carbon;
use DB;
class AdminController extends Controller
{
    public function index(){
        $admin = Pasien::all();
        return view('admin',compact('admin'));
    }

    public function save(Request $r){
        $pasien = new Pasien();
        $pasien->no_register = $r->no_register;
        $pasien->nama = $r->nama;
        $pasien->tanggal_lahir = $r->tanggal_lahir;
        $pasien->kepala_keluarga = $r->kepala_keluarga;
        $pasien->nik = $r->nik;
        $pasien->alamat = $r->alamat;
        $pasien->notelp = $r->notelp;
        $pasien->diagnosa = $r->diagnosa;
        $pasien->therapy = $r->therapy;

        $pasien->save();

        return redirect(url('/admin'))->with(['success' => 'Data Pasien Berhasil Ditambah']);
    }
    public function delete($id){
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect(url('/admin'))->with(['success' => 'Data Pasien Berhasil Dihapus']);
    }
    public function edit(Request $r, $id){
        $pasien = Pasien::find($id);
        $pasien->no_register = $r->no_register;
        $pasien->nama = $r->nama;
        $pasien->tanggal_lahir = $r->tanggal_lahir;
        $pasien->kepala_keluarga = $r->kepala_keluarga;
        $pasien->nik = $r->nik;
        $pasien->alamat = $r->alamat;
        $pasien->notelp = $r->notelp;
        $pasien->diagnosa = $r->diagnosa;
        $pasien->therapy = $r->therapy;

        $pasien->save();

        return redirect(url('/admin'))->with(['success' => 'Data Pasien Berhasil Diubah']);
    }
    public function cetakpdf(){
        $pasien = Pasien::all();
        $date = Carbon::now()->formatLocalized('%A, %d %B %Y');

        $pdf= PDF::loadview('pasien_pdf',compact('pasien','date'));
        return $pdf->download('laporan-pasien-pdf.pdf');
    }
    
    public function keluarga(){
        $data = Pasien::where('kepala_keluarga', 'LIKE', '%'.request('q').'%')->paginate(10);

        return response()->json($data);
    }
}
