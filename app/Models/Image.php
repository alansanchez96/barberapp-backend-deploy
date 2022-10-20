<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Relacion Uno a Uno o Más Polimorfica Inversa
     *
     * @return void
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
