<?php

namespace App\Models;

use App\Models\Cite;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    /**
     * Muchos Servicios le pertenecen a muchas Citas
     * Relacion Muchos a Muchos Cite::class
     *
     * @return void
     */
    public function cites()
    {
        return $this->belongsToMany(Cite::class);
    }

    /**
     * Relacion Uno a Uno Polimorfica to Image::class
     *
     * @return void
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
