<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_number');
            $table->string('project_ref_number')->nullable();
            $table->string('description');
            $table->string('itemCode');          
            $table->string('price');
            $table->string('customer_delivery_status')->nullable();
            $table->string('payment_status')->nullable();
            $table->smallInteger('approval_status')->nullable();
            $table->string('client_type')->nullable();
            $table->string('client_id')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
