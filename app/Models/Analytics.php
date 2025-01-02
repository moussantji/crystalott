<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Analytics extends Model
{
    use HasFactory;

    protected $fillable = ['page', 'page_views', 'clicks'];

    public static function trackPageView($page)
    {
        $analytics = self::firstOrCreate(['page' => $page]);
        $analytics->increment('page_views');
        $analytics->save();
    }

    public static function trackClick($page)
    {
        $analytics = self::firstOrCreate(['page' => $page]);
        $analytics->increment('clicks');
        $analytics->save();
    }
}
