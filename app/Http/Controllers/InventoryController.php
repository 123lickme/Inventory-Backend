<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $inventory = DB::table('inv_hdr')
        ->get();

        return response()->json($inventory, 200);
    }
}
