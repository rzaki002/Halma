<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_produk;

class Kategori_produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
        $this->middleware(
            'permission:kategori_produk-list|kategori_produk-create|kategori_produk-edit|kategori_produk-delete',
            ['only' => ['index', 'show']]
        );
        $this->middleware('permission:kategori_produk-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:kategori_produk-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:kategori_produk-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $kategori_produks = Kategori_produk::latest()->paginate(5);
        return view('kategori_produks.index', compact('kategori_produks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori_produks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        Kategori_produk::create($request->all());
        return redirect()->route('kategori_produks.index')
            ->with('success', 'Kategori Produk created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori_produk $kategori_produk)
    {
        return view('kategori_produks.show', compact('kategori_produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori_produk $kategori_produk)
    {
        return view('kategori_produks.edit', compact('kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori_produk $kategori_produk)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        $kategori_produk->update($request->all());
        return redirect()->route('kategori_produks.index')
            ->with('success', 'Kategori Produk updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori_produk $kategori_produk)
    {
        $kategori_produk->delete();
        return redirect()->route('kategori_produks.index')
            ->with('success', 'Kategori Produk deleted susccesfully');
    }
}