<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTestFieldToUsersTable extends Migration {

    public function up()
    {
        Schema::table('users', function ($table) {
            $table->text('yiannis_test_field')->nullable();
        });

    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('yiannis_test_field');
        });
    }
}