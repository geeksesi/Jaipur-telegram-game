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

    public function __invoke(Message $message, TelegraphChat $chat, ?int $gameId = null)
    {
        # on gameId
        # find game Id
        # attach to this user
        #
    }
}
