<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->enum('kategori',['kaos','sepatu','jaket']);
            $table->text('description');
            $table->string('slug');
            $table->string('foto');
            $table->string('user_email');
            $table->string('user_whatsapp');
            $table->string('user_instagram');
            $table->string('isPublic');
            $table->string('approve')->default('wait');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
