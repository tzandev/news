<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('news.all', compact('news'));
    }

    public function show($id)
    {
        $news = News::find($id);
        if (!$news) {
            return redirect('news');
        } else {
            return view('news.showone', compact('news'));
        }
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        if (!$request->input('body') || !$request->input('header')) {
            return redirect('news/create');
        }
        $news = new News();
        $news->header = $request->input('header');
        $news->body = $request->input('body');
        $news->save();
        return redirect('news');
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        if (!$news) {
            return redirect('news');
        }
        $news->header = $request->input('header');
        $news->body = $request->input('body');
        $news->save();
        return redirect('news');

    }

    public function destroy($id)
    {
        $news = News::find($id);
        if (!$news) {
            return redirect('news');
        }
        $news->delete();
        return redirect('news');
    }
}
