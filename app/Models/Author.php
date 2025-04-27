<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class);
    }

    protected $fillable = [
        'name',
        'image_url',
        'image_public_id'
        // otros campos...
    ];
}
