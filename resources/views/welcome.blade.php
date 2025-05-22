@extends('Layouts.app')

@section('content')
<div class="text-center p-6">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">Halo Dunia!</h1>
    <p class="text-gray-800 mb-6">Laravel berhasil diinstal dan Tailwind CSS</p>
    <a href="/armada" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300">
        Tombol ke Halaman Admin
    </a>
</div>
@endsection

@section('footer')
<p class="text-gray-600">© 2023 Your Company. All rights reserved.</p>
@endsection