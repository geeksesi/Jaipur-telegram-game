<?php

namespace App\Models;

use DefStudio\Telegraph\Models\TelegraphBot as BaseModel;
class Bot extends BaseModel
{
    protected $table = "telegraph_bots";

    public function inviteUrl($key): string
    {
        return sprintf("https://t.me/%s?start=%s", $this->name, $key);
    }
}
