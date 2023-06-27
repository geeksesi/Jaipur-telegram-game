<?php

namespace App\Telegram;

use App\Models\Bot;
use App\Telegram\Controllers\Commands\NewGameCommand;
use DefStudio\Telegraph\DTO\Message;
use DefStudio\Telegraph\DTO\TelegramUpdate;
use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;

class TelegramHandler extends WebhookHandler
{
    public function updateHandle(TelegramUpdate $update, Bot $bot)
    {
        $data = $update->toArray();
        if ($update->message() instanceof Message) {
            $data["message"]["message_id"] = $update->message()->id();
            $data["message"]["from"]["is_bot"] = $update
                ->message()
                ->from()
                ->isBot();
        }

        $request = new HttpRequest();
        $request->replace($data);

        $this->handle($request, $bot);
    }

    public function start()
    {
        info("ASD");
        // $this->chat->message("hi")->send();
        return (new NewGameCommand($this->bot))($this->message, $this->chat);
    }
}
