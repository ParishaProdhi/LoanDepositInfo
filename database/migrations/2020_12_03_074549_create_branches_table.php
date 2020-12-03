<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->string('BRANCH_NAME');
            $table->bigInteger('FI_BRANCH_ID');
            $table->string('Email_address');
            $table->string('DIVISION');
            $table->integer('DIVISION_ID');
            $table->string('DISTRICT');
            $table->integer('DISTRICT_ID');
            $table->string('UPAZILA');
            $table->integer('UPAZILA_ID');
            $table->string('UNION_NAME');
            $table->integer('UNION_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
