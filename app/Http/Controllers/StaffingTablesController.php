<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffingTableController extends Controller
{
    public function index()
    {
        $event = StaffingTable::all();
        return $event;
    }

}
