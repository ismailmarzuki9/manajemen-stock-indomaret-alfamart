<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suppliersModel;
use Faker\Factory as Faker;

class suppliersControl extends Controller
{
    //
    public function index()
    {
        $suppliersModelss = suppliersModel::latest()->paginate(5);

        return view('suppliers.index',compact('suppliersModelss'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $faker = Faker::create('id_ID');
        $placeholdersuppliersId = $faker->regexify('[SUP]{3}[0-4]{3}'); // dikirim randomID ke file create
        
        
        return view('suppliers.create', compact('placeholdersuppliersId'));
       
    }

    public function store(Request $request)
    {
        var_dump($request->contac_info);

        $request->validate([
            'supplier_id' => 'required',
            'supplier_name' => 'required',
            'contac_info' => 'required',
        ]);

        suppliersModel::create($request->all());

        return redirect()->route('suppliers.index')
                        ->with('success','suppliersModel created successfully.');
    }

    public function show(suppliersModel $supplier)
    {
        // var_dump($suppliers->supplier_id);
        return view('suppliers.show',compact('supplier'));
    }

    public function edit(suppliersModel $supplier)
    {
        
        return view('suppliers.edit',compact('supplier'));
    }

    public function update(Request $request, suppliersModel $supplier)
    {
        $request->validate([
            'supplier_id' => 'required',
            'supplier_name' => 'required',
            'contac_info' => 'required',
        ]);

        $supplier->update($request->all());

        return redirect()->route('suppliers.index')
                         ->with('success', 'Supplier updated successfully.');
    }

    public function destroy(suppliersModel $supplier)
    {
        $supplier->delete();

        return redirect()->route('suppliers.index')
                        ->with('success', 'Supplier deleted successfully');
    }

}
