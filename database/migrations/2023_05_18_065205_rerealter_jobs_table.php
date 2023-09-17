<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RerealterJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('reporting_to')->nullable()->after('country');
            $table->string('department')->nullable()->after('reporting_to');
            $table->string('location')->nullable()->after('department');
            $table->string('date_issued')->nullable()->after('location');
            $table->string('job_type')->nullable()->after('date_issued'); 
            $table->longText('responsibilities')->nullable()->after('job_type');
            $table->string('skills')->nullable()->after('responsibilities');
            $table->string('qualifications')->nullable()->after('skills');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('reporting_to');
            $table->dropColumn('department');
            $table->dropColumn('location');
            $table->dropColumn('date_issued');
            $table->dropColumn('job_type'); 
            $table->dropColumn('responsibilities');
            $table->dropColumn('skills');
            $table->dropColumn('qualifications');
        });
    }
}
