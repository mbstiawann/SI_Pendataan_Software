<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Asisten extends Model
{
    use HasFactory;
    protected $table = 'asistens';
    protected $primary_key = 'id';
    protected $fillable = [
        'nim',
        'name',
        'sex',
        'address',
        'phone_number',
        'study_program',
        'image',
        'join_date',
        'user_id'
    ];

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class);
    }

    public function instalations(): HasMany
    {
        return $this->hasMany(Instalation::class, 'asisten_id');
    }
}
