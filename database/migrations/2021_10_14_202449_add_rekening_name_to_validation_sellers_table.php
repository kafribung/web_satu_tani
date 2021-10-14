<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRekeningNameToValidationSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('validation_sellers', function (Blueprint $table) {
            $table->string('rekening_name')->after('rekening_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('validation_sellers', function (Blueprint $table) {
            $table->dropColumn('rekening_name');
        });
    }
}
