<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("game_entities", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            /** @var App\Enums\GameEntityTypeEnum */
            $table->string("type");
            $table->integer("count")->unsigned();
            $table
                ->integer("point")
                ->unsigned()
                ->default(0);
            $table->integer("order"); // -1 random, 0 unordered, number order
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("game_entities");
    }
};
