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
        Schema::table('users', function (Blueprint $table) {
            $table->string("employee_id", 10)->nullable()->unique();
            $table->string('first_name',20)->nullable();
            $table->string('last_name',20)->nullable();
            $table->string('other_names',20)->nullable();
            $table->string('phone',20)->nullable();
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
            $table->dropColumn([
                'first_name',
                'last_name',
                'other_names',
                'phone',
                'employee_id',
            ]);
        });
    }
};
