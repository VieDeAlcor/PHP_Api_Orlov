<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkBook;

class WorkBooksController extends Controller
{
    public function index()
    {
        $event = WorkBook::all();
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
        $event = New WorkBook;
        
        $event->info_company = $request->info_company;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;
        
        $event->Save();

        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(work_books $work_books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(work_books $work_books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = WorkBook::find($request->id);
        
        $event->info_company = $request->info_company;
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
        WorkBook::destroy($id);

        return true;
    }
}
