@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col justify-center items-center">
        <div class="w-full flex flex-col justify-center items-center bg-white">
            <div class="max-w-7xl flex flex-col justify-center items-center my-14 md:my-32">
                <div class="max-w-sm text-center">
                    <h1 class="text-xl md:text-2xl lg:text-2xl font-bold mb-4">Layanan <span class="text-red-500">Diabetes </span>di Klinik CMI</h1>
                    <p class="text-sm md:text-base text-gray-500">Menyediakan layanan lengkap untuk diagnosa, pengobatan, dan
                        manajemen diabetes dengan metode medis modern dan klasik.</p>
                </div>
                <a href="#services"
                    class="mt-6 inline-block px-6 py-3 bg-sky-500 text-white font-semibold rounded-md hover:bg-sky-700">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>

    <div id="services" class="w-full flex flex-col items-center bg-gradient-to-r from-gray-200 to-gray-50">
        <div class="max-w-7xl text-center my-14 md:my-32 flex flex-col justify-center items-center px-4 md:px-0">
            <div class="max-w-xl">
                <h1 class="text-xl md:text-2xl lg:text-2xl font-bold mb-4">Layanan <span
                        class="text-red-500">Diabetes</span></h1>
            </div>
            <div class="max-w-6xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">
                <div
                    class="flex flex-col justify-center items-center shadow-md py-10 px-6 cursor-pointer bg-white hover:bg-gray-300 transition duration-300 ease-in-out">
                    <div class="rounded-full w-20 md:w-28 p-4 shadow-md mb-2 md:mb-6">
                        <img src="{{ Storage::url('images/doctor.webp') }}" alt="">
                    </div>
                    <h1 class="text-base md:text-lg font-bold">Konsultasi Spesialis Diabetes</h1>
                </div>
                <div
                    class="flex flex-col justify-center items-center shadow-md py-10 px-6 cursor-pointer bg-white hover:bg-gray-300 transition duration-300 ease-in-out">
                    <div class="rounded-full w-20 md:w-28 p-4 shadow-md mb-2 md:mb-6">
                        <img src="{{ Storage::url('images/blood-test.webp') }}" alt="">
                    </div>
                    <h1 class="text-base md:text-lg font-bold">Tes Gula Darah Rutin</h1>
                </div>
                <div
                    class="flex flex-col justify-center items-center shadow-md py-10 px-6 cursor-pointer bg-white hover:bg-gray-300 transition duration-300 ease-in-out">
                    <div class="rounded-full w-20 md:w-28 p-4 shadow-md mb-2 md:mb-6">
                        <img src="{{ Storage::url('images/portion.webp') }}" alt="">
                    </div>
                    <h1 class="text-base md:text-lg font-bold">Program Diet Khusus</h1>
                </div>
                <div
                    class="flex flex-col justify-center items-center shadow-md py-10 px-6 cursor-pointer bg-white hover:bg-gray-300 transition duration-300 ease-in-out">
                    <div class="rounded-full w-20 md:w-28 p-4 shadow-md mb-2 md:mb-6">
                        <img src="{{ Storage::url('images/fitness.webp') }}" alt="">
                    </div>
                    <h1 class="text-base md:text-lg font-bold">Latihan Fisik & Konsultasi Olahraga</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center bg-white">
        <div class="max-w-7xl flex flex-col justify-center items-center px-6 md:px-0 my-14 md:my-32">
            <div class="max-w-sm text-center mb-10">
                <h1 class="text-xl md:text-2xl lg:text-2xl font-bold mb-4">Spesialis Dokter Kami</h1>
                <p class="text-sm md:text-base text-gray-500">Spesialis dokter diabetes kami di klinik utama CMI</p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="shadow-md bg-white rounded-lg overflow-hidden">
                    <img src="{{ Storage::url('images/dr_dendi.webp') }}" alt="Dr. Dendi Sandiono" class="">
                    <div class="text-center p-6">
                        <h1 class="font-bold text-lg">Dr. Dendi Sandiono</h1>
                        <p class="text-sm md:text-base text-gray-500 mb-4">Dokter spesialis diabetes</p>
                        <button class="text-sm px-6 py-3 rounded-md font-bold border border-sky-500 text-sky-500 bg-white hover:bg-sky-500 hover:text-white transition duration-300">
                            Buat Jadwal
                        </button>
                    </div>
                </div>
    
                <div class="shadow-md bg-white rounded-lg overflow-hidden">
                    <img src="{{ Storage::url('images/dr_setyagung.webp') }}" alt="Dr. Setyagung Budi Santosa" class="">
                    <div class="text-center p-6">
                        <h1 class="font-bold text-lg">Dr. Setyagung Budi Santosa</h1>
                        <p class="text-sm md:text-base text-gray-500 mb-4">Dokter spesialis diabetes</p>
                        <button class="text-sm px-6 py-3 rounded-md font-bold border border-sky-500 text-sky-500 bg-white hover:bg-sky-500 hover:text-white transition duration-300">
                            Buat Jadwal
                        </button>
                    </div>
                </div>
    
                <div class="shadow-md bg-white rounded-lg overflow-hidden">
                    <img src="{{ Storage::url('images/dr_diana.webp') }}" alt="Dr. Diana Rosa" class="w-full h-auto">
                    <div class="text-center p-6">
                        <h1 class="font-bold text-lg">Dr. Diana Rosa</h1>
                        <p class="text-sm md:text-base text-gray-500 mb-4">Dokter spesialis diabetes</p>
                        <button class="text-sm px-6 py-3 rounded-md font-bold border border-sky-500 text-sky-500 bg-white hover:bg-sky-500 hover:text-white transition duration-300">
                            Buat Jadwal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="diabetes-calculator" class="w-full flex flex-col justify-center items-center bg-gray-100 py-14 md:py-32">
        <div class="max-w-7xl flex flex-col justify-center items-center text-center">
            <h1 class="text-xl md:text-2xl lg:text-2xl font-bold mb-6">Kalkulator Risiko <span class="text-red-500">Diabetes</span></h1>
            <p class="text-sm md:text-base text-gray-500 mb-10">Cek risiko diabetes Anda dengan mengisi form di bawah ini</p>
            
            <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                <form action="{{ route('calculate-risk') }}" method="POST" class="space-y-4">
                    @csrf
                    
                    <div class="flex flex-col md:flex-row md:space-x-4">
                        <div class="flex-1">
                            <label for="age" class="block text-left font-medium">Usia</label>
                            <input type="number" id="age" name="age" placeholder="Masukkan usia" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-sky-500" required>
                        </div>
                        <div class="flex-1">
                            <label for="weight" class="block text-left font-medium">Berat Badan (kg)</label>
                            <input type="number" id="weight" name="weight" placeholder="Masukkan berat badan" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-sky-500" required>
                        </div>
                    </div>
    
                    <div class="flex flex-col md:flex-row md:space-x-4">
                        <div class="flex-1">
                            <label for="height" class="block text-left font-medium">Tinggi Badan (cm)</label>
                            <input type="number" id="height" name="height" placeholder="Masukkan tinggi badan" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-sky-500" required>
                        </div>
                        <div class="flex-1">
                            <label for="familyHistory" class="block text-left font-medium">Riwayat Keluarga Diabetes</label>
                            <select id="familyHistory" name="familyHistory" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-sky-500" required>
                                <option value="none">Tidak ada</option>
                                <option value="one">Ada 1 anggota keluarga</option>
                                <option value="more">Lebih dari 1 anggota keluarga</option>
                            </select>
                        </div>
                    </div>
    
                    <button type="submit" class="w-full bg-sky-500 text-white font-bold py-3 rounded-lg hover:bg-sky-700 transition duration-300">
                        Cek Risiko Anda
                    </button>
                </form>
            </div>
        </div>
    </div>  
    
    
    <div class="w-full flex flex-col items-center bg-white">
        <div class="max-w-7xl flex flex-col items-center my-14 md:my-32 px-4 md:px-0">
            <div class="max-w-xl text-center">
                <h1 class="text-xl md:text-2xl lg:text-2xl font-bold mb-4">Artikel <span
                        class="text-red-500">Diabetes</span></h1>
                <p class="text-sm md:text-base text-gray-500">Berikut beberapa artikel mengenai diabetes yang dapat anda baca</p>
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
