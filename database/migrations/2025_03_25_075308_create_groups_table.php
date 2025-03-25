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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('agency_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['girlgroup', 'boygroup', 'coedgroup', 'solist', 'band']);
            $table->integer('members')->default(0);
            $table->text('description');
            $table->string('photo')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
