<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffingTable;

class StaffingTablesController extends Controller
{
    public function index()
    {
        $event = StaffingTable::all();
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
        $event = New Staffingtable;
        
        $event->period = $request->period;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;
        
        $event->Save();

        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(staffing_tables $staffing_tables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(staffing_tables $staffing_tables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Staffingtable::find($request->id);
        
        $event->name = $request->name;
        $event->period = $request->period;
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
        Staffingtable::destroy($id);

        return true;
    }
}
