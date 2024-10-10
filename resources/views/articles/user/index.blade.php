@extends('layouts.app')

@section('content')
    <div class="py-4">
        <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded-lg">

            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <form action="{{ route('articles.indexUser') }}" method="GET" class="w-full md:w-2/3 flex mb-4 md:mb-0">
                    <input type="text" name="search" value="{{ old('search', $search) }}" 
                           placeholder="Cari artikel..." 
                           class="border border-gray-300 rounded-lg px-4 py-2 w-full focus:outline-none focus:ring focus:ring-indigo-200">
                    <button type="submit" 
                            class="ml-2 bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition duration-300">
                        Cari
                    </button>
                </form>

                <form action="{{ route('articles.indexUser') }}" method="GET" class="w-1/5">
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

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($articles as $article)
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        @if ($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" 
                                 alt="{{ $article->title }}" 
                                 class="w-full h-40 object-cover rounded-md mb-4">
                        @else
                            <img src="{{ asset('images/default-thumbnail.jpg') }}" 
                                 alt="Default Thumbnail" 
                                 class="w-full h-40 object-cover rounded-md mb-4">
                        @endif

                        <h2 class="text-xl font-semibold text-indigo-600 mb-2">
                            <a href="{{ route('articles.showUser', $article->slug) }}" 
                               class="hover:text-indigo-800 transition duration-300">
                                {{ $article->title }}
                            </a>
                        </h2>

                        <div class="text-sm text-gray-500 mb-2">
                            <p><strong>{{ $article->user->name ?? 'Tidak Diketahui' }} </strong>, 
                               <span>{{ $article->created_at->translatedFormat('j F Y, H:i') }}</span></p>
                        </div>

                        <p class="text-gray-700">
                            {{ Str::limit($article->meta_description ?? $article->content, 100) }}
                        </p>
                    </div>
                @empty
                    <p class="text-gray-500 text-center col-span-full">Tidak ada artikel ditemukan.</p>
                @endforelse
            </div>

            <div class="mt-6">
                {{ $articles->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
@endsection
