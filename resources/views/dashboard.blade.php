@extends('layouts.app')

@section('content')
    <main>
        <div class="w-full h-screen bg-cover bg-center flex flex-col justify-center items-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ Storage::url('images/a.webp') }}');">
            <div class="max-w-7xl text-white text-center px-4 md:px-0">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">Klinik Utama CMI</h1>
                <p class="mb-6 text-sm md:text-base lg:text-lg">Memberikan pelayanan kesehatan dengan menggabungkan dua
                    keilmuan
                    kedokteran, yaitu Ilmu Kedokteran Barat (Konvensional Modern) dengan Ilmu Kedokteran Klasik berdasarkan
                    buku
                    The Canon of Medicine (AL Qanun fii At-Tibb) karya dr. Ibnu Sina secara terintegrasi.
                </p>
                <div class="flex flex-col md:flex-row gap-4 justify-center">
                    <a href="http://wa.me/6282121590000"
                        class="py-3 px-6 bg-sky-700 rounded-md hover:bg-sky-800 text-sm md:text-base text-center">Konsultasi</a>
                    <a href="#layanan"
                        class="py-3 px-6 border-2 border-white rounded-md hover:bg-gray-500 text-sm md:text-base text-center">Layanan</a>
                </div>
            </div>
        </div>


        <div class="w-full flex flex-col justify-center items-center" id="layanan">
            <div class="max-w-7xl text-center my-14 md:my-32 flex flex-col justify-center items-center px-4 md:px-0">
                <div class="max-w-xl">
                    <h1 class="text-xl md:text-2xl lg:text-2xl font-bold mb-4">Layanan <span
                            class="text-red-500">Unggulan</span></h1>
                    <p class="text-sm md:text-base text-gray-500">Menangani penyakit kronis tanpa tindakan invasif (operasi
                        dan
                        kemoterapi) dan minim efek samping dengan menggabungkan pengobatan medis barat dan pengobatan klasik
                        timur secara terintegrasi</p>
                </div>
                <div class="max-w-6xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
                    <div
                        class="flex flex-col justify-center items-center shadow-md py-10 px-6 cursor-pointer hover:bg-gray-300 transition duration-300 ease-in-out">
                        <div class="rounded-full w-20 md:w-28 p-4 shadow-md mb-2">
                            <img src="{{ Storage::url('images/cancer.webp') }}" alt="">
                        </div>
                        <h1 class="text-base md:text-lg font-bold">Kanker</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center shadow-md py-10 px-6 cursor-pointer hover:bg-gray-300 transition duration-300 ease-in-out"
                        onclick="window.location.href='{{ route('layanan.diabetes') }}'">
                        <div class="rounded-full w-20 md:w-28 p-4 shadow-md mb-2">
                            <img src="{{ Storage::url('images/diabetes.webp') }}" alt="">
                        </div>
                        <h1 class="text-base md:text-lg font-bold">Diabetes</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center shadow-md py-10 px-6 cursor-pointer hover:bg-gray-300 transition duration-300 ease-in-out">
                        <div class="rounded-full w-20 md:w-28 p-4 shadow-md mb-2">
                            <img src="{{ Storage::url('images/heart.webp') }}" alt="">
                        </div>
                        <h1 class="text-base md:text-lg font-bold">Jantung</h1>
                    </div>
                    <div
                        class="flex flex-col justify-center items-center shadow-md py-10 px-6 cursor-pointer hover:bg-gray-300 transition duration-300 ease-in-out">
                        <div class="rounded-full w-20 md:w-28 p-4 shadow-md mb-2">
                            <img src="{{ Storage::url('images/kidneys.webp') }}" alt="">
                        </div>
                        <h1 class="text-base md:text-lg font-bold">Ginjal</h1>
                    </div>
                </div>
            </div>
        </div>


        <div class="w-full flex flex-col items-center bg-gradient-to-r from-gray-300 to-gray-100">
            <div class="max-w-7xl flex flex-col items-center my-14 md:my-32 px-4 md:px-0">
                <div class="max-w-xl text-center">
                    <h1 class="text-xl md:text-2xl lg:text-2xl font-bold mb-4">Artikel <span
                            class="text-red-500">Terbaru</span></h1>
                    <p class="text-sm md:text-base text-gray-500">Berikut beberapa artikel terbaru yang baru diupload dan
                        dapat
                        Anda baca</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 my-4 md:my-12">
                    @foreach ($latestArticles as $article)
                        <div class="bg-white shadow-md">
                            <div class="w-full">
                                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }} Thumbnail"
                                    class="w-full">
                            </div>
                            <div class="p-8 space-y-4">
                                <p class="text-sm text-gray-500">{{ $article->created_at->translatedFormat('j F Y') }}</p>
                                <h4 class="font-semibold text-md text-gray-700">
                                    <a href="{{ route('articles.showUser', $article->slug) }}"
                                        class="hover:underline">{{ $article->title }}</a>
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('articles.indexUser') }}"
                    class="text-blue-500 font-bold text-sm border-b-2 border-blue-500 pb-1">Lihat Semua →</a>
            </div>
        </div>
    </main>

    <footer class="w-full bg-sky-700 text-white py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-8">
                <div class="flex flex-col items-start w-1/4">
                    <img src="{{ Storage::url('images/logo1.png') }}" alt="Logo" class="w-32 mb-2">
                    <p class="text-sm text-gray-200">Menangani penyakit kronis tanpa tindakan invasif (operasi dan
                        kemoterapi) dan minim efek samping</p>
                </div>

                <div>
                    <h1 class="text-lg font-bold mb-4">CMI Hospital</h1>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:underline">Sejarah</a></li>
                        <li><a href="#" class="hover:underline">Visi & Misi</a></li>
                    </ul>
                </div>

                <div>
                    <h1 class="text-lg font-bold mb-4">Link Lainnya</h1>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:underline">Dokter</a></li>
                        <li><a href="#" class="hover:underline">CMI TV</a></li>
                    </ul>
                </div>

                <div>
                    <h1 class="text-lg font-bold mb-4">Kontak</h1>
                    <ul class="space-y-2 text-sm">
                        <li>Telepon: <a href="tel:+62222531000" class="hover:underline">(022) 253 1000</a></li>
                        <li>Whatsapp: <a href="https://wa.me/6282121590000" class="hover:underline">0821 2159 0000</a></li>
                        <li>Email: <a href="mailto:info@cmihospital.com" class="hover:underline">info@cmihospital.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-10 border-t border-gray-500 pt-4 text-center text-sm">
            <p>&copy; 2024 CMI Hospital. All rights reserved.</p>
        </div>
    </footer>
@endsection
