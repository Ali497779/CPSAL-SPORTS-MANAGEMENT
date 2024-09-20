<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('session_teams', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('battle_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('session_id')->constrained()->cascadeOnDelete();
            $table->foreignId('team_id')->constrained()->cascadeOnDelete();
            // $table->boolean('loss')->nullable();
            // $table->boolean('win')->nullable();
            // $table->integer('score')->nullable();
            // $table->float('points')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('session_teams');
    }
};
