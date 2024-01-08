<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AppointmentController extends Controller
{
    public function index(): View
    {
        $appointment = Appointment::all();
        return view ('appointment.index')->with('appointment', $appointment);
    }
 
    public function create(): View
    {
        return view('appointment.create');
    }
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Appointment::create($input);
        return redirect('appointment')->with('flash_message', 'appointment Addedd!');
    }
    public function show(string $id): View
    {
        $appointment = Appointment::find($id);
        return view('appointment.show')->with('appointment', $appointment);
    }
    public function edit(string $id): View
    {
        $appointment = Appointment::find($id);
        return view('appointment.edit')->with('appointment', $appointment);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $appointment = Appointment::find($id);
        $input = $request->all();
        $appointment->update($input);
        return redirect('appointment')->with('flash_message', 'appointment Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Appointment::destroy($id);
        return redirect('appointment')->with('flash_message', 'appointment deleted!'); 
    }
}

