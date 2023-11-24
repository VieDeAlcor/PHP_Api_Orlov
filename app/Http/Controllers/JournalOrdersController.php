<?php

namespace App\Http\Controllers;

use App\Models\journal_orders;
use Illuminate\Http\Request;
use App\Models\JournalOrder;

class JournalOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = JournalOrder::all();
        return $event;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(journal_orders $journal_orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(journal_orders $journal_orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, journal_orders $journal_orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(journal_orders $journal_orders)
    {
        //
    }
}
