<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table-> Integer("google_id");
            $table-> Integer("facebook_id");
            $table-> string("name",100);
            $table-> string("email",100);
            $table-> string("address");
            $table-> text("biography");
            $table-> date("dob");
            $table-> enum("gender",['Male', 'Female','Other']);
            $table-> string("phone",20);
            $table-> string("job");
            $table-> string("username",100);
            $table-> string("company");
            $table-> string("password");
            $table-> string("reset_password_token",20);
            $table-> dateTime("token_expired_at");
            $table-> dateTime("created_at");
            $table-> dateTime("updated_at");
            $table-> dateTime("deleted_at");               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}