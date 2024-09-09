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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->date('activity_date');
            $table->string('activity_manager');
            $table->string('manager_others')->nullable();
            $table->string('activity_leader');
            $table->string('leader_others')->nullable();
            $table->string('activity_partner');
            $table->string('partner_others')->nullable();
            $table->text('project_summary');
            $table->text('project_objectives');
            $table->string('scope_of_work');
            $table->text('key_deliverables');
            $table->date('open_date');
            $table->string('phase');
            $table->string('upload_gantt')->nullable(); // To store file paths if needed
            $table->string('activity_team');
            $table->string('role');
            $table->string('responsibility');
            $table->string('team_others')->nullable();
            $table->text('comments');
            $table->text('images_title')->nullable();
            $table->text('images_desc')->nullable();
            $table->date('images_date')->nullable();
            $table->string('upload_images')->nullable(); // To store file paths if needed
            $table->timestamps();
            $table->string('pdf_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
