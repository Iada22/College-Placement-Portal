<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $fillable = [
        'job_title',
        'company_name',
        'location',
        'salary',
        'description',
        'qualification',
        'deadline',
    ];
}
