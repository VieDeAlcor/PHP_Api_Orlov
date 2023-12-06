<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeEducation;

class TypeEducationsController extends Controller
{
    public function index()
    {
        $event = TypeEducation::all();
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
        $event = New TypeEducation;
        
        $event->name = $request->name;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;
        
        $event->Save();

        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(type_educations $type_educations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type_educations $type_educations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = TypeEducation::find($request->id);
        
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
        TypeEducation::destroy($id);

        return true;
    }
}
