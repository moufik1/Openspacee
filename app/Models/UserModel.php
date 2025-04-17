<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    
    protected $fillable = ['name','email','password','telephone'];
    protected $hidden = ['password', 'remember_token'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categorie_member');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function tables()
    {
        return $this->belongsToMany(Table::class, 'reservations');
    }
}
