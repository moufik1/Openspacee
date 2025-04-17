<?php

namespace App\Http\Controllers\Admin;

use App\Models\Table;
use App\Models\Member;
use App\Enums\TableStatus;
use App\Rules\DateBetween;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with('user', 'table')->get();
        return view('admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $tables = Table::where('status', TableStatus::Available)->get();
        //return view('admin.reservation.create')->with('success', 'Reservation created successfully.');
        return view('admin.reservation.create',compact('users','tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'table_id' => 'required',
            'reservation_date' =>'required|date|after:today',
            'status' => 'required'
            // Add validation rules for other fields
        ]);
        
        $reservation = Reservation::create($validatedData);
        $table = Table::find($request->input('table_id'));    
        $table->status = $request->input('status');
        $table->save();
        Session::flash('success', 'Reservation created successfully.');
    
            return to_route('admin.reservations.index')->with('success', 'Reservation created successfully.');

   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        {
            $users = User::all();
            $tables = Table::all();
            return view('admin.reservation.edit', compact('reservation', 'users', 'tables')); 
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $validatedData = $request->validate([
            'users_id' => 'required',
            'table_id' => 'required',
            'reservation_date' => 'required|date|after:today',
            'status' => 'required',
        ]);

        $reservation->update($validatedData);

        // Update table status based on reservation status
        $table = Table::find($reservation->table_id);
        if ($table && $request->status == 'available') {
            $table->status = TableStatus::Available;
        } else {
            $table->status = TableStatus::Not_Available;
        }
        $table->save();
        Session::flash('success','Reservation Edit successfully.');
        return to_route('admin.reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $table = Table::find($reservation->table_id);
        $reservation->delete();
        if ($table) {
            $table->status = TableStatus::Available;
            $table->save();
        }
        Session::flash('danger', 'Reservation Deleted successfully.');
        return to_route('admin.reservations.index');
    }
}
