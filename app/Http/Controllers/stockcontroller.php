<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelstock;
use App\Models\modeltoko;
use App\Models\modelproduct;
use Faker\Factory as Faker;
use Carbon\Carbon;

class stockcontroller extends Controller
{
    //
    public function index()
    {
        $modelstockss = modelstock::latest()->paginate(5);

        return view('stock.index',compact('modelstockss'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $faker = Faker::create('id_ID');
        $placeholderstockId = $faker->regexify('STC[0-9]{3}'); // dikirim randomID ke file create
        $tokoids = modeltoko::pluck('toko_id')->toArray();
        $produkids = modelproduct::pluck('produk_id');
        
        return view('stock.create', compact('placeholderstockId','tokoids','produkids'));
       
    }

    public function store(Request $request)
    {
        // var_dump($request);

        $request->validate([
            'stock_id' => 'required',
            'toko_id' => 'required',
            'produk_id' => 'required',
            'jumlah' => 'required',
            'Produk_name' => 'required',
        ]);

        // dd($request->all());
        $order = new modelstock();
        // $order->order_id = ModelOrder::generateId(); // Metode untuk menghasilkan ID order
        $order->stock_id = $request->input('stock_id');
        $order->toko_id = $request->input('toko_id');
        $order->produk_id = $request->input('produk_id');
        $order->jumlah = $request->input('jumlah');
        $order->produk_name = $request->input('Produk_name');
        $order->save();


        // modelstock::create($request->all());

        return redirect()->route('stock.index')
                        ->with('success','modelstock created successfully.');
    }

    public function show(modelstock $stock)
    {
        // var_dump($stock);
        return view('stock.show',compact('stock'));
    }

    public function edit(modelstock $stock)
    {
        
        return view('stock.edit',compact('stock'));
    }

    public function update(Request $request, modelstock $stock)
    {
        $request->validate([
            'stock_id' => 'required',
            'toko_id' => 'required',
            'produk_id' => 'required',
            'jumlah' => 'required',
            'Produk_name' => 'required',
        ]);

        $stock->update($request->all());

        return redirect()->route('stock.index')
                         ->with('success', 'Stock updated successfully.');
    }

    public function destroy(modelstock $stock)
    {
        $stock->delete();

        return redirect()->route('stock.index')
                        ->with('success', 'Product deleted successfully');
    }

}
