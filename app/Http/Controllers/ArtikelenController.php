<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data["cat_id"] = 1;
        post::create($data);

        return redirect()->route('Artikelen.index')
            ->with('success','Artikel succesvol aangemaakt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post $artikel
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $artikel = Post::find($id);
        return view('admin.Artikelen.show', [
            'artikel' => $artikel
        ]);
//        return view('admin.Artikelen.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post $artikel
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $artikel = Post::find($id); //gek genoeg MOET dit handmatig worden opgezocht
        return view('admin.Artikelen.edit',
            ['artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post $artikel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = Post::find($id);
        $input->title = $request->title; //ik weet niet waarom ik hier alles handmatig moet invoeren
        $input->description = $request->description;
        $input->body = $request->body;
        $input->update();
        //$artikel->update($input);
//      $artikel->update($request->all());

        return redirect()->route('Artikelen.index')
            ->with('success','Artikel succesvol bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post $artikel
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $artikel = Post::find($id);
        $artikel->delete();

        return redirect()->route('Artikelen.index')

            ->with('success','Artikel succesvol verwijderd');
    }
}
