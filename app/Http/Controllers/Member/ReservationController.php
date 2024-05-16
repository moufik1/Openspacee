<?php

namespace App\Http\Controllers\Member;

use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    public function show()
    {
        $tables = Table::where('status', 'available')->get();
        return view('memberview.reservation.create',compact('tables'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'table_id' => 'required|exists:tables,id',
            'reservation_date' => 'required|date|after:today',
        ]);
        $table = Table::find($request->table_id);
        if ($table && $request->status == 'available') {
            $table->status = TableStatus::Available;
        } else {
            $table->status = TableStatus::Not_Available;
        }
        $table->save();

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['status'] = 'not available';

        Reservation::create($validatedData);

        return to_route('memberview.reservation.create')->with('success', 'Reservation created successfully.');
    }
}

