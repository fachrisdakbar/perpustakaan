<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['bukus'] = Buku::all();
        return view('bukus.index')->with($arr);

        // $bukus = \DB::table('table_buku')->simplePaginate(100)->onEachSide(5);
        // // mengirim data pegawai ke view index
        // return view('bukus.index',['bukus' => $bukus]);
        // $bukus = Buku::latest()->paginate(5);

        // return view('bukus.index', compact('bukus'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bukus.create');
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
            'judul' => 'required',
            'sinopsis' => 'required',
            'pengarang' => 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('bukus.index')
            ->with('success', 'Buku created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        return view('bukus.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        return view('bukus.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required',
            'sinopsis' => 'required',
            'pengarang' => 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('bukus.index')
            ->with('success', 'Buku created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('bukus.index')
            ->with('success', 'Buku deleted successfully');
    }
}
