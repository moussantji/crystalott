<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use League\Glide\Urls\UrlBuilderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogsImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'filename'
    ];

    protected static function booted():void
    {
        static::deleting(function (BlogsImage $picture) {
            Storage::disk('public')->delete($picture->filename);
        });
    }

    public function getImageUrl(?int $width =null, ?int $height=null): string
    {
        if( $width === null)
        {
            return Storage::disk('public')->url($this->filename);
        }
        $urlBuilder = UrlBuilderFactory::create('/images/',config('glide.key'));

        return $urlBuilder->getUrl($this->filename,['w' => $width, 'h' => $height, 'fit' => 'crop']);
    }
}
