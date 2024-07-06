<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderModle;
use App\Models\modeltoko;
use App\Models\suppliersModel;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ordercontroller extends Controller
{
    //
    
    public function index()
    {
        $orderModless = orderModle::latest()->paginate(5);

        return view('order.index',compact('orderModless'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $faker = Faker::create('id_ID');
        $placeholderorderId = $faker->regexify('[A-Z]{5}[0-4]{3}'); // dikirim randomID ke file create
        $tokoids = modeltoko::pluck('toko_id')->toArray();
        $supplierid = suppliersModel::pluck('supplier_id');
        //  var_dump($supplierid);
        return view('order.create', compact('placeholderorderId','tokoids','supplierid'));
       
    }

    public function store(Request $request)
    {
        // var_dump($request);

        $request->validate([
            'order_id 	'=> 'required',
            'toko_id 	'=> 'required',
            'supplier_id'=> 'required',	
            'order_date',	 	
            'status 	',
            'jumlah 	',		
            'harga 	   ' ,
            'created_at' ,
            'updated_at' ,
        ]);

        // dd($request->all());
        $order = new orderModle();
        // $order->order_id = ModelOrder::generateId(); // Metode untuk menghasilkan ID order
        $order->order_id = $request->input('order_id');
        $order->toko_id = $request->input('toko_id');
        $order->supplier_id = $request->input('supplier_id');
        $order->order_date = Carbon::parse($request->input('order_date'))->format('Y-m-d');
        $order->order_date = $request->input('order_date');
        $order->jumlah = $request->input('jumlah');
        $order->harga = $request->input('harga');
        $order->status = $request->input('status');
        $order->save();

        // orderModle::create($request->all());

        return redirect()->route('order.index')
                        ->with('success','Order created successfully.');
    }

    public function show(orderModle $order)
    {
        // var_dump($order);
        return view('order.show',compact('order'));
    }

    public function edit(orderModle $order)
    {
        $tokoids = modeltoko::pluck('toko_id')->toArray();
        $supplierid = suppliersModel::pluck('supplier_id');
        return view('order.edit',compact('order','tokoids','supplierid'));
    }

    public function update(Request $request, orderModle $order)
    {
        $request->validate([
            'order_id' => 'required',
            'toko_id' => 'required',
            'supplier_id' => 'required',
            'order_date' => 'required',
            'status' => 'required',
            'jumlah' => 'required',
            'harga' => 'required'
        ]);

        $order->update($request->all());

        return redirect()->route('order.index')
                         ->with('success', 'Order updated successfully.');
    }

    public function destroy(orderModle $order)
    {
        $order->delete();

        return redirect()->route('order.index')
                        ->with('success', 'Order deleted successfully');
    }
}
