<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function news()
    {
        $latest = News::limit(1)->orderByDesc('id')->first();
        $news = News::where('id', '!=', $latest->id)->get();
        return view('news.index',compact('news','latest'));
    }

    public function processing_news(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required',
            'news_title' => 'required',
            'location' => 'required',
            'source' => 'required',
            'new_desc' => 'required'
        ]);
        $news = News::create($request->all());
        return redirect()->back()->with('success', 'Thanks for Add news');
    }
}
