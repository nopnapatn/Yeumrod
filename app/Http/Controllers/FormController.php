<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Form;
use App\Models\Payment;
use App\Models\Report;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = Form::with('car', 'user')->orderBy('created_at', 'desc')->paginate(10);
        if (Gate::allows('isAdmin', auth()->user())) {
            return view('admin.form.index', [
                'forms' => $forms
            ]);
        } else {
            $user = User::findOrFail(auth()->id());
            // Sort forms by status in the desired order
            $forms = $user->user()->orderBy('status', 'asc')->get();

            $reports = Report::get();

            return view('user.form.index', [
                'forms' => $forms,
                'reports' => $reports,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Car $car)
    {
        $datetimes = $request->get('datetimes');
        list($check_in, $check_out) = explode(' - ', $datetimes);

        // Parse the date with the specified format
        $checkIn = Carbon::createFromFormat('m-d-Y', $check_in);
        $checkOut = Carbon::createFromFormat('m-d-Y', $check_out);

        // Calculate the difference in days
        $dateDifference = $checkIn->diffInDays($checkOut);
        if ($dateDifference == 0) {
            $dateDifference = 1;
        }

        $form = new Form();
        $form->user_id = auth()->id();
        $form->car_id = $car->id;
        $form->pick = $request->get('pick');
        $form->drop = $request->get('drop');
        $form->check_in = $check_in;
        $form->check_out = $check_out;
        $form->status = "PENDING";

        // Store the date difference
        $form->date_difference = $dateDifference;

        $form->save();

        return view('user.payment.create', [
            'car' => $car,
            'form' => $form,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
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
    public function update(Form $form)
    {
        if ($form->status == 'PENDING') {
            $form->status = 'PARTIALLY';
            $route = 'admin.form.pending';
        } else if ($form->status == 'PARTIALLY') {
            if (count($form->payment) === 1) {
                $forms = Form::where('status', 'PARTIALLY')->paginate(10);
                return Redirect::route('admin.form.partially', [
                    'forms' => $forms
                ]);
            }
            $form->status = 'ON TRIP';
            $route = 'admin.form.partially';
        } else if ($form->status = 'ON TRIP') {
            $form->status = 'END TRIP';
            $form->save();

            return Redirect::route('admin.report.create', ['form' => $form]);
        }
        $form->save();

        return Redirect::route($route);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pending()
    {
        $forms = Form::where('status', 'PENDING')->orderBy('check_in', 'asc')->paginate(10);
        return view('admin.form.pending', [
            'forms' => $forms,
        ]);
    }
    public function partially()
    {
        $forms = Form::where('status', 'PARTIALLY')->paginate(10);
        return view('admin.form.partially', [
            'forms' => $forms
        ]);
    }
    public function ontrip()
    {
        $forms = Form::where('status', 'ON TRIP')->paginate(10);
        return view('admin.form.ontrip', [
            'forms' => $forms
        ]);
    }
    public function endtrip()
    {
        $forms = Form::where('status', 'END TRIP')->paginate(10);
        return view('admin.form.endtrip', [
            'forms' => $forms
        ]);
    }
    public function cancel()
    {
        $forms = Form::where('status', 'CANCEL')->paginate(10);
        return view('admin.form.cancel', [
            'forms' => $forms
        ]);
    }

    public function cancelForm(Form $form)
    {
        $form->status = 'CANCEL';
        $form->save();
        if (Gate::allows('isAdmin', auth()->user())) {
            return Redirect::route('admin.form.cancel');
        } else {
            return Redirect::route('user.form.index');
        }
    }
}
