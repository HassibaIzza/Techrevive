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
        'id_owner'
    ];

    // Spécifiez la colonne utilisée pour la relation avec la marque
    public function marque()
    {
        return $this->belongsTo(Marque::class, 'marque', 'name');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
