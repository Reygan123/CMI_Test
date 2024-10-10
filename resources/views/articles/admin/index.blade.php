@extends('layouts.admin')

@section('content')
    <div class="py-4">
        <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded-lg">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-4xl font-bold text-gray-900">Artikel</h1>
                <a href="{{ route('articles.create') }}"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                    + Buat Artikel Baru
                </a>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <form action="{{ route('articles.index') }}" method="GET" class="flex">
                    <input type="text" name="search" value="{{ old('search', $search) }}" placeholder="Cari artikel..."
                        class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-1/2">
                    <button type="submit" class="ml-2 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                        Cari
                    </button>
                </form>

                <form action="{{ route('articles.index') }}" method="GET" class="w-1/5">
                    <select name="category" onchange="this.form.submit()" 
                            class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:ring-indigo-200">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                @foreach ($articles as $article)
                    <div class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transition-shadow duration-300">
                        @if ($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                                class="w-full h-32 object-cover rounded-md mb-4">
                        @else
                            <img src="{{ asset('images/default-thumbnail.jpg') }}" alt="Default Thumbnail"
                                class="w-full h-32 object-cover rounded-md mb-4">
                        @endif

                        <h2 class="text-xl font-semibold text-indigo-600">
                            <a href="{{ route('articles.show', $article->slug) }}"
                                class="hover:text-indigo-800 transition duration-300">
                                {{ $article->title }}
                            </a>
                        </h2>
                        <div class="text-sm text-gray-600">
                            <p><strong>{{ $article->user->name ?? 'Tidak Diketahui' }} </strong>, <span>{{ $article->created_at->translatedFormat('j F Y, H:i') }}</span></p>
                        </div>
                        <p class="text-gray-700 mt-2">
                            {{ Str::limit($article->meta_description ?? $article->content, 100) }}
                        </p>

                        <div class="mt-4 flex justify-between">
                            <a href="{{ route('articles.edit', $article->slug) }}" 
                               class="bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-700 transition duration-300">
                               Edit
                            </a>
                            
                            <form action="{{ route('articles.destroy', $article->slug) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                    class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition duration-300">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $articles->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
@endsection
