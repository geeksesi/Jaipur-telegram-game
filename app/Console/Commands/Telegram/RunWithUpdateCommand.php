<?php

namespace App\Console\Commands\Telegram;

use App\Models\Bot;
use DefStudio\Telegraph\DTO\TelegramUpdate;
use DefStudio\Telegraph\Facades\Telegraph;
use Illuminate\Console\Command;

class RunWithUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "tg:run";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "run the telegram with update";

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $telegraphBot = Bot::first();
        $updates = $telegraphBot->updates();
        $lastUpdateId = 0;
        foreach ($updates as $update) {
            $lastUpdateId = $update->id();

            /** @var class-string $handler */
            $handler = config("telegraph.webhook_handler");

            $handler = app($handler);

            $handler->updateHandle($update, $telegraphBot);
        }

        if ($lastUpdateId) {
            $updates = Telegraph::bot($telegraphBot)
                ->botUpdates($lastUpdateId + 1)
                ->send();
        }
    }
}
