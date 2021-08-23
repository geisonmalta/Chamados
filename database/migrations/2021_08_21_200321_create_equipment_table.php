<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('imei',15);
            $table->boolean('tested');            
            $table->string('storage');
            $table->boolean('password');
            $table->string('accessories');
            $table->boolean('backup');
            $table->string('state');
            $table->string('problems_found');
            $table->string('problems_reported');
            $table->string('comments');
            $table->morphs('equipment_type',20);
            $table->morphs('brand',20);
            $table->morphs('service_order',20);            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}
