<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $artikelen = post::latest()->paginate(5);
        return view ('admin.Artikelen.index', compact('artikelen'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.Artikelen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $data = $request->all();
        $data["author_id"] = Auth::id();
        post::create($data);

        return redirect()->route('admin.Artikelen.index')
            ->with('success','Artikel succesvol aangemaakt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikelen $artikel
     * @return \Illuminate\Http\Response
     */

    public function show(post $artikel)
    {
        return view('admin.Artikelen.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikelen  $artikel
     * @return \Illuminate\Http\Response
     */

    public function edit(post $artikel)
    {
        return view('admin.Artikelen.edit',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikelen  $artikel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Artikelen $artikel)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $artikel->update($request->all());

        return redirect()->route('admin.Artikelen.index')
            ->with('success','Artikel succesvol bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikelen  $artikel
     * @return \Illuminate\Http\Response
     */

    public function destroy(post $artikel)
    {
        $artikel->delete();

        return redirect()->route('admin.Artikelen.index')

            ->with('success','Artikel succesvol verwijderd');
    }
}
