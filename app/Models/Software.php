<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Software extends Model
{
    use HasFactory;
    protected $table = 'softwares';
    protected $primary_key = 'id';

    protected $fillable= [
        'name_software',
        'category_software',
        'licence'
    ];

    public function instalations(): HasMany
    {
        return $this->hasMany(Instalation::class, 'software_id');
    }
}
