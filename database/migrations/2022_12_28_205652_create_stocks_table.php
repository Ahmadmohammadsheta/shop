<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->foreignId('color_id')->constrained()->cascadeOnDelete();
            $table->foreignId('size_id')->constrained()->cascadeOnDelete();
            $table->decimal('sale_price', 10, 2)->nullable()->default(0);
            $table->decimal('bay_price', 10, 2)->nullable()->default(0);
            $table->decimal('bay_discount', 4, 2)->nullable()->default(0);
            $table->integer('quantity')->nullable()->default(0);
            $table->tinyInteger('min_quantity');
            $table->unsignedBigInteger('trader_id');
            $table->string('stock_code');
            $table->bigInteger('barcode');
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
        Schema::dropIfExists('stocks');
    }
};
