<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeOrder;

class TypeOrdersController extends Controller
{
    public function index()
    {
        $event = TypeOrder::all();
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
        $event = New TypeOrder;
        
        $event->number = $request->number;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;
        
        $event->Save();

        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(type_orders $type_orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type_orders $type_orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = TypeOrder::find($request->id);
        
        $event->number = $request->number;
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
        TypeOrder::destroy($id);

        return true;
    }
}
