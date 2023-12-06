<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->date('date');
            $table->string('houres');
            $table->string('minute');
            $table->string('user_name', 128);
            $table->string('user_phone', 128);
            $table->string('user_img', 255);
            $table->string('work_type', 255);
            $table->text('description');
            $table->integer('user_id');
            $table->enum('admin_note', [1, 0]);
            $table->enum('user_note', [1, 0]);

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
