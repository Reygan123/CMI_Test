@extends('layouts.app')

@section('content')
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="font-bold text-2xl text-gray-900">Kalkulator Kesehatan</h2>

                <div class="mt-6">
                    <h3 class="font-semibold text-xl text-gray-800">Hitung BMI</h3>
                    <form action="{{ route('health.calculator.bmi') }}" method="POST" class="mt-4">
                        @csrf
                        <div>
                            <label class="block text-gray-700">Berat Badan (kg):</label>
                            <input type="number" name="weight" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <div class="mt-4">
                            <label class="block text-gray-700">Tinggi Badan (cm):</label>
                            <input type="number" name="height" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                        </div>
                        <button type="submit" class="mt-4 bg-sky-500 text-white py-2 px-4 rounded">Hitung BMI</button>
                    </form>

                    @if (session('bmi'))
                        <div class="mt-4 text-gray-600">
                            <p>Nilai BMI Anda: <strong>{{ session('bmi') }}</strong></p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
