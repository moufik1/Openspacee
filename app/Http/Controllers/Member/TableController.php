<?php

namespace App\Http\Controllers\Member;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TableController extends Controller
{
    public function index()
    {
        $tables = Table::where('status', 'available')->get();
    return view('memberview.tables', compact('tables'));
    }
}
