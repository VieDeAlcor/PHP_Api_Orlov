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

}
