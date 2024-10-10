@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-col justify-center items-center bg-gray-100 py-14 md:py-32">
        <div class="max-w-7xl text-center">
            <h1 class="text-xl md:text-2xl lg:text-2xl font-bold mb-6">Hasil Risiko <span class="text-red-500">Diabetes</span></h1>
            <p class="text-sm md:text-base text-gray-500 mb-10">Berdasarkan data yang Anda masukkan, risiko diabetes Anda adalah:</p>

            <div class="bg-white shadow-lg rounded-lg p-6 w-full">
                <h2 class="text-2xl font-bold text-red-500">{{ $riskLevel }}</h2>
            </div>

            <a href="{{ url()->previous() }}" class="mt-6 inline-block px-6 py-3 bg-sky-500 text-white font-semibold rounded-md hover:bg-sky-700">
                Kembali
            </a>
        </div>
    </div>
@endsection
