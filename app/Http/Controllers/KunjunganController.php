<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Kunjungan;

class KunjunganController extends Controller
{
    public function index() {
        $kunjungan = Kunjungan::get();

        return view('kunjungan', compact('kunjungan'));
    }

    public function create(): View {
        return view('pengajuankunjungan');
    }

    public function store(Request $request) {

        $foto_ktp = $request->file('foto_ktp');
        $foto_ktp->storeAs('public/ktp', $foto_ktp->hashName());

        Kunjungan::create([
            'tipe_kunjungan' => $request->tipe_kunjungan,
            'nama_tahanan' => $request->nama_tahanan,
            'nama_pengunjung' => $request->nama_pengunjung,
            'alamat' => $request->alamat,
            'nik' => $request->nik,
            'foto_ktp' => $foto_ktp->hashName(),
            'nomor_hp' => $request->nomor_hp,
            'hubungan' => $request->hubungan,
            'hari' => $request->hari,
        ]);

        return redirect()->route('kunjungan.index')->with('success', 'Ajuan kunjungan berhasil diajukan!');
    }
}
