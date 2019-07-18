<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('companies');
            $table->string('company_id');//website/name/email/id
            $table->string('email');//website/name/email/id
            $table->integer('phone');//website/name/email/id
            $table->timestamps();
        });
    }

    /**First name (required), last name (required), Company (foreign key to Companies), email, phone
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
