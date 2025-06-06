<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('img_url', 8190);
            $table->string('item_name', 255);
            $table->string('brand_name', 255);
            $table->integer('price');
            $table->string('description',255);
            $table->tinyInteger('condition')->comment('1：良好、2：目立った傷や汚れなし、3：やや傷や汚れあり、4：状態が悪い');
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
        Schema::dropIfExists('items');
    }
}
