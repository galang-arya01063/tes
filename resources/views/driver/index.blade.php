@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Driver</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4">
        <a href="{{ route('driver.create') }}" class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-600 block text-center">
            Tambah Driver
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Alamat</th>
                    <th class="px-4 py-2 text-left">Nomor HP</th>
                    <th class="px-4 py-2 text-left">Usia</th>
                    <th class="px-4 py-2 text-left">NIK</th>
                    <th class="px-4 py-2 text-left">Status</th>
                    <th class="px-4 py-2 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($drivers as $driver)
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 py-2">{{ $driver->id }}</td>
                    <td class="px-4 py-2">{{ $driver->nama }}</td>
                    <td class="px-4 py-2">{{ $driver->alamat }}</td>
                    <td class="px-4 py-2">{{ $driver->no_hp }}</td>
                    <td class="px-4 py-2">{{ $driver->usia }}</td>
                    <td class="px-4 py-2">{{ $driver->nik }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-white {{ $driver->status == 'aktif' ? 'bg-green-500' : 'bg-yellow-500' }}">
                            {{ $driver->status }}
                        </span>
                    </td>
                    <td class="px-4 py-2 flex gap-2">
                        <a href="{{ route('driver.edit', $driver->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('driver.destroy', $driver->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus driver ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
