<?php

namespace App\Http\Controllers;


use App\Models\Driver;
use Illuminate\Http\Request;
use function view;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = \App\Models\Driver::all(); // Fetch semua data dari tabel driver
<<<<<<< HEAD

=======
>>>>>>> parent of 2de33c3 (second commit)
        return view('driver.index', compact('drivers'));
    }

    public function create()
    {
        return view('driver.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'usia' => 'required|integer|min:18',
            'nik' => 'required|string|max:20|unique:driver,nik',
            'status' => 'required|string|in:aktif,standby',
        ]);

        // Simpan data ke database
        Driver::create($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/driver')->with('success', 'Driver berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $driver = Driver::findOrFail($id); // Ambil data driver berdasarkan ID
        return view('driver.edit', compact('driver'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
            'usia' => 'required|integer|min:18',
            'nik' => 'required|string|max:20|unique:driver,nik,' . $id,
            'status' => 'required|string|in:aktif,standby',
        ]);

        // Update data di database
        $driver = Driver::findOrFail($id);
        $driver->update($validatedData);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('driver.index')->with('success', 'Driver berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $driver = Driver::findOrFail($id); // Cari data driver berdasarkan ID
        $driver->delete(); // Hapus data dari database

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/driver')->with('success', 'Driver berhasil dihapus!');
    }
}
