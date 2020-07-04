<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('goals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')
                ->unsigned()
                ->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('parent_id')
                ->nullable()
                ->unsigned()
                ->foreign('goal_id')
                ->references('id')->on('goals')
                ->onDelete('cascade');
            $table->string('name');
            $table->text('description')->nullable();
            $table->double('units');
            $table->double('budget')->nullable();
            $table->datetime('start');
            $table->datetime('end');
            $table->timestamps();
        });

        Schema::create('kpi_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->double('value');
            $table->double('estimated_time')->nullable();
            $table->timestamps();
        });

        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')
                ->unsigned()
                ->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('goal_id')
                ->unsigned()
                ->foreign('goal_id')
                ->references('id')->on('goals')
                ->onDelete('cascade');
            $table->integer('kpi_type_id')
                ->unsigned()
                ->foreign('kpi_type_id')
                ->references('id')->on('kpi_types')
                ->onDelete('cascade');
            $table->string('note')->nullable();
            $table->double('quantity')->nullable();
            $table->double('cost')->nullable();
            $table->datetime('start');
            $table->integer('duration')->nullable();
            $table->timestamps();
        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')
                ->unsigned()
                ->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('goal_id')
                ->unsigned()
                ->foreign('goal_id')
                ->references('id')->on('goals')
                ->onDelete('cascade');
            $table->integer('kpi_type_id')
                ->unsigned()
                ->foreign('kpi_type_id')
                ->references('id')->on('kpi_types')
                ->onDelete('cascade');
            $table->string('description')->nullable();
            $table->double('quantity')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('min')->nullable();
            $table->integer('max')->nullable();
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('goal_kpi_type', function (Blueprint $table) {
            $table->integer('goal_id')
                ->unsigned()
                ->foreign('goal_id')
                ->references('id')->on('goals')
                ->onDelete('cascade');
            $table->integer('kpi_type_id')
                ->unsigned()
                ->foreign('kpi_type_id')
                ->references('id')->on('kpi_types')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_id')
                ->unsigned()
                ->foreign('task_id')
                ->references('id')->on('tasks')
                ->onDelete('cascade');
            $table->datetime('start');
            $table->datetime('end');
            $table->integer('interval')->nullable();
            $table->integer('total')->nullable();
            $table->integer('quantifier_id')
                ->unsigned()
                ->foreign('quantifier_id')
                ->references('id')->on('quantifiers')
                ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('quantifiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
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
        //
        Schema::dropIfExists('goals');
        Schema::dropIfExists('kpi_types');
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('logs');
        Schema::dropIfExists('goal_kpi_type');
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('quantifiers');
    }
}
