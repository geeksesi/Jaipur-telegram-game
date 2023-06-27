<?php

namespace App\Enums;

enum GameEntityTypeEnum: string
{
    case WARE_CARD = "ware_card";
    case TRANSPORT_CARD = "transport_card";
    case WARE_TOKEN = "ware_token";
    case BONUS_TOKEN = "bonus_token";
    case SUPERIOR_TOKEN = "superior_token";
}
