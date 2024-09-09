<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accomplishment extends Model
{
    protected $table = 'accomplishments';

    // Add any necessary fields
    protected $fillable = ['accomplishment_type', 'period', 'acc_others', 'your_data_column'];
}
