<?php

namespace App\Http\Controllers;

use App\children;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $children = children::all();
        return view('children.index', compact('children'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('children.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        children::create($request->all());
       return redirect('/children')->with('status','Data children berhasil di tambah!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\children  $children
     * @return \Illuminate\Http\Response
     */
    public function show(children $children)
    {
        return view('children.show', compact('children'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\children  $children
     * @return \Illuminate\Http\Response
     */
    public function edit(children $children)
    {
        return view('children.edit',compact('children'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\children  $children
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, children $children)
    {
        children::where('id', $children->id)
        ->update([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'Alamat' => $request->alamat,
            'buku' => $request->buku,
            'handphone' => $request->handphone,
            'email' => $request->email,
        ]);

        return redirect('/children')->with('status','Data children berhasil di ubah!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\children  $children
     * @return \Illuminate\Http\Response
     */
    public function destroy(children $children)
    {
        children::destroy($children->id);
        return redirect('/children')->with('status','Data children berhasil di hapus!!!');
    }
}
