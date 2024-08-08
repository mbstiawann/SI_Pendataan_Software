<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Instalation extends Model
{
    use HasFactory;
    protected $table = 'instalations';
    protected $primary_key = 'id';

    protected $fillable = [
        'asisten_id',
        'software_id',
        'note',
        'solved',
        'date_instalation'
    ];

    public function asisten(): BelongsTo
    {
        return $this->belongsTo(Asisten::class);
    }

    public function software(): BelongsTo
    {
        return $this->belongsTo(Software::class);
    }
    
}
