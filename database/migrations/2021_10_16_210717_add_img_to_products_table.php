<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('img_1')->after('discount');
            $table->string('img_2')->after('img_1');
            $table->string('img_3')->after('img_2');
            $table->string('img_4')->after('img_3');
            $table->string('img_5')->after('img_4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'img_1',
                'img_2',
                'img_3',
                'img_4',
                'img_5',
            ]);
        });
    }
}
