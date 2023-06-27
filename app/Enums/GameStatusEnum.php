<?php

namespace App\Enums;

enum GameStatusEnum: string
{
    case WAITING = "waiting";
    case PLAYING = "playing";
    case CLOSED = "closed";
}
