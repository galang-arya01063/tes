@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-bold mb-4">Edit Armada</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('armada.update', $armada->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nopol" class="block text-gray-700 font-bold mb-2">Nomor Polisi</label>
            <input type="text" name="nopol" id="nopol" value="{{ $armada->nopol }}" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="jenis_mobil" class="block text-gray-700 font-bold mb-2">Jenis Mobil</label>
            <input type="text" name="jenis_mobil" id="jenis_mobil" value="{{ $armada->jenis_mobil }}" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="merek_mobil" class="block text-gray-700 font-bold mb-2">Merek Mobil</label>
            <input type="text" name="merek_mobil" id="merek_mobil" value="{{ $armada->merek_mobil }}" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="tahun_pembelian" class="block text-gray-700 font-bold mb-2">Tahun Pembelian</label>
            <input type="date" name="tahun_pembelian" id="tahun_pembelian" value="{{ $armada->tahun_pembelian }}" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="kapasitas" class="block text-gray-700 font-bold mb-2">Kapasitas</label>
            <input type="number" name="kapasitas" id="kapasitas" value="{{ $armada->kapasitas }}" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="driver_id" class="block text-gray-700 font-bold mb-2">Nama Driver</label>
            <select name="driver_id" id="driver_id" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
                <option value="">Pilih Driver</option>
                @foreach ($drivers as $driver)
                    <option value="{{ $driver->id }}" {{ $armada->driver_id == $driver->id ? 'selected' : '' }}>
                        {{ $driver->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="status_armada" class="block text-gray-700 font-bold mb-2">Status Armada</label>
            <select name="status_armada" id="status_armada" class="w-full border-2 border-gray-800 rounded-lg px-3 py-2">
                <option value="aktif" {{ $armada->status_armada == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="standby" {{ $armada->status_armada == 'standby' ? 'selected' : '' }}>Standby</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Simpan Perubahan</button>
    </form>
</div>
@endsection