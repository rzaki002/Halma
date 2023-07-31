<?php

namespace App\Http\Controllers;

use App\Models\Kategori_produk;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
        $this->middleware('permission:produk-list|produk-create|produk-edit|produk-delete',
            ['only' => ['index', 'show']]
        );
        $this->middleware('permission:produk-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:produk-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:produk-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $produks = Produk::latest()->paginate(5);
        return view('produks.index', compact('produks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // $produk = Produk::all();
        // dd($produk->kategori);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'id_kategori' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'id_satuan' => 'required',
            'gambar' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $detinationPath = 'gambar/';
            $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path($detinationPath), $profileGambar);
            $input['gambar'] = "$profileGambar";
        }


        Produk::create($input);
        return redirect()->route('produks.index')
            ->with('success', 'Produk created susccesfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        $produks = Produk::all();
        $formattedAmount = number_format($produk->harga, 0, ',', '.');
        return view('produks.show', compact('produk', 'formattedAmount'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('produks.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required',
            'id_kategori' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'id_satuan' => 'required',
            'gambar' => 'required|file|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $input = $request->all();

        if ($gambar = $request->file('gambar')) {
            $detinationPath = 'gambar/';
            $profileGambar = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($detinationPath, $profileGambar);
            $input['gambar'] = "$profileGambar";
        } else {
            unset($input['gambar']);
        }

        $produk->update($input);

        return redirect()->route('produks.index')
            ->with('succes', 'Produk updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produks.index')
            ->with('success', 'Produk deleted susccesfully');
    }

    public function detail_produk(Produk $produk){
        $produks = Produk::where('id',$produk);
        if (!$produks){
            abort(404);
        }
        return view("home.index",compact('produks'));
    }
    public function keranjang(){
        $produkUser = Order::where('id_customer',Auth::user()->id)->get();
        return view('produks.keranjang',compact('produkUser'));
    }
}
