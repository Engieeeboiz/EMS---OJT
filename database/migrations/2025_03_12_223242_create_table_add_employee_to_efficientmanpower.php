<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_add_employee_to_efficientmanpower', function (Blueprint $table) {
            $table->string('emp_ID')->primary();
            $table->timestamps();
            $table->string('emp_lastName');
            $table->string('emp_firstName');
            $table->string('emp_midleName')->nullable();
            $table->string('emp_gender');
            $table->integer('emp_age');
            $table->date('emp_birthday');
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
        Schema::dropIfExists('table_add_employee_to_efficientmanpower');
    }
};
