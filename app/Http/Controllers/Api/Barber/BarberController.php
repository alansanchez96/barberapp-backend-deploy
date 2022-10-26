<?php

namespace App\Http\Controllers\Api\Barber;

use App\Models\Barber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarberController extends Controller
{
    public function getBarbers()
    {
        return Barber::all();
    }
}
