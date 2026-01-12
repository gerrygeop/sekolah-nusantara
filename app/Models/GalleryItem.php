<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    /** @use HasFactory<\Database\Factories\GalleryItemFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
