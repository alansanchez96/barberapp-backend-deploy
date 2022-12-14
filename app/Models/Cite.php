<?php

namespace App\Models;

use App\Models\Barber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cite extends Model
{
    use HasFactory;

    /**
     * Relacion Uno a Uno Inversa to Barber::class
     *
     * @return void
     */
    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }

    /**
     * Muchas Citas le pertenecen a Muchos Servicios
     * Relacion Muchos a Muchos to Service::class
     *
     * @return void
     */
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
