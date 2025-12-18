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
          Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('complaint_no');
            $table->foreignId('user_id')->nullable()->constrained('users', 'sno')->cascadeOnDelete();
            $table->foreignId('section_id')->nullable()->constrained('sections');
            $table->foreignId('item_id')->nullable()->constrained('items');
            $table->foreignId('engineer_id')->nullable()->constrained('engineers');
            $table->text('sr_no')->nullable();
            $table->text('problem')->nullable();
            $table->text('company')->nullable();
            $table->text('model_no')->nullable();
            $table->text('person_name')->nullable();
            $table->enum('priority', ['low', 'medium', 'high'])->default('medium');
            $table->enum('status', ['open', 'assigned', 'in_progress', 'completed', 'closed'])->default('open');
            $table->timestamp('complaint_date')->useCurrent();
            $table->timestamp('completed_at')->nullable();
            $table->text('remark')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
