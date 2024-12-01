<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('index')->with(['articles'=>$articles]);
    }
    public function show(Article $article)
    {
        return view('articles.show')->with(['article' =>$article]);
    }

    public function create()
    {
        return view('articles.create');
    }
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');

    }
    public function store(PostRequest $request)
    {
       $article = new Article();
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->article = $request->article;
        $article->tag = $request->tag;
        $article->save();

        return redirect()->route('articles.index');
    }
    public function edit(Article $article)
    {
        return view('articles.edit')->with(['article' =>$article]);
    }
    public function update(PostRequest $request,Article $article)
    {
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->article = $request->article;
        $article->tag = $request->tag;
        $article->save();
        return redirect()->route('articles.show',$article);
    }
}