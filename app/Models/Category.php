<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Collection;


class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'gaming',
        'collectibles',
        'metaverse',
        'utilitarian',

    ];

    public function nfts()
    {
        return $this->hasMany(Nft::class);
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
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
