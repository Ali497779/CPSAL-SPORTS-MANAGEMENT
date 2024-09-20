<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('session_team_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_team_id')->constrained()->cascadeOnDelete();
            $table->foreignId('battle_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_win');
            $table->integer('score');
            $table->float('points');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('session_team_scores');
    }
};
