<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function nfts()
    {
        return $this->hasMany(Nft::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function creators()
    {
        return $this->hasMany(User::class);
    }

    public function owners()
    {
        return $this->hasMany(User::class);
    }

    
}
