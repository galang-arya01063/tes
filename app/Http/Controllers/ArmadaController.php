<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    public function index()
    {
        $armadas = Armada::all(); // Fetch semua data dari tabel armada
        return view('armada.index', compact('armadas'));
}

    public function create()
    {
        $driver = \App\Models\Driver::all(); // Ambil semua data driver
        return view('armada.create', compact('driver'));
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'nopol' => 'required|string|max:15|unique:armada,nopol',
            'jenis_mobil' => 'required|string|max:50',
            'merek_mobil' => 'required|string|max:50',
            'tahun_pembelian' => 'required|date', // Validasi untuk tipe DATE
            'kapasitas' => 'nullable|integer|min:1',
            'driver_id' => 'nullable|exists:driver,id',
            'status_armada' => 'required|string|in:aktif,standby',
        ]);

        // Simpan data ke database
        Armada::create($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/armada')->with('success', 'Armada berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $armada = Armada::findOrFail($id); // Ambil data armada berdasarkan ID
        $drivers = \App\Models\Driver::all(); // Ambil semua data driver
        return view('armada.edit', compact('armada', 'drivers'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'nopol' => 'required|string|max:15|unique:armada,nopol,' . $id,
            'jenis_mobil' => 'required|string|max:50',
            'merek_mobil' => 'required|string|max:50',
            'tahun_pembelian' => 'required|date', // Validasi untuk tipe DATE
            'kapasitas' => 'nullable|integer|min:1',
            'driver_id' => 'nullable|exists:driver,id',
            'status_armada' => 'required|string|in:aktif,standby',
        ]);

        // Update data di database
        $armada = Armada::findOrFail($id);
        $armada->update($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/armada')->with('success', 'Armada berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $armada = Armada::findOrFail($id); // Cari data armada berdasarkan ID
        $armada->delete(); // Hapus data dari database

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/armada')->with('success', 'Armada berhasil dihapus!');
    }
}
