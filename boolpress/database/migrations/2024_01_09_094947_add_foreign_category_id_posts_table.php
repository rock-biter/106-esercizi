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
        Schema::table('posts', function (Blueprint $table) {
            // aggiungiamo campo category_id
            $table->unsignedBigInteger('category_id')->nullable()->after('id');
            // aggiugniamo il vincolo della realzione
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null')->onUpdate('cascade');
            // name: posts_category_id_foreign
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // rimuovere il vincolo della relazione
            // $table->dropForeign('posts_category_id_foreign');
            $table->dropForeign(['category_id']);
            // droppare la colonna category_id
            $table->dropColumn('category_id');
        });
    }
};
