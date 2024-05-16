<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','table_id','reservation_date','status'];

    protected $dates =
    [
        'reservation_date'
    ];

    // public function member()
    // {
    //     return $this->belongsTo(Member::class);
    // }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
