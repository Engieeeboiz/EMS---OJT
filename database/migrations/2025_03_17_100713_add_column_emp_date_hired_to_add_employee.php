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
            $table->date('emp_date_hired')->after('emp_position')->default(DB::raw('CURRENT_DATE'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('add_employee_table', function (Blueprint $table) {
            $table->dropColumn('emp_date_hired');
        });
    }
};
