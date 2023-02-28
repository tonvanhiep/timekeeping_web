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
        if (Schema::hasTable('timekeepers')) {
            $this->down();
        }

        Schema::create('timekeepers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('office_id')->nullable();
            $table->string('timekeeper_name', 100)->nullable();
            $table->string('account', 100);
            $table->string('password', 100);
            $table->tinyInteger('status');;

            $table->timestamps();
            $table->unsignedInteger('created_user')->nullable();
            $table->unsignedInteger('updated_user')->nullable();

            $table->foreign('office_id')->references('id')->on('offices')->onUpdate('cascade')->nullOnDelete();
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
        Schema::dropIfExists('timekeepers');
    }
};
