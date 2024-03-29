<?php

namespace App\Http\Controllers;

use App\Purchase;
use App\Provider;

use Illuminate\Http\Request;

use App\Http\Requests\Purchase\StoreRequest;
use App\Http\Requests\Purchase\UpdateRequest;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::get();
        return view('admin.purchase.index', compact('purchases'));
    }

    public function create()
    {
        $providers = Provider::get();
        return view('admin.purchase.create', compact('providers'));
    }

    public function store (StoreRequest $request) /* Revisar este código */
    {
        $purchase = Purchase::create($request->all());
        
        foreach ($request->product_id as $key => $product) {
            $result[] = array(
                "product_id" => $request->product_id[$key],
                "quantity" => $request->quantity[$key],
                "price" => $request->price[$key]
            );
        }

        $purchase->shoppingDetails()->createMany($results);

        return redirect()->route('purchases.index'); 
    }

    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchase'));
    }

    public function edit(Purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin.purchase.show', compact('purchase')); /* Ojo que no se esta enviando el $provider (revisar) */
    }

    public function update (UpdateRequest $request, Purchase $purchase)
    {
        /* $purchase->update($request->all());
        return redirect()->route('purchases.index'); */
    }

    public function destroy(Purchase $purchase)
    {
        /* $purchase->delete();
        return redirect()->route('purchases.index'); */
    }
}
