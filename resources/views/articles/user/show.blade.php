@extends('layouts.app')

@section('title', $article->meta_title)
@section('meta_description', $article->meta_description)

@section('content')
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-6">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">{{ $article->title }}</h1>

        <div class="mt-4 text-sm text-gray-600">
            <p><strong>Penulis:</strong> {{ $article->user->name ?? 'Tidak Diketahui' }}</p>
            <p><strong>Diterbitkan:</strong> {{ $article->created_at->translatedFormat('j F Y, H:i') }}</p>
        </div>

        {{-- @if ($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                class="w-full h-auto rounded-lg mt-6 mb-4">
        @endif --}}

        <div class="text-gray-800 leading-relaxed mt-4">
            {!! $article->content !!}
        </div>

        <div class="mt-8">
            <a href="{{ route('articles.indexUser') }}"
                class="inline-block bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-700 transition duration-300">
                Kembali
            </a>
        </div>

        <div class="mt-6">
            <p>Bagikan artikel ini:</p>
            <div class="flex space-x-4 mt-4">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank"
                    class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Bagikan di Facebook
                </a>
        
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($article->title) }}" target="_blank"
                    class="inline-block bg-blue-400 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition duration-300">
                    Bagikan di Twitter
                </a>
        
                <a href="https://api.whatsapp.com/send?text={{ urlencode($article->title . ' ' . Request::fullUrl()) }}" target="_blank"
                    class="inline-block bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition duration-300">
                    Bagikan di WhatsApp
                </a>
            </div>
        </div>
    </div>
@endsection
