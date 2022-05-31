<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('scrapers', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('ip')->nullable();
            $table->text('markdown')->nullable();
            $table->text('html')->nullable();
            $table->boolean('is_valid')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('scrapers');
    }
};
