<?php

namespace App\Models;

use App\Models\Cite;
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
}
