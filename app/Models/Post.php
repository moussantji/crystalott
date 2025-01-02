<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\NewBlogPostNotification;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
        'category_id',
    ];
    protected static function booted()
    {
        static::created(function ($post) {
            $subscribers = NewsletterSubscriber::all();

            foreach ($subscribers as $subscriber) {
                $subscriber->notify(new NewBlogPostNotification($post));
            }
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getSlug()
    {

        return Str::slug($this->title . '-');
    }
    public function getShortTitle()
    {
        $maxLength = 52;
        return strlen($this->title) > $maxLength
            ? substr($this->title, 0, $maxLength - 3) . '...'
            : $this->title;
    }
    public function getShortImageUrl()
    {
        $maxLength = 40;
        return strlen($this->getPhoto()->getImageUrl()) > $maxLength
            ? substr($this->getPhoto()->getImageUrl(), 0, $maxLength - 3) . '...'
            : $this->getPhoto()->getImageUrl();
    }
    // Définir un accessor pour le titre
    public function getShortenedTitleAttribute()
    {
        return $this->truncateText($this->title);
    }

    // Définir un accessor pour le contenu
    public function getShortenedContentAttribute()
    {
        return $this->truncateText($this->content);
    }

    // Méthode pour tronquer le texte
    public function truncateText($text, $maxLength = 30)
    {
        if (strlen($text) > $maxLength) {
            return substr($text, 0, $maxLength) . '...';
        }
        return $text;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function BlogImage(): HasMany
    {
        return $this->hasMany(BlogsImage::class);
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
                $filename = $file->store('Posts/'. $this->id, 'public');
                $pictures[] = [
                    'filename'=> $filename,
                ];
            }
        }
        if(count($pictures) > 0)
        {
            $this->BlogImage()->createMany($pictures);
        }
    }

    public function getPhoto(): ?BlogsImage
    {
        return $this->BlogImage[0] ?? null;
    }
}
