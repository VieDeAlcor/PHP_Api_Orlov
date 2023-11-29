<?php

namespace App\Http\Controllers;

use App\Models\JournalOrder;
use Illuminate\Http\Request;


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
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = New JournalOrder;
        
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->positions_id = $request->positions_id;
        $event->type_orders_id = $request->type_orders_id;
        $event->summary = $request->summary;
        $event->personnel_num = $request->personnel_num;
        $event->base = $request->base;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;
        
        $event->Save();

        return $event;
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
    public function update(Request $request)
    {
        $event = JournalOrder::find($request->id);
        
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->positions_id = $request->positions_id;
        $event->type_orders_id = $request->type_orders_id;
        $event->summary = $request->summary;
        $event->personnel_num = $request->personnel_num;
        $event->base = $request->base;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;
        
        $event->Save();

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        JournalOrder::destroy($id);

        return true;
    }
}
