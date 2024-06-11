<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
    "title",
    "slug",
    "categoria",
    "content",
    "published_at"

    ];
    
    #para ignorar el valor  
    // protected $guarded = [
    //     "is_active",
    // ];
    
    
    #para saber que datos quiero que se inserte
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: fn($value) => strtolower($value),  // Guardar en minúscula
            get: fn($value) => ucfirst($value)      // Mostrar con la primera letra en mayúscula
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
