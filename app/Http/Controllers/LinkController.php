<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        $user = auth()->user();

        if ($user != null) {
            $link = Link::create([
                'alias' => $request->input('alias'),
                'url' => $request->input('url'),
                'slug' => $slug,
                'num_clicks' => 1,
                'user_id' => auth()->user()->id,
            ]);

            $links = Link::where('user_id', $user->id)->get();

            return view('link.user', compact('links'))->with('link', $link);
        } else {
            $link = Link::create([
                'url' => $request->input('url'),
                'slug' => $slug,
                'num_clicks' => 1,
            ]);

            return view('index')->with('link', $link);
        }

    }

    public function redirect($slug)
    {
        $link = Link::where('slug', $slug)->firstOrFail();
        $link->num_clicks = $link->num_clicks + 1;
        $link->save();

        return view('redirect', ['url' => $link->url]);

    }

    public function linksUser()
    {
        $user = auth()->user();
        $links = Link::where('user_id', $user->id)->get();

        return view('link.user', compact('links'));
    }

    public function destroy($id)
    {
        $link = Link::findOrFail($id);

        if ($link->user_id !== Auth::id()) {
            return redirect()->back()->with('error', 'Você não tem permissão para excluir este link.');
        }

        $link->delete();

        return redirect()->back()->with('success', 'Link excluído com sucesso.');
    }

    public function showUpdateForm($id)
    {
        $link = Link::findOrFail($id);
        return view('link.update', compact('link'));
    }


    public function update($id, Request $request)
    {
        $link = Link::where('id', $id)->firstOrFail();
        $alias = $request->input('alias');
        // $password = $request->input('password');
        // $customSlug = $request->input('custom_slug');

        $link->alias = $alias;
        $link->save();

        $user = auth()->user();
        $links = Link::where('user_id', $user->id)->get();

        return view('link.user', compact('links'))->with('success', 'Link atualizado com sucesso.');
    }
}