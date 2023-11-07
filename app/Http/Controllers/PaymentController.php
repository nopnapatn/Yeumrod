<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Form;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::sortable()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.payment.index', [
            'payments' => $payments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Form $form)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'regex:/^[\p{L}]+$/u', 'max:255'],
            'last_name' => ['required', 'string', 'regex:/^[\p{L}]+$/u', 'max:255'],
        ]);

        $request->validate([]);
        $path = time() . '.' . $request->image_path->extension();
        $request->image_path->storeAs('public', $path);

        $payment = new Payment();
        $payment->form_id = $form->id;
        $payment->price = $request->get('price');
        $payment->type = $request->get('type');
        $payment->first_name = $request->get('first_name');
        $payment->last_name = $request->get('last_name');
        $payment->date = $request->get('date');
        $payment->amount = $request->get('amount');
        $payment->image_path = $path;
        $payment->save();

        return Redirect::route('user.form.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
