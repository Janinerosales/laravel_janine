<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Patient;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PatientController extends Controller
{
    public function index(): View
    {
        $patient = Patient::all();
        return view ('patient.index')->with('patient', $patient);
    }
 
    public function create(): View
    {
        return view('patient.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Patient::create($input);
        return redirect('patient')->with('flash_message', 'Patient Addedd!');
    }
    public function show(string $id): View
    {
        $patient = Patient::find($id);
        return view('patient.show')->with('patient', $patient);
    }
    public function edit(string $id): View
    {
        $patient = Patient::find($id);
        return view('patient.edit')->with('patient', $patient);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $patient = Patient::find($id);
        $input = $request->all();
        $patient->update($input);
        return redirect('patient')->with('flash_message', 'Patient Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Patient::destroy($id);
        return redirect('patient')->with('flash_message', 'Patient deleted!'); 
    }
}

