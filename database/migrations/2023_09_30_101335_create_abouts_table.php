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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->text('content');

            $table->string('personImage');
            $table->string('personName');
            $table->string('personPosition');
            $table->text('personDescription');

            $table->text('textTitle1');
            $table->text('textTitle2');
            $table->text('textTitle3');
            $table->text('textDescription1');
            $table->text('textDescription2');
            $table->text('textDescription3');
            $table->text('textIcon1');
            $table->text('textIcon2');
            $table->text('textIcon3');

            $table->integer('status')->default('0');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
