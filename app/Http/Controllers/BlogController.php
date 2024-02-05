<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function homepage()
    {
        $blogs = Blog::paginate('3');
        return view('homepage.index',compact('blogs'));
    }

    public function about()
    {
        return view('about.index');
    }

    public function team(){
        return view('team.index');
    }

    public function contact()
    {
        return view('contact.index');
    }

 

    public function membership(Request $request)
    {
        $validatedData = $request->validate([
            'full_name'=> 'required',
            'email'=> 'required',
            'region' => 'required'
        ]);

        $blog = Blog::create($request->all());
        return redirect()->back()->with('success', 'Thanks for join us');
    }
}
