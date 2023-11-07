<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cars = Car::sortable()->paginate(10);

        if (Gate::allows('isAdmin', auth()->user())) {
            return view('admin.car.index', [
                'cars' => $cars
            ]);
        } else {
            $datetimes = $request->get('datetimes');
            list($check_in, $check_out) = explode(' - ', $datetimes);

            // Retrieve the cars that do not have rentals that overlap with the date conditions
            $cars = Car::whereDoesntHave('form', function ($query) use ($check_in, $check_out) {
                $query->where(function ($subquery) use ($check_in, $check_out) {
                    $subquery->where(function ($innerSubquery) use ($check_in, $check_out) {
                        $innerSubquery->where('check_in', '<=', $check_out)
                            ->where('check_out', '>=', $check_in);
                    });
                });
            })->get();

            return view('user.form.create', [
                'request' => $request,
                'cars' => $cars,
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drivers = Driver::whereDoesntHave('cars')->get();
        return view('admin.car.create', [
            'drivers' => $drivers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|regex:/^[\p{L}]+$/u|max:255',
            'seat' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'driver_id' => 'required|integer|exists:drivers,id',
        ]);

        $path = time() . '.' . $request->image_path->extension();
        $request->image_path->storeAs('public', $path);
        $validate['image_path'] = $path;

        $car = new Car();
        $car->driver_id = $request->get('driver_id');
        $car->name = $request->get('name');
        $car->brand = $request->get('brand');
        $car->seat = $request->get('seat');
        $car->price = $request->get('price');
        $car->image_path = $validate['image_path'];
        $car->save();

        return Redirect::route('car.index');
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
    public function edit(Car $car)
    {
        $drivers = Driver::get();
        return view('admin.car.edit', [
            'car' => $car,
            'drivers' => $drivers
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car, Driver $drivers)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|regex:/^[\p{L}]+$/u|max:255',
            'seat' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            $path = time() . '.' . $request->image_path->extension();
            $request->image_path->storeAs('public', $path);
            $validate['image_path'] = $path;
            $car->image_path = $validate['image_path'];
        }

        $car->driver_id = $request->driver_id;
        $car->name = $request->get('name');
        $car->brand = $request->get('brand');
        $car->seat = $request->get('seat');
        $car->price = $request->get('price');

        $car->save();

        return Redirect::route('car.edit', ['car' => $car, 'drivers' => $drivers])->with('status', 'car-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
