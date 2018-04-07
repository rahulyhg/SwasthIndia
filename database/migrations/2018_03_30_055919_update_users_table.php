<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('aadhar_no')->unique()->after('email');
            $table->string('blood_group', 3)->nullable()->after('aadhar_no');
            $table->string('phone', 12)->after('blood_group');
            $table->string('address', 512)->nullable()->after('phone');
            $table->string('city', 100)->nullable()->after('address');
            $table->string('state', 100)->nullable()->after('city');
            $table->boolean('is_doctor')->default(0)->after('state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_doctor');
            $table->dropColumn('phone');
            $table->dropColumn('blood_group');
            $table->dropColumn('aadhar_no');
        });
    }
}
