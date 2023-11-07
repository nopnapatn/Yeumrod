<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Payment;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = Report::sortable()->paginate(10);
        return view('admin.report.index', [
            'reports' => $reports,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Form $form)
    {
        $report = new Report();
        $report->form_id = $form->id;
        $report->payment_id_one = $form->payment[0]->id;
        $report->payment_id_two = $form->payment[1]->id;
        $report->save();

        return Redirect::route('admin.form.endtrip');
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
        return view('user.report.show', [
            'form' => $form
        ]);
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
