<?php

namespace App\Telegram\Responses;

use App\Models\Bot;
use App\Models\Game;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;

class GameInvitationResponse extends BaseResponse
{
    public function __construct(protected Bot $bot, protected Game $game)
    {
    }

    public function message(): string
    {
        return sprintf("HI");
    }

    public function setupInlineKeyboard($request)
    {
        return $request->keyboard(
            Keyboard::make()->buttons([Button::make("Play game")->url($this->bot->inviteUrl($this->game->key))])
        );
    }

    public function setupReplyKeyboard($request)
    {
        return $request;
    }
}
