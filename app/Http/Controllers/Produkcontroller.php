<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelproduct;
use Faker\Factory as Faker;

class Produkcontroller extends Controller
{
    //
    public function index()
    {
        $modelproducts = modelproduct::latest()->paginate(5);

        return view('produk.index',compact('modelproducts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $faker = Faker::create('id_ID');
        $placeholderProdukId = $faker->regexify('[A-Z]{5}[0-4]{3}'); // dikirim randomID ke file create
        $placeholderSKUId = $faker->regexify('[A-Z]{5}[0-4]{3}'); // dikirim randomSKU ke file create
        
        return view('produk.create', compact('placeholderProdukId','placeholderSKUId'));
       
    }

    public function store(Request $request)
    {
        // var_dump($request);

        $request->validate([
            'Produk_id' => 'required',
            'Produk_name' => 'required',
            'categori_id' => 'required',
            'harga' => 'required',
            // 'description' => 'required',
            'SKU' => 'required',
            // 'brand' => 'required'
        ]);

        modelproduct::create($request->all());

        return redirect()->route('produk.index')
                        ->with('success','modelproduct created successfully.');
    }

    public function show(modelproduct $produk)
    {
        // var_dump($produk);
        return view('produk.show',compact('produk'));
    }

    public function edit(modelproduct $produk)
    {
        
        return view('produk.edit',compact('produk'));
    }

    public function update(Request $request, modelproduct $produk)
    {
        $request->validate([
            'Produk_id' => 'required',
            'Produk_name' => 'required',
            'categori_id' => 'required',
            'harga' => 'required',
            'description' => 'required',
            'SKU' => 'required',
            'brand' => 'required'
        ]);

        $produk->update($request->all());

        return redirect()->route('produk.index')
                         ->with('success', 'Product updated successfully.');
    }

    public function destroy(ModelProduct $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')
                        ->with('success', 'Product deleted successfully');
    }
}
