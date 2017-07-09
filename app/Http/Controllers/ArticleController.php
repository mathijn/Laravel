<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use App\Tag;
use App\Http\Requests\ArticleRequest;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     *
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();

        return view('article.index', compact(['articlesarticles' => 'articles']));
    }


    /**
     *
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function store(ArticleRequest $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1,
        ]);
        $article->tags()->attach(request()->tags);

        return redirect('/');
    }


    /**
     *
     *
     * @param unknown $id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show($id)
    {
    	$article = Article::where('id', $id)->first();

    	$writer = $article->writers;

        return view('article.show', compact([
        		'article' 	=> 'article',
        		'writer'	=> 'writer'
        ]));
    }


    /**
     *
     * @param unknown $id
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function showArticlesFromWriter($id)
    {
    	$writer = User::where('id', $id)->first();
    	$articles = $writer->articles;

    	return view('article.article', compact([
    			'writer', 'writer',
    			'articles', 'articles'
    	]));
    }


    /**
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
    	$tags = Tag::pluck('name', 'id');
      	return view('article.create', compact(['tags']));
    }


    /**
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Article $article)
    {
        $tags = Tag::pluck('name', 'id');
        return view('article.edit', compact(['article', 'tags']));
    }


    /**
     * @param $id
     * @param Request $request
     * @return string
     */
    public function update($id, ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        $article->tags()->sync($request->input('tags'));
        return redirect('/');
    }


}
