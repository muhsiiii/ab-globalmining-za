<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterNewCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('new_countries', function (Blueprint $table) {
            $table->longText('address')->after('country');
            $table->string('tel')->after('address');
            $table->string('fax')->after('tel');
            $table->longText('url')->after('fax');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('new_countries', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('tel');
            $table->dropColumn('fax');
            $table->dropColumn('url');
        });
    }
}
