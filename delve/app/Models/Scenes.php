<?php

namespace App\Models;

use App\Models\Timestamp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scenes extends Model
{
    use HasFactory;

    public function timestamp(): HasOne
    {
        return $this->hasOne(Timestamp::class);
    }
}
