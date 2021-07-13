<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->string('task_id',45);
            $table->string('project_id',45);
            $table->string('title',255);
            $table->longText('description');
            $table->tinyInteger('status')->default(1)->comment('1 = ToDo, 2 = In Progress, 3 = QA, 4 = Done');
            $table->boolean('is_active')->default(1)->comment('0 = Inactive, 1 = Active');
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
        Schema::dropIfExists('task');
    }
}
