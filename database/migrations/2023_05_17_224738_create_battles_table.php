<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('battles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('session_id')->constrained()->cascadeOnDelete();
            $table->foreignId('by_team_id')->constrained('teams')->cascadeOnDelete();
            $table->foreignId('for_team_id')->nullable()->constrained('teams')->cascadeOnDelete();
            $table->date('battle_date');
            $table->time('battle_time');
            $table->text('destination');
            $table->integer('postponed')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('battles');
    }
};
