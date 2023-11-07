<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::sortable()->paginate(10);
        if (Gate::allows('isAdmin', auth()->user())) {
            return view('admin.driver.index', [
                'drivers' => $drivers
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'regex:/^[\p{L}]+$/u', 'max:255'],
            'last_name' => ['required', 'string', 'regex:/^[\p{L}]+$/u', 'max:255'],
            'phone_number' => ['required', 'digits:10', 'regex:/^[0-9]*$/', 'unique:' . Driver::class],
        ]);

        $driver = new Driver();
        $driver->first_name = $request->get('first_name');
        $driver->last_name = $request->get('last_name');
        $driver->phone_number = $request->get('phone_number');
        $driver->save();

        return Redirect::route('driver.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return view('admin.driver.edit', [
            'driver' => $driver,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'regex:/^[\p{L}]+$/u', 'max:255'],
            'last_name' => ['required', 'string', 'regex:/^[\p{L}]+$/u', 'max:255'],
            'phone_number' => ['required', 'digits:10', 'regex:/^[0-9]*$/', 'unique:' . Driver::class],
        ]);

        $driver->first_name = $request->get('first_name');
        $driver->last_name = $request->get('last_name');
        $driver->phone_number = $request->get('phone_number');
        $driver->save();

        return Redirect::route('driver.edit', ['driver' => $driver])->with('status', 'driver-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
