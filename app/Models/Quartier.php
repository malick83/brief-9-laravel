<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'commune_id'];

    public function entreprises(): HasMany {
        return $this->hasMay(Entreprise::class);
    }
    /**
     * Get the user that owns the Quartier
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
