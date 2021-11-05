<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->unsignedInteger('product_price');
            $table->unsignedInteger('shipping_cost');
            $table->unsignedInteger('total');
            $table->enum('payment_method', ['cod', 'transfer']);
            $table->json('carts');
            // $table->json('products');
            $table->enum('status', ['menunggu konfirmasi', 'menunggu pembayaran', 'diproses', 'dikirim', 'selesai']);
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
        Schema::dropIfExists('checkouts');
    }
}
