<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'form_data';
    protected $fillable = [
        'activity_name', 'activity_date', 'activity_manager', 'manager_others', 
        'activity_leader', 'leader_others', 'activity_partner', 'partner_others', 
        'project_summary', 'project_objectives', 'scope_of_work', 'key_deliverables', 
        'open_date', 'phase', 'upload_gantt', 'activity_team', 'role', 'responsibility', 
        'team_others', 'comments', 'images_title', 'images_desc', 'images_date', 'upload_images', 
        'created_at', 'updated_at','pdf_path'
    ];
}
