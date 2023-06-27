<?php

namespace Database\Seeders;

use App\Enums\GameEntityTypeEnum;
use App\Models\GameEntity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            [
                "name" => "diamonds",
                "type" => GameEntityTypeEnum::WARE_CARD,
                "count" => 6,
                "point" => 0,
                "order" => -1,
            ],
            [
                "name" => "gold",
                "type" => GameEntityTypeEnum::WARE_CARD,
                "count" => 6,
                "point" => 0,
                "order" => -1,
            ],
            [
                "name" => "silver",
                "type" => GameEntityTypeEnum::WARE_CARD,
                "count" => 6,
                "point" => 0,
                "order" => -1,
            ],
            [
                "name" => "cloth",
                "type" => GameEntityTypeEnum::WARE_CARD,
                "count" => 8,
                "point" => 0,
                "order" => -1,
            ],
            [
                "name" => "spice",
                "type" => GameEntityTypeEnum::WARE_CARD,
                "count" => 8,
                "point" => 0,
                "order" => -1,
            ],
            [
                "name" => "leather",
                "type" => GameEntityTypeEnum::WARE_CARD,
                "count" => 10,
                "point" => 0,
                "order" => -1,
            ],
            [
                "name" => "camels",
                "type" => GameEntityTypeEnum::TRANSPORT_CARD,
                "count" => 11,
                "point" => 0,
                "order" => -1,
            ],
        ];

        foreach ($cards as $card) {
            GameEntity::create($card);
        }

        $tokens = [
            [
                "name" => "diamonds_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 7,
                "order" => 1,
            ],
            [
                "name" => "diamonds_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 7,
                "order" => 2,
            ],
            [
                "name" => "diamonds_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 3,
            ],
            [
                "name" => "diamonds_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 4,
            ],
            [
                "name" => "diamonds_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 5,
            ],
            //
            [
                "name" => "gold_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 6,
                "order" => 1,
            ],
            [
                "name" => "gold_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 6,
                "order" => 2,
            ],
            [
                "name" => "gold_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 3,
            ],
            [
                "name" => "gold_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 4,
            ],
            [
                "name" => "gold_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 5,
            ],
            //
            [
                "name" => "silver_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 1,
            ],
            [
                "name" => "silver_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 2,
            ],
            [
                "name" => "silver_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 3,
            ],
            [
                "name" => "silver_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 4,
            ],
            [
                "name" => "silver_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 5,
            ],
            //
            [
                "name" => "cloth_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 1,
            ],
            [
                "name" => "cloth_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 3,
                "order" => 2,
            ],
            [
                "name" => "cloth_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 3,
                "order" => 3,
            ],
            [
                "name" => "cloth_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 2,
                "order" => 4,
            ],
            [
                "name" => "cloth_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 2,
                "order" => 5,
            ],
            [
                "name" => "cloth_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 6,
            ],
            [
                "name" => "cloth_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 7,
            ],
            //
            [
                "name" => "spice_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 1,
            ],
            [
                "name" => "spice_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 3,
                "order" => 2,
            ],
            [
                "name" => "spice_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 3,
                "order" => 3,
            ],
            [
                "name" => "spice_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 2,
                "order" => 4,
            ],
            [
                "name" => "spice_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 2,
                "order" => 5,
            ],
            [
                "name" => "spice_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 6,
            ],
            [
                "name" => "spice_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 7,
            ],
            //
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 4,
                "order" => 1,
            ],
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 3,
                "order" => 2,
            ],
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 2,
                "order" => 3,
            ],
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 4,
            ],
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 5,
            ],
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 6,
            ],
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 7,
            ],
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 8,
            ],
            [
                "name" => "leather_token",
                "type" => GameEntityTypeEnum::WARE_TOKEN,
                "count" => 1,
                "point" => 1,
                "order" => 9,
            ],

            //

            [
                "name" => "camel_token",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 1,
                "point" => 5,
                "order" => 0,
            ],

            [
                "name" => "3",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 1,
                "order" => -1,
            ],
            [
                "name" => "3",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 2,
                "order" => -1,
            ],
            [
                "name" => "3",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 3,
                "order" => -1,
            ],

            [
                "name" => "4",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 4,
                "order" => -1,
            ],
            [
                "name" => "4",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 5,
                "order" => -1,
            ],
            [
                "name" => "4",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 6,
                "order" => -1,
            ],

            [
                "name" => "5",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 8,
                "order" => -1,
            ],
            [
                "name" => "5",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 9,
                "order" => -1,
            ],
            [
                "name" => "5",
                "type" => GameEntityTypeEnum::BONUS_TOKEN,
                "count" => 2,
                "point" => 10,
                "order" => -1,
            ],
        ];

        foreach ($tokens as $token) {
            GameEntity::create($token);
        }
    }
}
