<?php

namespace App\Models;

use App\Models\Cite;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barber extends Model
{
    use HasFactory;

    /**
     * Relacion Uno a Uno to Cite::class
     *
     * @return void
     */
    public function cite()
    {
        return $this->hasOne(Cite::class);
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
