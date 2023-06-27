<?php

namespace App\Models;

use App\Enums\GameStatusEnum;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ["player_one", "player_two", "status", "key"];

    protected $cast = [
        "status" => GameStatusEnum::class,
    ];
}
