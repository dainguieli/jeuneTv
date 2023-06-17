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
        Schema::disableForeignKeyConstraints();
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('animateur');
            $table->string('nom_Vidéo');
            $table->string('heure_diffusion');
            $table->date('jour_diffusion');
            $table->string('lien_video');
            $table->text('description');
            $table->string('video_categorie');
            $table->string('image');
            $table->integer('status')->default(1);

            $table->timestamps();
        });

        /* Schema::table('videos', function($table) {

            $table->foreign('categorie_id')
                  ->references('categorie_id')->on('Categorie')
                  ->onDelete('restrict')->onUpdate('restrict');




        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
