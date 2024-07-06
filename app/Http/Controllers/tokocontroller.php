<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modeltoko;
use Faker\Factory as Faker;
class tokocontroller extends Controller
{
    //
    public function index()
    {
        $modelproducts = modeltoko::latest()->paginate(5);

        return view('toko.index',compact('modelproducts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $faker = Faker::create('id_ID');
        $placeholderProdukId = $faker->regexify('TOKO[a-z]{5}[0-4]{3}'); // dikirim randomID ke file create
        
        return view('toko.create', compact('placeholderProdukId',));
       
    }

    public function store(Request $request)
    {
        // var_dump($request);

        $request->validate([
            'toko_id' => 'required',
            'toko_name' => 'required',
            'toko_type' => 'required',
            'location' => 'required',
        ]);

        modeltoko::create($request->all());

        return redirect()->route('toko.index')
                        ->with('success','toko created successfully.');
    }

    public function show(modeltoko $toko)
    {
        // var_dump($produk);
        return view('toko.show',compact('toko'));
    }

    public function edit(modeltoko $toko)
    {
        
        return view('toko.edit',compact('toko'));
    }

    public function update(Request $request, modeltoko $toko)
    {
        $request->validate([
            'toko_id' => 'required',
            'toko_name' => 'required',
            'toko_type' => 'required',
            'location' => 'required',
        ]);

        $toko->update($request->all());

        return redirect()->route('toko.index')
                         ->with('success', 'Toko updated successfully.');
    }

    public function destroy(modeltoko $toko)
    {
        $toko->delete();

        return redirect()->route('toko.index')
                        ->with('success', 'Toko deleted successfully');
    }

}
