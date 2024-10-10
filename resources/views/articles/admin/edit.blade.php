@extends('layouts.admin')

@section('content')
    <div class="py-4">
        <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">

            <h1 class="text-2xl font-semibold mb-4">Edit Artikel</h1>

            <form action="{{ route('articles.update', $article->slug) }}" method="POST" enctype="multipart/form-data"
                class="space-y-6">
                @csrf
                @method('PUT')

                <div class="w-full">
                    <label for="title" class="block text-sm font-semibold text-gray-600">Judul Artikel</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $article->title) }}"
                        class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500 p-3"
                        required>
                </div>

                <div class="mb-4">
                    <label for="category_id" class="block text-gray-700">Kategori</label>
                    <select name="category_id" id="category_id" class="block w-full mt-1">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full">
                    <label for="content" class="block text-sm font-semibold text-gray-600">Konten Artikel</label>
                    <textarea id="content-editor" name="content"
                        class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500 p-3"
                        rows="8" required>{{ old('content', $article->content) }}</textarea>
                </div>

                <div class="w-full">
                    <label for="meta_title" class="block text-sm font-semibold text-gray-600">Meta Title (Opsional)</label>
                    <p class="text-gray-500 text-xs mb-2">Meta title digunakan oleh mesin pencari sebagai judul halaman dan
                        akan ditampilkan di hasil pencarian. Pastikan untuk menggunakan kata kunci yang relevan dan
                        deskriptif.</p>
                    <input type="text" name="meta_title" id="meta_title"
                        value="{{ old('meta_title', $article->meta_title) }}"
                        class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500 p-3">
                </div>

                <div class="w-full">
                    <label for="meta_description" class="block text-sm font-semibold text-gray-600">Meta Description
                        (Opsional)</label>
                    <p class="text-gray-500 text-xs mb-2">Meta description memberikan ringkasan singkat tentang artikel
                        Anda. Ini juga ditampilkan di hasil pencarian, jadi buatlah menarik agar meningkatkan klik.</p>
                    <textarea name="meta_description" id="meta_description"
                        class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500 p-3"
                        rows="2">{{ old('meta_description', $article->meta_description) }}</textarea>
                </div>

                <div class="w-full">
                    <label for="image" class="block text-sm font-semibold text-gray-600">Upload Gambar (Opsional)</label>
                    <input type="file" name="image" id="image"
                        class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm focus:ring-sky-500 focus:border-sky-500 p-3">
                </div>

                <div class="w-full text-center">
                    <button type="submit"
                        class="w-full bg-sky-500 h-fit space-y-4 text-white font-semibold py-3 rounded-lg hover:bg-sky-700 transition duration-300">Perbarui
                        Artikel</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('content-editor', {
            removePlugins: 'about',
            on: {
                instanceReady: function(ev) {
                    this.statusBarElement.hide();
                }
            }
        });
    </script>
@endsection
