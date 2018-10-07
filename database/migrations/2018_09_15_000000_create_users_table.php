<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile_number');
            $table->integer('role')->default(100);
            $table->integer('group_id')->unsigned();
            $table->integer('is_leader')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->index('group_id', 'users_group_id_index');

            $table->foreign('group_id', 'users_group_id_foreign')->references('id')->on('groups');
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
            $table->dropForeign('users_group_id_foreign');

            $table->dropIndex('users_group_id_index');
        });
        Schema::dropIfExists('users');
    }
}
