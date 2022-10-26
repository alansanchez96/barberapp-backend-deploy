<?php

namespace App\Http\Controllers\Api\Cite;

use App\Http\Controllers\Controller;
use App\Models\Cite;
use Illuminate\Http\Request;

class CiteController extends Controller
{
    public function getCites()
    {
        return Cite::all();
    }
}
