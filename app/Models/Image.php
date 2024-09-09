<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function showImages()
    {
        $images = Image::all();
        return view('select-image', compact('images'));
    }

}
