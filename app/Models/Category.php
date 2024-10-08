<?php

namespace App\Models;

use App\Models\Paket;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function paket()
    {
        return $this->hasMany(Paket::class);
    }

    public function theme()
    {
        return $this->hasMany(Theme::class);
    }
}
