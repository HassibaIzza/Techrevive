<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'name','gmail', // Ajoutez d'autres colonnes au besoin
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
