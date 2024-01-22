<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $slug = base_convert(rand(10000, 99999), 10, 36);

        $link = Link::create([
            'url' => $request->input('url'),
            'slug' => $slug,
        ]);

        return redirect('/')->with('link', $link);
    }

    public function redirect($slug)
    {
        $link = Link::where('slug', $slug)->firstOrFail();
        return redirect($link->url);
    }

    public function linksUser()
    {
        $links = Link::latest()->get();
        return view('linksUser', compact('links'));
    }
}