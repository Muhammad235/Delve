<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quest extends Model
{
    use HasFactory;


    // public function timestamp()
    // {
    //     return has
    // }

    public function timestamp(): HasOne
    {
        return $this->hasOne(Timestamp::class);
    }

    public function scene(): HasOne
    {
        return $this->hasOne(Scenes::class);
    }
}
