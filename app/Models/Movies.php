<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movies extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'link',
        'star',
        'time',
    ];

    public function formattedtime() : ?String
    {
        $totalseconde = $this->time;

        $hours = floor($totalseconde / 3600);

        $minutes = floor(($totalseconde % 3600) / 60);

        // $seconde = $totalseconde % 60;

        return sprintf('%01d'.'hr : %02d'.'mins', $hours, $minutes);
    }
    public function MovieImage(): HasMany
    {
        return $this-> hasMany(MoviesImage::class);
    }

    /**
     * @param UploadedFile $files
     */
    public function attachfiles(?array $files)
    {
        $pictures = [];
        if($files !== null)
        {    foreach($files as $file)
            {
                if($file->getError())
                {
                    continue;
                }
                $filename = $file->store('Movies/'. $this->id, 'public');
                $pictures[] = [
                    'filename'=> $filename,
                ];
            }
        }
        if(count($pictures) > 0)
        {
            $this->MovieImage()->createMany($pictures);
        }
    }

    public function getPhoto(): ?MoviesImage
    {
        return $this->MovieImage[0] ?? null;
    }
}
