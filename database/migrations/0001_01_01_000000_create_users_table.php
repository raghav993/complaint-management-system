<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('sno'); 
            $table->string('branch', 50)->nullable();
            $table->string('UserID', 50)->nullable();
            $table->string('Username', 100)->nullable();
            $table->string('name', 150)->nullable();

            $table->date('from_date')->nullable();
            $table->date('to_date')->nullable();

            $table->char('display', 1)->default('Y');
            $table->dateTime('date_of_entry')->nullable();

            $table->string('Emp_id', 50)->nullable();
            $table->string('service', 100)->nullable();

            $table->tinyInteger('flag_avi')->default(0);

            $table->string('remark', 255)->nullable();
            $table->string('remark2', 255)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
