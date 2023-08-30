<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'job_title',
        'description',
        'creator',
        'address',
        'zipcode',
        'status',
        'is_published',
        'is_remote',
        'skill',
        'experience',
        'education',
        'budget',
        'bid_close',
        'deadline',
        'career_page_url',
        'is_pinned_in_career_page',
    ];
    
}
