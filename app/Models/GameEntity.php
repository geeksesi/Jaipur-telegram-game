<?php

namespace App\Models;

use App\Enums\GameEntityTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameEntity extends Model
{
    use HasFactory;

    protected $fillable = ["name", "type", "count", "point", "order"];

    protected $casts = [
        "type" => GameEntityTypeEnum::class,
    ];
}
