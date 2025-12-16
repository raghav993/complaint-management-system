<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_history', function (Blueprint $table) {
            $table->integer('branch')->nullable();
            $table->integer('sno')->unsigned()->autoIncrement();
            $table->integer('UserID')->default(0);
            $table->string('Username', 50)->nullable();
            $table->string('name', 50)->nullable();
            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();
            $table->char('display', 1)->nullable();
            $table->timestamp('date_of_entry')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('Emp_id', 9)->default('0');
            $table->string('service', 1)->default('L');
            $table->integer('flag_avi')->nullable();
            $table->string('remark', 1000)->nullable();
            $table->string('remark2', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_history');
    }
};