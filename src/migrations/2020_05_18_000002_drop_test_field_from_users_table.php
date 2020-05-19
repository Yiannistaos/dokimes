<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class DropTestFieldFromUsersTable extends Migration {

    public function up()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('yiannis_test_field');
        });

    }

    public function down()
    {
    }
}