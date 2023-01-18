<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShortLinkController extends Controller
{
    public function home()
    {
        $shortLink = ShortLink::where('user_id', Auth::user()->id);

        return view('Homepage', ['shortLinks' => $shortLink]);
    }
    public function index()
    {
        return view('create_new');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|url',
        ]);

        $shortLink = ShortLink::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'short_url' => 'http://localhost:8000/go/' . $request->name,
            'url' => $request->url,
            'description' => $request->description,
        ]);

        return redirect('index')->with('success', 'Short link generated successfully');
    }

    public function go($destination)
    {
        $shortLink = ShortLink::where('name', $destination)->firstOrFail();

        $shortLink->increment('clicks');
        $shortLink->save();

        $url = $shortLink->url;

        return redirect($url);
    }
}
