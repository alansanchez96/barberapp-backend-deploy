<?php

namespace App\Http\Controllers\Api\Image;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function getImages()
    {
        return Image::all();
    }
}
