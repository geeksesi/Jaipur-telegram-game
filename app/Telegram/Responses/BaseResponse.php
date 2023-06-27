<?php

namespace App\Telegram\Responses;

use App\Models\Bot;
use App\Models\Chat;

abstract class BaseResponse
{
    abstract public function message(): string;

    public static function make(Bot $bot, array $arguments): self
    {
        info($bot);
        return new static($bot, ...$arguments);
    }

    public function send(Chat $chat)
    {
        $message = $this->message();

        $request = $chat->message($message);
        $request = $this->setupInlineKeyboard($request);
        $request = $this->setupReplyKeyboard($request);

        return $request->send();
    }

    public function setupInlineKeyboard($request)
    {
        return $request;
    }

    public function setupReplyKeyboard($request)
    {
        return $request;
    }
}
