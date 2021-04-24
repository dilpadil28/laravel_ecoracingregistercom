<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSosmedToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('facebook')->nullable()->after('link_whatsapp');
            $table->string('instagram')->nullable()->after('facebook');
            $table->string('youtube')->nullable()->after('instagram');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('facebook');
            $table->dropColumn('instagram');
            $table->dropColumn('youtube');
        });
    }
}
