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
        Schema::table('add_employee_table', function (Blueprint $table) {
            $table->string('emp_salary')->after('emp_position')->default(560);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('add_employee_table', function (Blueprint $table) {
            $table->dropColumn('emp_salary');
        });
    }
};
