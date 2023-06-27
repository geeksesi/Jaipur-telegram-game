<?php

namespace App\Telegram\Controllers\Commands;

use App\Enums\GameStatusEnum;
use App\Models\Bot;
use App\Models\Game;
use App\Telegram\Responses\GameInvitationResponse;
use DefStudio\Telegraph\DTO\Message;
use DefStudio\Telegraph\Models\TelegraphChat;

class NewGameCommand
{
    public function __construct(protected Bot $bot)
    {
    }

    public function __invoke(Message $message, TelegraphChat $chat)
    {
        # 1- make game
        $game = Game::create([
            "player_one" => $message->chat()->id(),
            "key" => uniqid($message->id()),
            "status" => GameStatusEnum::WAITING,
        ]);
        # 2- send message

        GameInvitationResponse::make($this->bot, [$game])->send($chat);
    }
}
