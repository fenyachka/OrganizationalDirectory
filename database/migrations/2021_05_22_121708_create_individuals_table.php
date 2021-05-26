<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->boolean('gender')->default(0);
            $table->string('personal_number');
            $table->date('birth_date');
            $table->string('city');
            $table->string('phone_number_1');
            $table->string('phone_number_2')->nullable();
            $table->timestamps();

        });

        Schema::create('individual_organization', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('individual_id');
            $table->unsignedBigInteger('organization_id');
            $table->timestamps();
            $table->unique(['individual_id', 'organization_id']);
            $table->foreign('individual_id')->references('id')->on('individuals')->onDelete('cascade');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuals');
    }
}
