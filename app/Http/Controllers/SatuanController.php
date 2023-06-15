<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
        $this->middleware('permission:satuan-list|satuan-create|satuan-edit|satuan-delete',
            ['only' => ['index', 'show']]
        );
        $this->middleware('permission: satuan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission: satuan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission: satuan-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $satuans = Satuan::latest()->paginate(5);
        return view('satuans.index', compact('satuans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('satuans.create');
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

        Satuan::create($request->all());
        return redirect()->route('satuans.index')
                        ->with('success','Satuan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Satuan $satuan)
    {
        return view('satuans.show', compact('satuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Satuan $satuan)
    {
        return view('satuans.edit', compact('satuan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Satuan $satuan)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        $satuan->update($request->all());
        return redirect()->route('satuans.index')
                        ->with('success','Satuan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Satuan $satuan)
    {
        $satuan->delete();
        return redirect()->route('satuans.index')
            ->with('success', 'Satuan deleted susccesfully');
    }
}
