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
        if (Schema::hasTable('employees')) {
            $this->down();
        }

        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('last_name', 100);
            $table->string('first_name', 20);
            $table->date('birth_day');
            $table->boolean('gender');
            $table->string('address', 200)->nullable();
            $table->string('phone_number', 30);
            $table->string('department', 100);
            $table->string('position', 100);
            $table->time('start_time');
            $table->time ('end_time');
            $table->string('working_day', 20);
            $table->unsignedInteger('salary');
            $table->unsignedInteger('office_id')->nullable();
            $table->text('note')->nullable();
            $table->date('join_day');
            $table->date('left_day')->nullable();
            $table->longText('avatar')->nullable();
            $table->tinyInteger('status');

            $table->timestamps();
            $table->unsignedInteger('created_user')->nullable();
            $table->unsignedInteger('updated_user')->nullable();

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
        Schema::dropIfExists('employees');
    }
};
