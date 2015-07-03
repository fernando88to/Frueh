<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 *
 * php artisan make:migration add_votes_to_users_table --table=users
 */
class AddFebrabanBancos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bancos', function (Blueprint $table) {
            $table->integer("codigo_febraban")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bancos', function (Blueprint $table) {
            $table->dropColumn("codigo_febraban");
        });
    }
}
