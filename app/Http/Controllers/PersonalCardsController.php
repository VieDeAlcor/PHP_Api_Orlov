<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalCard;

class PersonalCardsController extends Controller
{
    public function index()
    {
        $event = PersonalCard::all();
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
        $event = New PersonalCard;
        
        $event->fio = $request->fio;
        $event->date_birth = $request->date_birth;
        $event->place_birth = $request->place_birth;
        $event->citizenship = $request->citizenship;
        $event->education_id = $request->education_id;
        $event->position_id = $request->position_id;
        $event->subdivision_id = $request->subdivision_id;
        $event->updated_at = $request->updated_at;
        $event->created_at = $request->created_at;
        
        $event->Save();

        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(personal_cards $personal_cards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personal_cards $personal_cards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $event = PersonalCard::find($request->id);
        
        $event->fio = $request->fio;
        $event->date_birth = $request->date_birth;
        $event->place_birth = $request->place_birth;
        $event->citizenship = $request->citizenship;
        $event->education_id = $request->education_id;
        $event->position_id = $request->position_id;
        $event->subdivision_id = $request->subdivision_id;
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
        PersonalCard::destroy($id);

        return true;
    }
}
