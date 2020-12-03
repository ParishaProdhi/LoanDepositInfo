<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('phone');
            $table->bigInteger('nid');
            $table->longText('address');
            $table->date('bday');
            $table->enum('gender', ['male', 'female', 'others']);
            $table->enum('app_type', ['loan', 'deposit']);
            $table->string('loan_type');
            $table->string('dep_type');
            $table->string('dep_scheme_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
