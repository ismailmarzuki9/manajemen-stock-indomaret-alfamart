<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelkategori;
use Faker\Factory as Faker;

class kategoricontroller extends Controller
{
    //
    public function index()
    {
        $modelkategoris = modelkategori::latest()->paginate(5);

        return view('kategori.index',compact('modelkategoris'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $faker = Faker::create('id_ID');
        $placeholderkategoriId = $faker->regexify('[KAT]{5}[4-9]{3}'); // dikirim randomID ke file create
        $placeholderSKUId = $faker->regexify('[A-Z]{5}[0-4]{3}'); // dikirim randomSKU ke file create
        
        return view('kategori.create', compact('placeholderkategoriId','placeholderSKUId'));
       
    }

    public function store(Request $request)
    {
        var_dump($request->categori_id);
        var_dump($request->categori_name);

        $request->validate([
            'categori_id' => 'required',
            'categori_name' => 'required',
            // 'description' => 'required',
        ]);

        $kategori = new ModelKategori();
        $kategori->categori_id = $request->input('categori_id'); // ID dihasilkan sebelumnya
        $kategori->categori_name = $request->input('categori_name');
        $kategori->description = $request->input('description');
        $kategori->save();

        // modelkategori::create($kategori->all());

        return redirect()->route('kategori.index')
                        ->with('success','modelkategori created successfully.');
    }

    public function show(modelkategori $kategori)
    {
        // var_dump($kategori);
        return view('kategori.show',compact('kategori'));
    }

    public function edit(modelkategori $kategori)
    {
        
        return view('kategori.edit',compact('kategori'));
    }

    public function update(Request $request, modelkategori $kategori)
    {
        $request->validate([
            'categori_id' => 'required',
            'categori_name' => 'required',
        ]);

        $kategori->update($request->all());

        return redirect()->route('kategori.index')
                         ->with('success', 'Product updated successfully.');
    }

    public function destroy(modelkategori $kategori)
    {
        $kategori->delete();

        return redirect()->route('kategori.index')
                        ->with('success', 'Product deleted successfully');
    }

}
