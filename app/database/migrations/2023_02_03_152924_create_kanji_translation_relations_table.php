<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanji_translation_relations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kanji_id');
            $table->unsignedBigInteger('translation_id');
            $table->timestamps();

            $table->foreign('kanji_id')->references('id')->on('kanjis');
            $table->foreign('translation_id')->references('id')->on('kanji_translations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kanji_translation_relations');
    }
};
