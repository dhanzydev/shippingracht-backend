<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('judul_artikel');
            $table->string('slug');
            $table->longText('konten');
            $table->string('foto_sampul');
            $table->enum('status', ['Terbit', 'Tidak Terbit'])->default('Terbit');
            $table->timestamps();
        });

        Schema::table('artikels', function($table) {
            $table->foreignId('kategori_id')
                ->constrained('kategori_artikel')
                ->restrictOnUpdate()
                ->cascadeOnDelete();
        });

        Schema::table('artikels', function($table) {
            $table->foreignId('user_id')
                ->constrained('users')
                ->restrictOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikels');
    }
}
