<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'organization_id',
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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }

    public function application_form()
{
    return $this->hasMany(Application_form::class, 'job_id');
}


}
