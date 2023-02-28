<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('timesheets')) {
            $this->down();
        }

        Schema::create('timesheets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('timekeeper_id')->nullable();
            $table->timestamp('timekeeping_at');
            $table->longText('face_image');
            $table->tinyInteger('status');
            $table->text('note')->nullable();

            $table->timestamps();
            $table->unsignedInteger('created_user')->nullable();
            $table->unsignedInteger('updated_user')->nullable();

            $table->foreign('employee_id')->references('id')->on('employees')->onUpdate('cascade')->cascadeOnDelete();
            $table->foreign('timekeeper_id')->references('id')->on('timekeepers')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('created_user')->references('id')->on('employees')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('updated_user')->references('id')->on('employees')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timesheets');
    }
};
