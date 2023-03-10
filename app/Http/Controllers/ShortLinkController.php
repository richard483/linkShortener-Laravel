<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShortLinkController extends Controller
{
    public function home()
    {
        $shortLink = ShortLink::where('user_id', Auth::user()->id)->get();
        return view('Homepage', ['shortLinks' => $shortLink]);
    }

    public function index()
    {
        return view('create_new');
    }

    public function search(Request $request){
        $shortLinks = ShortLink::where('name', 'like', '%' . $request->search . '%')->get();
        return view('Homepage', compact('shortLinks'));
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

        return redirect('home')->with('success', 'Short link generated successfully');
    }

    public function go($destination)
    {
        $shortLink = ShortLink::where('name', $destination)->firstOrFail();

        $shortLink->increment('clicks');
        $shortLink->save();

        $url = $shortLink->url;

        return redirect($url);
    }

    public function AddNew()
    {
    }

    public function detail($id)
    {
        $shortLink = ShortLink::where('id', $id)->first();

        return view('Details', ['shortLink' => $shortLink]);
    }

    public function update(Request $req, $id)
    {
        $shortLink = ShortLink::where('id', $id)->first();

        $shortLink->url = $req->url;
        $shortLink->description = $req->description;

        $shortLink->save();

        return redirect()->back()->with('success', 'Short link updated successfully');
    }
}
