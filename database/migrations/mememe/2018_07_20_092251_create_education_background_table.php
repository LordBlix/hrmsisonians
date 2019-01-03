<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationBackgroundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_education', function (Blueprint $table) {
            $table->increments('id');

            $table->string('employeeID', 20);
            $table->foreign('employeeID')
                ->references('employeeID')
                ->on('employees')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');

            $table->enum('type', ['elementary', 'high_school', 'graduation', 'other']);
            $table->string('school');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('graduation_year');
            $table->string('honor_received');
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
        Schema::dropIfExists('education_background');
    }
}
