<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->date('activity_date');
            $table->string('activity_manager')->nullable();
            $table->string('manager_others')->nullable();
            $table->string('activity_leader')->nullable();
            $table->string('leader_others')->nullable();
            $table->string('activity_partner')->nullable();
            $table->string('partner_others')->nullable();
            $table->text('project_summary')->nullable();
            $table->text('project_objective_1')->nullable();
            $table->text('project_objective_2')->nullable();
            $table->text('project_objective_3')->nullable();
            $table->text('project_objective_4')->nullable();
            $table->text('project_objective_5')->nullable();
            $table->text('project_objective_6')->nullable();
            $table->text('scope_of_work')->nullable();
            $table->text('key_deliverables')->nullable();
            $table->text('key_deliverables_1')->nullable();
            $table->text('key_deliverables_2')->nullable();
            $table->text('key_deliverables_3')->nullable();
            $table->text('key_deliverables_4')->nullable();
            $table->text('key_deliverables_5')->nullable();
            $table->text('key_deliverables_6')->nullable();
            $table->date('open_date')->nullable();
            $table->string('phase')->nullable();
            $table->string('file_input')->nullable();
            $table->binary('some_column_name');
            $table->string('activity_team')->nullable();
            $table->string('role')->nullable();
            $table->string('responsibility')->nullable();
            $table->string('team_others')->nullable();
            $table->text('comments')->nullable();
            $table->string('images_title')->nullable();
            $table->text('images_desc')->nullable();
            $table->date('images_date')->nullable();
            $table->longblob('upload_images')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
};