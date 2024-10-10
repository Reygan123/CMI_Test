@extends('layouts.admin')

@section('title', $article->meta_title)
@section('meta_description', $article->meta_description)

@section('content')
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-6">
        <!-- Judul Artikel -->
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $article->title }}</h1>

        <!-- Menampilkan Penulis Artikel -->
        <div class="mt-4 text-sm text-gray-600">
            <p><strong>Penulis:</strong> {{ $article->user->name ?? 'Tidak Diketahui' }}</p>
            <p><strong>Diterbitkan:</strong> {{ $article->created_at->translatedFormat('j F Y, H:i') }}</p>
        </div>

        <!-- Gambar Artikel (jika ada) -->
        {{-- @if ($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                class="w-full h-auto rounded-lg mt-6 mb-4">
        @endif --}}

        <!-- Konten Artikel -->
        <div class="text-gray-800 leading-relaxed mt-4">
            {!! $article->content !!}
        </div>

        <!-- Info Meta -->
        <div class="mt-6 text-sm text-gray-500 border-t pt-4">
            <p><strong>Meta Title:</strong> {{ $article->meta_title ?? 'N/A' }}</p>
            <p><strong>Meta Description:</strong> {{ $article->meta_description ?? 'N/A' }}</p>
        </div>

        <!-- Tautan Kembali ke Artikel -->
        <div class="mt-8">
            <a href="{{ route('articles.index') }}"
                class="inline-block bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-700 transition duration-300">
                Kembali
            </a>
        </div>
    </div>
@endsection
