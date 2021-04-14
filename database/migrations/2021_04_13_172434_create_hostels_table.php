<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id')->index();
            $table->string('hostel_name');
            $table->string('town');
            $table->string('state');
            $table->longText('address');
            $table->string('property');
            $table->string('RoomNum');
            $table->text('amount');
            $table->string('period');
            $table->text('Amenities');
            $table->text('utilities');
            $table->text('rules');
            $table->longText('tenantType');
            $table->string('image_name');
            $table->timestamps();

            $table->foreign('agent_id')
                ->references('id')
                ->on('agents')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hostels');
    }
}
