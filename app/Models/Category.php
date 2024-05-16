<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','image','description','price'];

    // public function memberes()
    // {
    //     return $this->belongsToMany(Member::class, 'categorie_member');
    // }

    public function users()
    {
        return $this->belongsToMany(User::class, 'categorie_user');
    }
}
