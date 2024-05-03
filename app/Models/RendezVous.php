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
    public function marque()
    {
        return $this->belongsTo(Marque::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Define any relationships or custom methods here if needed
}
