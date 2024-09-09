<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'activity_name', 'activity_date', 'activity_manager', 'manager_others',
        'activity_leader', 'leader_others', 'activity_partner', 'partner_others',
        'project_summary', 'project_objective_1', 'project_objective_2', 'project_objective_3',
        'project_objective_4', 'project_objective_5', 'project_objective_6', 'scope_of_work',
        'key_deliverables', 'key_deliverables_1', 'key_deliverables_2', 'key_deliverables_3',
        'key_deliverables_4', 'key_deliverables_5', 'key_deliverables_6', 'open_date', 'phase',
        'file_input', 'upload_gantt', 'activity_team', 'role', 'responsibility', 'team_others',
        'comments', 'images_title', 'images_desc', 'images_date', 'upload_images'
    ];
}
