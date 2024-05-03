<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'mail',
        'marque',
        'catégorie',
        'panne',
        'problème',
        'nom',
        'sujet',
    ];
<<<<<<< HEAD
    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
=======

>>>>>>> f810932ac1716cac2fc71776c14db006754e38f6
    // Define any relationships or custom methods here if needed
}
