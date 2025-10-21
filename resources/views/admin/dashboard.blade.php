@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="space-y-10">
        <!-- Judul -->
        <div>
            <h2 class="text-4xl font-bold mb-2">Selamat Datang, Admin 👋</h2>
            <p class="text-gray-300">Pantau statistik dan aktivitas iLuxury di sini.</p>
        </div>

        <!-- Statistik -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white bg-opacity-10 p-6 rounded-2xl shadow-xl hover:scale-105 transform transition">
                <h3 class="text-lg font-semibold mb-2">Total Produk</h3>
                <p class="text-3xl font-bold text-blue-400">128</p>
            </div>

            <div class="bg-white bg-opacity-10 p-6 rounded-2xl shadow-xl hover:scale-105 transform transition">
                <h3 class="text-lg font-semibold mb-2">Pengguna Terdaftar</h3>
                <p class="text-3xl font-bold text-green-400">542</p>
            </div>

            <div class="bg-white bg-opacity-10 p-6 rounded-2xl shadow-xl hover:scale-105 transform transition">
                <h3 class="text-lg font-semibold mb-2">Transaksi</h3>
                <p class="text-3xl font-bold text-purple-400">79</p>
            </div>
        </div>

        <!-- Banner / Hero Section -->
        <div class="flex flex-col lg:flex-row items-center bg-white bg-opacity-10 rounded-2xl shadow-xl overflow-hidden mt-10">
            <div class="flex-1 p-10">
                <h2 class="text-3xl font-bold mb-4">Kualitas Terjaga, Keanggunan Tak Pernah Pudar</h2>
                <p class="text-gray-300 mb-6">
                    Rasakan kemewahan iPhone dengan harga lebih bersahabat, tanpa mengurangi kualitas dan performa.
                </p>
                <a href="#" class="bg-gradient-to-r from-purple-500 to-blue-500 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:opacity-90 transition">
                    Lihat Koleksi
                </a>
            </div>
            <div class="flex-1">
                <img src="https://images.unsplash.com/photo-1603899122634-e9b17e60c3b1?auto=format&fit=crop&w=1000&q=80" alt="iPhone" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
@endsection
