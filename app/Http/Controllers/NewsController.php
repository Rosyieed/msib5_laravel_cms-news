<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userId = auth()->id();
        $berita = News::where('user_id', $userId)->paginate(3);
        return view('home', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    public function table()
    {
        $userId = auth()->id();
        $berita = News::where('user_id', $userId)->paginate(3);

        $title = 'Delete Book!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('news.table', ['berita' => $berita]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        News::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('news.create')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = News::find($id);
        return view('news.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = News::find($id);
        $berita->title = $request->title;
        $berita->description = $request->description;
        $berita->save();

        return redirect()->route('news.table')->with('success', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $berita = News::find($id);
        $berita->delete();

        return redirect()->route('news.table')->with('success', 'Berita berhasil dihapus');
    }
}
