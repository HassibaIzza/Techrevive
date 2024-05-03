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
<<<<<<< HEAD
    public function rendezvous()
    {
        return $this->hasMany(RendezVous::class);
    }
=======
>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
}
