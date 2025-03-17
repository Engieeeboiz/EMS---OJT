<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('add_employee_table', function (Blueprint $table) {
            $table->integer('emp_ID')->primary();
            $table->timestamps();
            $table->string('emp_name');
            $table->string('emp_gender');
            $table->integer('emp_age');
            $table->date('emp_birthday');
            $table->string('emp_address');
            $table->string('emp_company');
            $table->string('emp_position');
            $table->string('emp_contact_person');
            $table->string('emp_contact_p_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_employee_table');
    }
};
