<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // protected $fillable = [
    //     'title',
    //     'excerpt',
    //     'body'
    // ];

    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['search'] ?? false, function ($query, $search) {
    //        return $query->where('title', 'like', '%' . $search . '%')
    //              ->orWhere('body', 'like', '%' . $search . '%');
    //     });

    //     $query->when($filters['category'] ?? false, function($query, $category){
    //         return $query->whereHas('category', function($query) use ($category){
    //             $query->where('slug', $category);
    //         });
    //     });

    //     $query->when($filters['author'] ?? false, function($query, $author){
    //         return $query->whereHas('author', function($query) use ($author){
    //             $query->where('username', $author);
    //         });
    //     });
    // }
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) use ($filters) {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });

            // tambahkan kondisi untuk mencari post di category ini yang sesuai dengan query search
            if ($filters['search'] ?? false) {
                $query->where(function ($query) use ($filters) {
                    $query->where('title', 'like', '%' . $filters['search'] . '%')
                        ->orWhere('body', 'like', '%' . $filters['search'] . '%');
                });
            }
        });

        $query->when($filters['author'] ?? false, function ($query, $author) use ($filters) {
            return $query->whereHas('author', function ($query) use ($author) {
                $query->where('username', $author);
            });
            if ($filters['search'] ?? false) {
                $query->where(function ($query) use ($filters) {
                    $query->where('title', 'like', '%' . $filters['search'] . '%')
                        ->orWhere('body', 'like', '%' . $filters['search'] . '%');
                });
            }
        });
    }





    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

   
}
