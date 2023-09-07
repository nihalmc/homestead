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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('txtDescription');
            $table->string('status');
            $table->string('map');
            $table->string('image');
            $table->string('location');
            $table->integer('order_number');
            $table->integer('category_id');
            $table->string('logo');
            $table->tinyInteger('chkHomepage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
