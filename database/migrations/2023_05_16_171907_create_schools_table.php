<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coach_id')->constrained('users')->cascadeOnDelete();
            $table->String('name');
            $table->String('image')->nullable();
            $table->text('address');
            $table->bigInteger('phone');
            $table->bigInteger('fax');
            $table->string('principal_name');
            $table->bigInteger('principal_phone');
            $table->string('principal_email');
            $table->string('director_name');
            $table->bigInteger('director_phone');
            $table->string('director_email');
            $table->timestamps();
            $table->string('athletic_assitant_name');
            $table->string('athletic_assitant_position');
            $table->string('athletic_assitant_email');
            $table->bigInteger('athletic_assitant_cell');
            $table->string('athletic_assitant_homephone');
            $table->string('gymnasium_address');
            $table->string('school_have_gym');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('monday');
            $table->string('tuesday');
            $table->string('wednesday');
            $table->string('thursday');
            $table->string('friday');
            $table->string('saturday');




            


















        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
