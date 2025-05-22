@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-4  first-letter">
    <h1 class="text-2xl font-bold mb-4">Daftar Order</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Nomor Order</th>
                    <th class="px-4 py-2 text-left">Pengirim</th>
                    <th class="px-4 py-2 text-left">Jenis Muatan</th>
                    <th class="px-4 py-2 text-left">Tanggal Muat</th>
                    <th class="px-4 py-2 text-left">Berat Muatan</th>
                    <th class="px-4 py-2 text-left">Lokasi Muat</th>
                    <th class="px-4 py-2 text-left">Tujuan</th>
                    <th class="px-4 py-2 text-left">Harga</th>
                    <th class="px-4 py-2 text-left">Status Pembayaran</th>
                    <th class="px-4 py-2 text-left">Status Order</th>
                    <th class="px-4 py-2 text-left">order On Duty</th>

                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-4 py-2">{{ $order->id }}</td>
                    <td class="px-4 py-2">{{ $order->nomor_order }}</td>
                    <td class="px-4 py-2">{{ $order->nama_pengirim }}</td>
                    <td class="px-4 py-2">{{ $order->jenis_muatan }}</td>
                    <td class="px-4 py-2">{{ $order->tanggal_muat }}</td>
                    <td class="px-4 py-2">{{ $order->berat_muatan }}</td>
                    <td class="px-4 py-2">{{ $order->lokasi_muat }}</td>
                    <td class="px-4 py-2">{{ $order->tujuan }}</td>
                    <td class="px-4 py-2">{{ $order->harga }}</td>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-white {{ $order->status_pembayaran == 'dibayar' ? 'bg-green-500' : 'bg-red-500' }}">
                            {{ $order->status_pembayaran }}
                        </span>
                    <td class="px-4 py-2">
                        <span class="px-2 py-1 rounded text-white {{ $order->status_order == 'selesai' ? 'bg-green-500' : 'bg-yellow-500' }}">
                            {{ $order->status_order }}
                        </span>
                    </td>
                    <td class="px-4 py-2">{{ $order->armada_on_duty }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
