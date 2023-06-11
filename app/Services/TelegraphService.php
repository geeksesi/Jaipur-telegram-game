<?php

namespace App\Services;

use DefStudio\Telegraph\Telegraph;

class TelegraphService extends Telegraph
{
    public function botUpdates(?int $offset = 0): self
    {
        $telegraph = clone $this;

        $telegraph->endpoint = self::ENDPOINT_GET_BOT_UPDATES;

        if ($offset) {
            $telegraph->endpoint .= sprintf("?offset=%d", $offset);
        }

        return $telegraph;
    }
}
