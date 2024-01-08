<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Billing;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BillingController extends Controller
{
    public function index(): View
    {
        $billing = Billing::all();
        return view ('billing.index')->with('billing', $billing);
    }
 
    public function create(): View
    {
        return view('billing.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Billing::create($input);
        return redirect('billing')->with('flash_message', 'billing Addedd!');
    }
    public function show(string $id): View
    {
        $billing = Billing::find($id);
        return view('billing.show')->with('billing', $billing);
    }
    public function edit(string $id): View
    {
        $billing = Billing::find($id);
        return view('billing.edit')->with('billing', $billing);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $billing = Billing::find($id);
        $input = $request->all();
        $billing->update($input);
        return redirect('billing')->with('flash_message', 'billing Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Billing::destroy($id);
        return redirect('billing')->with('flash_message', 'billing deleted!'); 
    }
}


