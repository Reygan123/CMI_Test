<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('articles.admin.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048'
        ]);

        $slug = Str::slug($request->title);

        $article = new Article();
        $article->user_id = auth()->id();
        $article->title = $request->title;
        $article->slug = $slug;
        $article->content = $request->content;
        $article->meta_title = $request->meta_title ?: $request->title;
        $article->meta_description = $request->meta_description ?: substr($request->content, 0, 160);
        $article->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $article->image = $imagePath;
        }

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Article created successfully');
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('articles.admin.show', compact('article'));
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category'); 

        $articles = Article::query()
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%');
            })
            ->when($category, function ($query) use ($category) {
                $query->where('category_id', $category);
            })
            ->latest()
            ->paginate(10);

        $categories = Category::all();

        return view('articles.admin.index', compact('articles', 'search', 'categories', 'category'));
    }


    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        return view('articles.admin.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $article = Article::where('slug', $slug)->firstOrFail();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->meta_title = $request->meta_title;
        $article->meta_description = $request->meta_description;
        $article->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $article->image = $request->file('image')->store('articles', 'public');
        }

        $article->save();
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus.');
    }

    //User
    public function showUser($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('articles.user.show', compact('article'));
    }

    public function indexUser(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');

        $articles = Article::query()
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', "%{$search}%");
            })
            ->when($category, function ($query) use ($category) {
                $query->where('category_id', $category);
            })
            ->paginate(10);

        $categories = Category::all();

        return view('articles.user.index', [
            'articles' => $articles,
            'search' => $search,
            'categories' => $categories,
        ]);
    }
}
