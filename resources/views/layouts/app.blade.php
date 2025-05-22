<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<title>{{ $title ?? 'Belajar Laravel' }}</title> 
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@yield('head') 
</head> 
<body class="bg-gray-100 flex">

<!-- Sidebar -->
<div class="w-64 h-screen bg-gray-800 text-white flex flex-col">
    <div class="p-4 text-lg font-bold border-b border-gray-700">
        Navbar
    </div>

    <ul class="flex-1 p-4 space-y-2">
        <li><a href="/" class="block p-2 rounded hover:bg-gray-700">Dashboard</a></li>
        <li><a href="/armada" class="block p-2 rounded hover:bg-gray-700">Armada</a></li>
        <li><a href="/driver" class="block p-2 rounded hover:bg-gray-700">Driver</a></li>
        <li><a href="/order" class="block p-2 rounded hover:bg-gray-700">Order</a></li>
    </ul>
    <div class="p-4 border-t border-gray-700">
        <a href="/" class="block p-2 rounded hover:bg-gray-700">Logout</a>
    </div>
</div>

<!-- Main Content -->
<div class="flex-1 p-6">
    @yield('content') 
</div>

</body> 
</html>
