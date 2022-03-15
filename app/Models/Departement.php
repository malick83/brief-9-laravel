<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'region_id'];

    /**
     * Get all of the comments for the Departement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function communes(): HasMany
    {
        return $this->hasMany(Commune::class);
    }
    /**
     * Get the user that owns the Departement
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
