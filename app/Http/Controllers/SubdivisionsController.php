<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subdivision;

class SubdivisionsController extends Controller
{
    public function index()
    {
        $event = Subdivision::all();
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
        $event = New Subdivision;
        
        $event->name = $request->name;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;
        
        $event->Save();

        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(subdivisions $subdivisions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(subdivisions $subdivisions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = Subdivision::find($request->id);
        
        $event->name = $request->name;
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
        Subdivision::destroy($id);

        return true;
    }
}
