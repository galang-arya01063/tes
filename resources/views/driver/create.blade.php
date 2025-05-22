@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Driver</h1>

   @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('driver.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-bold mb-2">Nama</label>
            <input type="text" name="nama" id="nama" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="alamat" class="block text-gray-700 font-bold mb-2">Alamat</label>
            <textarea name="alamat" id="alamat" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required></textarea>
        </div>
        <div class="mb-4">
            <label for="no_hp" class="block text-gray-700 font-bold mb-2">Nomor HP</label>
            <input type="text" name="no_hp" id="no_hp" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="usia" class="block text-gray-700 font-bold mb-2">Usia</label>
            <input type="number" name="usia" id="usia" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="nik" class="block text-gray-700 font-bold mb-2">NIK</label>
            <input type="text" name="nik" id="nik" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <select name="status" id="status" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
                <option value="aktif">Aktif</option>
                <option value="standby">Standby</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan</button>
    </form>
</div>
@endsection