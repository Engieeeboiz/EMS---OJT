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
            $table->string('emp_contact_number', 11)->after('emp_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('add_employee_table', function (Blueprint $table) {
            $table->dropColumn('emp_contact_number');
        });
    }
};
